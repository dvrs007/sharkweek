$(document).ready(function(){

	var socialArray = ['vine', 'twitter', 'insta'];

	$(window).resize(function() {
        
        if ($(window).width() <= 623) {

        	//set notches

            for (i = 0; i < socialArray.length; i++) {
                var notchNew = document.getElementById(socialArray[i] + "_notch");
                if(socialArray[i] === 'vine'){
                    notchNew.style.visibility = "visible";
                }else{
                    notchNew.style.visibility = "hidden";
                }
            }

        	//set columns

            for (i = 0; i < socialArray.length; i++) {
                var colNew = document.getElementById(socialArray[i] + "_col");
                if(socialArray[i] === 'vine'){
                    colNew.style.display = "block";
                }else{
                    colNew.style.display = "none";
                }
            }

        	//set opacity

            for (i = 0; i < socialArray.length; i++) {
                var opacNew = document.getElementById(socialArray[i] + "_logo");
                if(socialArray[i] === 'vine'){
                    opacNew.style.opacity = "1";
                }else{
                    opacNew.style.opacity = ".5";
                }
            }

            //header click

        	$( ".col-title" ).click(function(index) {

        		if ($(window).width() <= 623){

	        		//get selected ID

	        		var currentSelection = index.currentTarget.id;

	        		//put selected items into persepctive

	        		var chosenNotch = document.getElementById(currentSelection + "_notch");
	        		chosenNotch.style.visibility = "visible";

	        		var chosenCol = document.getElementById(currentSelection + "_col");
	        		chosenCol.style.display = "block";

	        		var chosenOpacity = document.getElementById(currentSelection + "_logo");
	        		chosenOpacity.style.opacity = "1";

	        		//hide elements not selected

	        		var socialClasses = document.getElementsByClassName('col-title');

	        		for (i = 0; i < socialClasses.length; i++) {

	        			if(socialClasses[i].id != currentSelection){

	        				var otherNotch = document.getElementById(socialClasses[i].id + "_notch");
	        				otherNotch.style.visibility = "hidden";

	        				var otherFeed = document.getElementById(socialClasses[i].id + "_col");
	        				otherFeed.style.display = "none";

	        				var otherOpacity = document.getElementById(socialClasses[i].id + "_logo");
	        				otherOpacity.style.opacity = ".5";
	        			}
	        		}

        			return true;

        		}else{

        			return false;

        		}

    		});

        }else{

        	//IF WINDOW RESIZE OCCURS

        	//reset notches

        	for (i = 0; i < socialArray.length; i++) {

		        var Initial = document.getElementById(socialArray[i] + "_notch");
		        Initial.style.visibility = "visible";

	        }

	        //reset columns

	        for (i = 0; i < socialArray.length; i++) {

		        var ColInitial = document.getElementById(socialArray[i] + "_col");
		        ColInitial.style.display = "block";

	        }

        	//reset opacity

        	for (i = 0; i < socialArray.length; i++) {

		        var OpacInitial = document.getElementById(socialArray[i] + "_logo");
		        OpacInitial.style.opacity = "1";

	        }

    	}   

    }).resize();  

});