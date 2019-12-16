<?php
if($_SESSION['role'] == "Elever" OR $_SESSION['role'] == "Forældre"){
    header("Location:404.php");
    die("");
}

// $adServer = ""._LDAP_IP."";

// $ldap = ldap_connect($adServer);
// ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
// ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

// $ldaprdn = _SERVER . "\\" . $_SESSION['name'];
// $password = $_SESSION['pw'];

// $bind = @ldap_bind($ldap, $ldaprdn, $password);

// if (FALSE === $bind){
//     // Uh-oh, something is wrong...
//  echo 'Unable to connect to the ldap server';
// }
// if (TRUE === $bind){
// //Virker
//  echo 'Virker :)';

//  $filter="(cn=Elever)";
//  $result = ldap_search($ldap,"dc="._SERVER.",dc="._COM."",$filter);
//  ldap_sort($ldap,$result,"sn");
 
//  $justthese = array('cn');

//  $result=ldap_list($ldap, $ldaprdn, $filter, $justthese) or die("No search data found."); 
 
//  $info = ldap_get_entries($ldap, $result);
 
//  for ($i=0; $i < $info["count"]; $i++) {
//      echo $info[$i]["cn"][0] . '<br />';
//  }
// }
?>
<!-- Opret lektie -->
<div class="modal fade" id="opretLektie">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Opret lektie</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class='modal-body'>
                <!-- Table that holds input fields -->
                <form action='POST_lektie.php' method='post' Name='form1'>
                    <table class='table'>
                        <tr>
                            <td>Titel på lektie</td>
                            <td>
                                <input type='text' autocomplete='off' Name='title'>
                            </td>
                        </tr>
                        <tr>
                            <td>Hvilket fag?</td>
                            <td>
                                <select type="text" Name="subject">
                                    <!-- <option value="all">Hele skolen</option> -->
                                    <option value="dansk">Dansk</option>
                                    <option value="matematik">Matematik</option>
                                    <option value="engelsk">Engelsk</option>
                                    <option value="samfundsfag">Samfundsfag</option>
                                    <option value="kristendom">Kristendom</option>
                                    <option value="geografi">Geografi</option>
                                    <option value="historie">Historie</option>
                                    <option value="idræt">Idræt</option>
                                    <option value="andet">Andet</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hvilken klasse skal lektien være til?</td>
                            <td>
                                <select type="text" Name="class">
                                    <!-- <option value="all">Hele skolen</option> -->
                                    <option value="2010">1. Klasse</option>
                                    <option value="2011">2. Klasse</option>
                                    <option value="2012">3. Klasse</option>
                                    <option value="2013">4. Klasse</option>
                                    <option value="2014">5. Klasse</option>
                                    <option value="2015">6. Klasse</option>
                                    <option value="2016">7. Klasse</option>
                                    <option value="2017">8. Klasse</option>
                                    <option value="2018">9. Klasse</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Beskrivelse<br></td>
                            <td>
                                <textarea rows='5' cols='30' Name='content'></textarea>
                            </td>
                        </tr>
                        <tr>
                        <td><label for="start">Afleverings dato:</label></td>

                        <td><input type="date" id="start" name="date" value="" min=""
                                max=""></td>
                        </tr>
                        <!-- <tr>
                            <td>Afleverings filupload</td>
                            <td>    Understøtter: DOCX, PDF
                                    <input type="file" name="fileupload" accept="audio/*,video/*,image/*,pdf,docx"/>
                            </td>
                        </tr> -->
                        <tr>
                            <td>
                                <input type='submit' Name='Submit' value='Tilføj'>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Anuller</button>
            </div>

        </div>
    </div>
</div>
    <!-- /Opret lektie -->

    <!-- Opret nyhed-->
<div class="modal fade" id="opretNyhed">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Opret Nyhed</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class='modal-body'>
                <!-- Table that holds input fields -->
                <form action='POST_nyhed.php' method='post' Name='form2'>
                    <table class='table'>
                        <tr>
                            <td>Titel på nyhed</td>
                            <td>
                                <input type='text' autocomplete='off' Name='title'>
                            </td>
                        </tr>
                        <tr>
                            <td>Hvilken klasse skal nyheden være til?</td>
                            <td>
                                <select type="text" Name="class">
                                    <option value="all">Hele skolen</option>
                                    <option value="1">1. Klasse</option>
                                    <option value="2">2. Klasse</option>
                                    <option value="3">3. Klasse</option>
                                    <option value="4">4. Klasse</option>
                                    <option value="5">5. Klasse</option>
                                    <option value="6">6. Klasse</option>
                                    <option value="7">7. Klasse</option>
                                    <option value="8">8. Klasse</option>
                                    <option value="9">9. Klasse</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Beskrivelse<br></td>
                            <td>
                                <textarea rows='5' cols='30' Name='text'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="btn btn-primary" type='submit' Name='Submit' value='Tilføj'>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Anuller</button>
            </div>

        </div>
    </div>
    <!-- /Opret nyhed -->