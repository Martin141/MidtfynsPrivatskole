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
                                <textarea rows='5' cols='30' Name='content'></textarea>
                            </td>
                        </tr>
                        <tr>
                        <td><label for="start">Afleverings dato:</label></td>

                        <td><input type="date" id="start" name="date" value="" min=""
                                max=""></td>
                        </tr>
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