function openTab( event, tab )
   {
       // declare all variables
       var index, tabcontent, tablinks;

       // get all elements with class = "tabcontent" and hide them
       tabcontent = document.getElementsByClassName( "tabcontent" );
       for( index = 0; index < tabcontent.length; index++ )
       {
           tabcontent[ index ].style.display = "none";
       }

       // get all elements with class = "tablinks" and remove the class "active"
       tablinks = document.getElementsByClassName( "tablinks" );
       for( index = 0; index < tablinks.length; index++ )
       {
           tablinks[ index ].className = tablinks[ index ].className.replace(" active", "");
       }

       // show the current tab, and add an "active" class to the button that opened that tab
       document.getElementById( tab ).style.display = "block";
       evt.currentTarget.className += " active";
   }