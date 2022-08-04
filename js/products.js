window.addEventListener("load", function(){
    let isInterestedImages=document.getElementsByClassName("fa-heart");
    Array.from(isInterestedImages).forEach(function(el){
        el.addEventListener("click", function(event){
            let httpRequest=new XMLHttpRequest();
            httpRequest.addEventListener("load", toggleInterestedSuccess);   //on success
            httpRequest.addEventListener("error", on_error);   //on failure
            let property_id=event.target.getAttribute("product_id");  //to access an attribute of the element
            httpRequest.open("GET", "toggle_interested.php?property_id="+property_id);
            httpRequest.send();
            document.getElementById("loading").style.display="block";
        });
    });
});

let toggleInterestedSuccess=function(event){
    document.getElementById("loading").style.display="none";
    let response=JSON.parse(event.target.responseText);
    if(response.is_logged_in && response.success){
        let product_id=response.product_id;
        let interested_image=document.querySelectorAll("product-id-"+product_id+" .is-interested-image")[0];
        let interested_user_count=document.querySelectorAll("product-id-"+product_id+" .interested-user-count")[0];
        if(response.is_interested){
            interested_image.classList.add("fa-solid");
            interested_image.classList.remove("fa-regular");
            interested_user_count.innerHTML=parseInt(interested_user_count.innerHTML)+1;
        }
        else{
            interested_image.classList.add("fa-regular");
            interested_image.classList.remove("fa-solid");
            interested_user_count.innerHTML=parseInt(interested_user_count.innerHTML)-1;
        }
    }
    else if(!response.is_logged_in)
    {
        alert("Please login first!");
    }
    else{
        alert("Oops! something wrong wrong happend");
    }
}