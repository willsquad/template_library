<?php 

$title = 'Input Radio | Checkbox';
include('include/header.php'); 

?>


<div class="input_checkbox container-fluid">
   <div class="row">
       <div class="container">
           <div class="body">
              <div class="col-12 col-lg-8 push-lg-2">
                 <div class="row">
                     
                     <div class="input_container input_checkbox_1 col-12">
                            <h4>1.</h4>
                            <div>
                              <label>
                                <input type="checkbox" class="option-input checkbox" CHECKED />
                                Checkbox
                              </label>
                            </div>
                            <hr>
                            <div>
                              <label>
                                <input type="radio" class="option-input radio" name="example" />
                                Option 1
                              </label>
                              <br>
                              <label>
                                <input type="radio" class="option-input radio" name="example" />
                                Option 2
                              </label>
                            </div>
                     </div>
                     
                     
                      <div class="input_container input_checkbox_2 col-12">
                            <h4>2.</h4>
                            <div>
                              <label>
                                <input type="checkbox" class="option-input checkbox" CHECKED />
                                Checkbox
                              </label>
                              <label>
                                <input type="checkbox" class="option-input checkbox" />
                                Checkbox
                              </label>
                            </div>
                            <hr>
                            <div>
                              <label>
                                <input type="radio" class="option-input radio" name="example" />
                                Option 1
                              </label>
                              <label>
                                <input type="radio" class="option-input radio" name="example" />
                                Option 2
                              </label>
                            </div>
                     </div>
                     
                     <div class="input_container input_checkbox_3 col-12">
                            <h4>3.</h4>
                            <div class="round">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox"></label>
                            </div>
                     </div>
                     
                     <div class="input_container input_checkbox_4 col-12">
                            <h4>4.</h4>
                            <div class="checkbox">
                                <input type="checkbox" id="cb" name="cb" />
                                <label for="cb"></label>
                              </div>

                              <div class="checkbox checkbox-alt">
                                <input type="checkbox" id="cb-alt" name="cb-alt" />
                                <label for="cb-alt"></label>
                              </div>
                     </div>
                     
                     
                     <div class="input_container input_checkbox_5 col-12">
                            <h4>5.</h4>
                            <label class="toggle">
                                <input type="checkbox" onclick="toggle(this,event)"/>
                                <!--<div data-off="Off" data-on="On">app-notifition</div>-->
                                <div></div>
                            </label>
                     </div>
                     
                     
                     <div class="input_container input_checkbox_6 col-12">
                            <h4>6.</h4>
                            <section title=".slideOne">
                                <!-- .slideOne -->
                                <div class="slideOne">  
                                  <input type="checkbox" value="None" id="slideOne" name="check" checked />
                                  <label for="slideOne"></label>
                                </div>
                                <!-- end .slideOne -->
                          </section>
                     </div>
                     
                     <div class="input_container input_checkbox_7 col-12">
                            <h4>7.</h4>
                            <section title=".slideTwo">
                                <!-- .slideTwo -->
                                <div class="slideTwo">  
                                  <input type="checkbox" value="None" id="slideTwo" name="check" checked />
                                  <label for="slideTwo"></label>
                                </div>
                                <!-- end .slideTwo -->
                              </section>
                     </div>
                     
                     <div class="input_container input_checkbox_8 col-12">
                            <h4>8.</h4>
                            <section title=".slideThree">
                                <!-- .slideThree -->
                                <div class="slideThree">  
                                  <input type="checkbox" value="None" id="slideThree" name="check" checked />
                                  <label for="slideThree"></label>
                                </div>
                                <!-- end .slideThree -->
                              </section>
                     </div>
                     
                     <div class="input_container input_checkbox_9 col-12">
                            <h4>9.</h4>
                             <section title=".roundedOne">
                                <!-- .roundedOne -->
                                <div class="roundedOne">
                                  <input type="checkbox" value="None" id="roundedOne" name="check" checked />
                                  <label for="roundedOne"></label>
                                </div>
                                <!-- end .roundedOne -->
                              </section>
                     </div>
                     
                     <div class="input_container input_checkbox_10 col-12">
                            <h4>10.</h4>
                            <section title=".roundedTwo">
                            <!-- .roundedTwo -->
                            <div class="roundedTwo">
                              <input type="checkbox" value="None" id="roundedTwo" name="check" checked />
                              <label for="roundedTwo"></label>
                            </div>
                            <!-- end .roundedTwo -->
                          </section>
                     </div>
                     
                     <div class="input_container input_checkbox_11 col-12">
                            <h4>11.</h4>
                            <section title=".squaredOne">
                            <!-- .squaredOne -->
                            <div class="squaredOne">
                              <input type="checkbox" value="None" id="squaredOne" name="check" checked />
                              <label for="squaredOne"></label>
                            </div>
                            <!-- end .squaredOne -->
                          </section>
                     </div>
                     
                     <div class="input_container input_checkbox_12 col-12">
                            <h4>12.</h4>
                             <section title=".squaredTwo">
                            <!-- .squaredTwo -->
                            <div class="squaredTwo">
                              <input type="checkbox" value="None" id="squaredTwo" name="check" checked />
                              <label for="squaredTwo"></label>
                            </div>
                            <!-- end .squaredTwo -->
                          </section>
                     </div>
                     
                     <div class="input_container input_checkbox_13 col-12">
                            <h4>13.</h4>
                             <section title=".squaredThree">
                                <!-- .squaredThree -->
                                <div class="squaredThree">
                                  <input type="checkbox" value="None" id="squaredThree" name="check" />
                                  <label for="squaredThree"></label>
                                </div>
                                <!-- end .squaredThree -->
                              </section>
                     </div>
                     
                     <div class="input_container input_checkbox_14 col-12">
                            <h4>14.</h4>
                             <section title=".squaredFour">
                            <!-- .squaredFour -->
                            <div class="squaredFour">
                              <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                              <label for="squaredFour"></label>
                            </div>
                            <!-- end .squaredFour -->
                          </section>
                     </div>
                     
                     <div class="input_container input_checkbox_15 col-12">
                            <h4>15.</h4>
                            <form>
                              <div class='frame'>
                                <input checked='checked' id='radio_1' name='radio' type='radio'>
                                <label class='radio' for='radio_1'><i class="fa fa-times"></i></label>
                                <input id='radio_2' name='radio' type='radio'>
                                <label class='radio' for='radio_2'><i class="fa fa-times"></i></label>
                              </div>
                              <div class='frame'>
                                <input checked='checked' id='check_1' name='check' type='checkbox'>
                                <label class='check' for='check_1'><i class="fa fa-check"></i></label>
                                <input id='check_2' name='check' type='checkbox'>
                                <label class='check' for='check_2'><i class="fa fa-check"></i></label>

                              </div>
                            </form>
                     </div>
                     
                     <div class="input_container input_checkbox_16 col-12">
                            <ul class="tg-list">
                              <li class="tg-list-item">
                               <h4>16</h4>
                                <!--<h4>Light</h4>-->
                                <input class="tgl tgl-light" id="cb1" type="checkbox"/>
                                <label class="tgl-btn" for="cb1"></label>
                              </li>
                              <li class="tg-list-item">
                               <h4>17</h4>
                                <!--<h4>iOS</h4>-->
                                <input class="tgl tgl-ios" id="cb2" type="checkbox"/>
                                <label class="tgl-btn" for="cb2"></label>
                              </li>
                              <li class="tg-list-item">
                               <h4>18</h4>
                                <!--<h4>Skewed</h4>-->
                                <input class="tgl tgl-skewed" id="cb3" type="checkbox"/>
                                <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb3"></label>
                              </li>
                              <li class="tg-list-item">
                               <h4>19</h4>
                                <!--<h4>Flat</h4>-->
                                <input class="tgl tgl-flat" id="cb4" type="checkbox"/>
                                <label class="tgl-btn" for="cb4"></label>
                              </li>
                              <li class="tg-list-item">
                               <h4>20</h4>
                                <!--<h4>Flip</h4>-->
                                <input class="tgl tgl-flip" id="cb5" type="checkbox"/>
                                <label class="tgl-btn" data-tg-off="Flip" data-tg-on="Done!" for="cb5"></label>
                              </li>
                            </ul>
                     </div>
                     
                     
                     
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>

       
  
<?php

include('include/footer.php'); 

?>