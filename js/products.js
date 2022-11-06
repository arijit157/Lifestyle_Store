window.addEventListener("load", function(){
    var isInterestedImages=document.getElementsByClassName("fa-heart");
    //let isInterestedImages=document.getElementsByClassName("is-interested-image");
    Array.from(isInterestedImages).forEach(function(el){
        el.addEventListener("click", function(event){
            var httpRequest=new XMLHttpRequest();
            httpRequest.addEventListener("load", toggleInterestedSuccess);   //on success
            httpRequest.addEventListener("error", on_error);   //on failure
            var product_id=event.target.getAttribute("product_id");  //to access an attribute of the element
            httpRequest.open("GET", "api/toggle_interested_product.php?product_id="+product_id);
            httpRequest.send();
            document.getElementById("loading").style.display="block";
        });
    });
});

var toggleInterestedSuccess=function(event){
    document.getElementById("loading").style.display="none";
    var response=JSON.parse(event.target.responseText);
    console.log(response);
    if(response.success){
        var product_id=response.product_id;
        var interested_image=document.querySelectorAll(".product-id-"+product_id+" .is-interested-image")[0];
        var interested_user_count=document.querySelectorAll(".product-id-"+product_id+" .interested-user-count")[0];
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
    else if(!response.success && !response.is_logged_in)
    {
        alert("Oops! something wrong happend");
    }
}
