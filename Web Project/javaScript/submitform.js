const copyText = document.querySelector("#copyText");
         const button = document.querySelector("button");
         const tooltip = document.querySelector(".tooltip");
         button.addEventListener('click', function(){
           copyText.select();
           tooltip.classList.add("show");
           setTimeout(function(){
             tooltip.classList.remove("show");
           },700);
           if(document.execCommand("copy")){
             
           }else{
             alert("Something went wrong!");
           }
         });
      