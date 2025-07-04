﻿<?php include("header.php");  ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
          <div class="col-md-12">
            <h4 class="header-line">FORM EXAMPLES</h4>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-info">
              <div class="panel-heading">BASIC FORM</div>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label>Enter Name</label>
                    <input class="form-control" type="text" />
                    <p class="help-block">Help text here.</p>
                  </div>
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input class="form-control" type="text" />
                    <p class="help-block">Help text here.</p>
                  </div>
                  <div class="form-group">
                    <label>Text area</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>

                  <button type="submit" class="btn btn-info">
                    Send Message
                  </button>
                </form>
              </div>
            </div>
          </div> -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-danger">
              <div class="panel-heading">SINGUP FORM</div>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input class="form-control" type="text" />
                    <p class="help-block">Help text here.</p>
                  </div>
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input class="form-control" type="password" />
                    <p class="help-block">Help text here.</p>
                  </div>
                  <div class="form-group">
                    <label>Re Type Password </label>
                    <input class="form-control" type="password" />
                    <p class="help-block">Help text here.</p>
                  </div>

                  <button type="submit" class="btn btn-danger">
                    Register Now
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/.ROW-->
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-heading">FORM ELEMENTS</div>
              <div class="panel-body">
                <div class="form-group">
                  <label>Select Example</label>
                  <select class="form-control">
                    <option>One Vale</option>
                    <option>Two Vale</option>
                    <option>Three Vale</option>
                    <option>Four Vale</option>
                  </select>
                </div>
                <hr />
                <div class="form-group">
                  <label>Multiple Select Example</label>
                  <select multiple="" class="form-control">
                    <option>One Vale</option>
                    <option>Two Vale</option>
                    <option>Three Vale</option>
                    <option>Four Vale</option>
                  </select>
                </div>
                <hr />
                <div class="form-group">
                  <label>Checkboxes</label>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="" />Checkbox Example One
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="" />Checkbox Example Two
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="" />Checkbox Example Three
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="" />Checkbox Example Four
                    </label>
                  </div>
                </div>
                <hr />
                <div class="form-group">
                  <label>Radio Button Examples</label>
                  <div class="radio">
                    <label>
                      <input
                        type="radio"
                        name="optionsRadios"
                        id="optionsRadios1"
                        value="option1"
                        checked=""
                      />Radio Example One
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input
                        type="radio"
                        name="optionsRadios"
                        id="optionsRadios2"
                        value="option2"
                      />Radio Example Two
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input
                        type="radio"
                        name="optionsRadios"
                        id="optionsRadios3"
                        value="option3"
                      />Radio Example Three
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">ADVANCE ELEMENTS FORM</div>
              <div class="panel-body">
                <form role="form">
                  Some Message Examples
                  <br />
                  <div class="form-group has-success">
                    <label class="control-label" for="success"
                      >SUCCESS EXAMPLE</label
                    >
                    <input type="text" class="form-control" id="success" />
                  </div>
                  <div class="form-group has-warning">
                    <label class="control-label" for="warning"
                      >WARNING EXAMPLE</label
                    >
                    <input type="text" class="form-control" id="warning" />
                  </div>
                  <div class="form-group has-error">
                    <label class="control-label" for="error"
                      >ERROR EXAMPLE</label
                    >
                    <input type="text" class="form-control" id="error" />
                  </div>
                </form>
                <hr />
                Other Group Examples
                <br />
                <form role="form">
                  <div class="input-group">
                    <span class="form-group input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    <input type="text" class="form-control" />
                  </div>
                  <br />
                  <div class="input-group">
                    <input type="text" class="form-control" />
                    <span class="form-group input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </form>
                <hr />
                <form role="form">
                  <div class="form-group">
                    <label for="disabledInput">Disabled input</label>
                    <input
                      class="form-control"
                      id="disabledInput"
                      type="text"
                      placeholder="Disabled input"
                      disabled=""
                    />
                  </div>
                </form>
                <hr />
                For more customization for this template or its components
                please visit official bootstrap website i.e getbootstrap.com or
                <a href="http://getbootstrap.com/components/" target="_blank"
                  >click here</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            &copy; 2014 Yourdomain.com |<a
              href="http://www.binarytheme.com/"
              target="_blank"
            >
              Designed by : binarytheme.com</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>
