 <!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>   
          <style>
            form{
                border:thin solid;
                border-color:darkgrey;
                width:450px;
                position: absolute;
                left:50%;
                margin-left:-225px;
                z-indeX:2;
                height:300px;
                text-align:center;
            }
            .circleProgress{
                display:inline-block;
                border-radius: 50%;
                width: 20px;
                height: 20px; 
                background-color:red;
            }
            .secondForm{
                  display:none;
                  position:absolute;
                  z-indeX:2;
            }
             .thirdForm{
                  display:none;
                  position:absolute;
                  z-indeX:2;
            }
            .progressHolder{
                  margin-top:300px;
                  position:absolute;
                  width:500px;
                  margin-left:-250px;
                  left:50%;
                  z-indeX:2;
            }
            #dynamicImages{
                box-shadow:2px 2px 8px black;
                border-top-right-radius:10px;
                border-bottom-left-radius:10px;
            }
            table{
                text-align:center;
                margin: 0 auto;

            }
        
          </style>
    </head>
    

    
</html>
<?php
if(isset($_POST['submit'])) 
{
    ?>
 
  <?php
}
else               
{ ?>

 <body onload="primaryLoad()">
        
        <script>
            $(function() {
                $( ".show-option" ).tooltip({
                  show: {
                    effect: "slideDown",
                    delay: 250
                  }
                });
                $( "#hide-option" ).tooltip({
                  hide: {
                    effect: "explode",
                    delay: 250
                  }
                });
                $( "#open-event" ).tooltip({
                  show: null,
                  position: {
                    my: "left top",
                    at: "left bottom"
                  },
                  open: function( event, ui ) {
                    ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
                  }
                });
              });
        </script>
            <form action="hello-world.php" method="POST">
                <Table class="firstForm">
                <tr><th>First</th><th>Information</th></tr>
                <tr><td>First Name:</td><td><input name="firstN" class="show-option" type="text" href="http://jqueryui.com/demos/tooltip/#option-show" title="Enter your first name." ></td></tr>
                <tr><td>Last Name:</td><td><input name="lastN" type="text"class="show-option" type="text" href="http://jqueryui.com/demos/tooltip/#option-show" title="Enter your last name." ></td></tr>
                <tr><td>CWID:</td><td><input name="cwid" type="text"class="show-option" type="text" href="http://jqueryui.com/demos/tooltip/#option-show" title="Enter your Campus Wide ID." ></td></tr>
                <tr><td>Gender:</td><td>
                <select id="gender" name="gender">
                <option value="0">Choose from the List</option>
                <option value="1">Female</option>
                <option value="2">Male</option>
                </select>
                </td></tr>
                </Table> 
            
                <Table class="secondForm">
                <tr><th>Second</th><th>Information</th></tr>
                
                <tr><td>Year:</td><td>
                    <select id="year" name="year">
                        <option value="0">Choose from the List</option>
                        <option value="f">Freshman</option>
                        <option value="so">Sophomore</option>
                        <option value="j">Junior</option>
                        <option value="se">Senior</option>
                    </select>
                </td></tr>
                <tr><td>Desired Residence:</td><td>
                    <select id="hall" name="hall">
                        <option value="0">Choose from the List</option>
                        <option value="freshman" class="freshman">Champagnat Hall</option>
                        <option value="freshman" class="freshman">Marian Hall</option>
                        <option value="freshman" class="freshman">Sheahan Hall</option>
                        <option value="freshman" class="freshman">Leo Hall</option>
                        <option value="sophomores" class="sophomore">Lower New Townhouses</option>
                        <option value="sophomores" class="sophomore">Upper New Townhouses</option>
                        <option value="sophomores" class="sophomore">Foy Townhouses</option>
                        <option value="sophomores" class="sophomore">Midrise Hall</option>
                        <option value="sophomores" class="sophomore">Gartland Commons</option>
                        <option value="juniors" class="senior-junior">Lower West Cedar St Townhouses (N-S)</option>
                        <option value="juniors" class="senior-junior">Upper West Cedar St Townhouses (T-Y) </option>
                        <option value="juniors" class="senior-junior">Fulton Street Townhouses</option>
                        <option value="juniors" class="senior-junior">Talmadge Court</option>
                        <option value="seniors" class="senior-junior">New Fulton Townhouses</option>
                    </select>
                </td></tr>
                <tr><Td colspan="2"><div id="imgBx"><img id="dynamicImages" src="#" alt="#"> </div></Td></tr>
                </Table> 
            
                <Table class="thirdForm">
                <tr><th>Third</th><th>Information</th></tr>
                <tr><td>Preferences:<a class="show-option" href="http://jqueryui.com/demos/tooltip/#option-show" title="Extra text to go here">?</a></td><td><input type="checkbox">Laundry on Site</input><input type="checkbox">Special Needs</input><input type="checkbox">Kitchen</input></td></tr>
                <tr><td colspan="2"><input type="submit" value="Submit for Verification"></td></tr>
                </Table> 
                
            </form>
            <center>
                <section id="menuSection">
                    <div class="progressHolder">
                     <hr>
                        <figure class="circleProgress" id="circ1">1</figure>
                        <figure class="circleProgress" id="circ2">2</figure>
                        <figure class="circleProgress" id="circ3">3</figure>
                    <hr>
                    <div id="progressbar"></div>
                    </div>
                </section>
            </center>
        <!--<a id="show-option" href="http://jqueryui.com/demos/tooltip/#option-show" title="slide down on show">show</a>-->
        <script>
        $(function() {
            $( "#progressbar" ).progressbar({
                      value: 33.3
                    });
                    $(".circleProgress").hover(function(){
                        $(this).css('cursor','pointer');
                    })
            $("#circ1").click(function(){
               
                $(".thirdForm").fadeOut("slow");
                $(".firstForm").fadeIn("slow");
                $(".secondForm").fadeOut("fast");
                 $( "#progressbar" ).progressbar({
                      value: 33.3
                    });

            });
             $("#circ2").click(function(){
                $(".firstForm").fadeOut("slow");
                $(".secondForm").fadeIn("slow");
                $(".thirdForm").fadeOut("fast");
                $( "#progressbar" ).progressbar({
                      value: 66.6
                    });
            });
             $("#circ3").click(function(){
                $(".secondForm").fadeOut("slow");
                $(".firstForm").fadeOut("fast");
                $(".thirdForm").fadeIn("slow");
                 $( "#progressbar" ).progressbar({
                      value: 99.9
                    });
            });
            var selected= $("#year option:selected").text();
                // if(selected=="Choose from the List"){
                //     $("#hall").hide();
                // }else{
                //     $("#hall").show();
                // }
            $("#hall").change(function(){
                var selectedH= $("#hall option:selected").text();
                switch(selectedH){
                case "Champagnat Hall":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/champagnat.jpg");
                    break;
                case "Marian Hall":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/marian.jpg");
                    break;
                case "Sheahan Hall":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/sheahan.jpg");
                     break;
                case "Leo Hall":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/leohall.jpg");
                     break;
                case "Lower New Townhouses": 
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/newtown.jpg");
                     break;
                case "Upper New Townhouses":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/newtown.jpg");
                     break;
                case "Foy Townhouses":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/foytownhouses.jpg");
                     break;
                case "Midrise Hall":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/midrise.jpg");
                     break;
                case "Gartland Commons":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/gartland.jpg");
                     break;
                case "Lower West Cedar St Townhouses (N-S)":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/lwc.jpg");
                     break;
                case "Upper West Cedar St Townhouses (T-Y)":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/uwc.jpg");
                     break;
                case "Fulton Street Townhouses":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/fulton.jpg");
                     break;
                case "Talmadge Court":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/talmadge.jpg");
                     break;
                case "New Fulton Townhouses":
                    $("#dynamicImages").attr("src", "https://www.marist.edu/housing/images/newfulton.jpg");
                     break;
                    default:
                    $("#dynamicImages").attr("src", "#");
                    break;
                }
            });
            
            $("#year").change(function(){
                var selected= $("#year option:selected").text();
                
                switch(selected){
                        case "Sophomore":
                            $('#hall').find('option:first').attr('selected', 'selected');
                            $("#dynamicImages").attr("src", "#");
                            $(".freshman").hide();
                            $(".sophomore").show();
                            $(".senior-junior").hide();
                            
                        break;
                        
                        case "Freshman":
                             $('#hall').find('option:first').attr('selected', 'selected');
                            $("#dynamicImages").attr("src", "#");
                            $(".sophomore").hide();
                            $(".senior-junior").hide();
                            $(".freshman").show();
                        break;
                        
                        case "Junior":
                         $('#hall').find('option:first').attr('selected', 'selected');
                            $("#dynamicImages").attr("src", "#");
                            $(".senior-junior").show();
                            $(".freshman").hide();
                            $(".sophomore").hide();
                        break;
                        
                        case "Senior":
                            $('#hall').find('option:first').attr('selected', 'selected');
                            $("#dynamicImages").attr("src", "#");
                            $(".senior-junior").show();
                            $(".freshman").hide();
                            $(".sophomore").hide();
                        break;
                        
                        default: 
                            alert("warning");
                        }
            });
            
            
        });
        
            // function dormChoice(){
            //     var year=document.getElementById("year");
            //     var yearValue=year.options[year.selectedIndex].text;
            //     var hall=document.getElementById("hall");
            //     var hallValue=hall.options[hall.selectedIndex].text;
            //     console.log(yearValue);
            //     if (yearValue=="Freshman"){
            //          var hallValue=hall.options[hall.selectedIndex].text="Sheahan Hall";
            //     }
               
            // }
        </script>

    </body>
</script>
<?php

}
?>