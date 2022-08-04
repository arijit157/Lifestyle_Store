window.addEventListener("load", function(){
    let isInterestedImages=document.getElementsByClassName("fa-heart");
    Array.from(isInterestedImages).forEach(function(el){
        el.addEventListener("click", function(event){
            let httpRequest=new XMLHttpRequest();
            httpRequest.addEventListener("load", interestedImageSuccess);
            httpRequest.addEventListener("error", on_error);
            let property_id=event.target.getAttribute("product_id");
            httpRequest.open("GET", "toggle_interested.php?property_id="+property_id);
            httpRequest.send();
            document.getElementById("loading").style.display="block";
        });
    });
});

let interestedImageSuccess=function(){
    
}