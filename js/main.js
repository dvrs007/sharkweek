$(document).ready(function(){

	var socialArray = ['vine', 'twitter', 'insta'];

	$(window).resize(function() {
        
        if ($(window).width() <= 623) {

        	//set notches

        	var vineNew = document.getElementById("vine_notch");
        	vineNew.style.visibility = "visible"

        	var twitterNew = document.getElementById("twitter_notch");
        	twitterNew.style.visibility = "hidden";

        	var instaNew = document.getElementById("insta_notch");
        	instaNew.style.visibility = "hidden";

        	//set columns

        	var vineColNew = document.getElementById("vine_col");
        	vineColNew.style.display = "block";

        	var twitterColNew = document.getElementById("twitter_col");
        	twitterColNew.style.display = "none";

        	var instaColNew = document.getElementById("insta_col");
        	instaColNew.style.display = "none";

        	//set opacity

        	var vineOpacNew = document.getElementById("vine_logo");
        	vineOpacNew.style.opacity = "1";

        	var twitterOpacNew = document.getElementById("twitter_logo");
        	twitterOpacNew.style.opacity = ".5";

        	var instaOpacNew = document.getElementById("insta_logo");
        	instaOpacNew.style.opacity = ".5";


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
		        ColInitial.style.visibility = "visible";

	        }

        	//reset opacity

        	for (i = 0; i < socialArray.length; i++) {

		        var OpacInitial = document.getElementById(socialArray[i] + "_logo");
		        OpacInitial.style.visibility = "visible";

	        }

    	}   

    }).resize();  

});