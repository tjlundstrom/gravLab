<!DOCTYPE HTML>
<html>
  <head>
    <title>gravLab</title>

    <br>
    <div>
            <ul class="uk-tab" data-uk-tab="{connect:'#job-content'}">
                <li><a href="#">Beaker Pre Weights</a></li>
                <li><a href="#">Beaker Post Weights</a></li>
                <li><a href="#">Beaker Information</a></li>
                <li><a href="#">Filter Post Weights</a></li>
                <li><a href='#'>Total Catch</a></li>
            </ul>

        <ul id="job-content" class="uk-switcher uk-margin">


          <li><!--Beaker PreWeights-->
            <div class="uk-grid uk-vertical-align-middle uk-align-center uk-width-1-1">
            <div class="uk-width-1-1">
              <form class="uk-panel-box uk-panel-header uk-form uk-form-horizontal" method="post" action="#">
              <fieldset>
                    <h3 class="uk-panel-title"> Beaker Pre-Weights:</h3>
                        <div class="uk-form-row">
                          <div>
                            <ul class="uk-tab" data-uk-tab="{connect:'#tab-content1'}">
                            </ul>

                               <ul id="tab-content1" class="uk-switcher uk-margin">
                              </ul>
                            </div>
                            <div class="uk-form-row">
                            <button class="uk-width-1-2 uk-button uk-button-primary uk-button-large" name="bpwUpdate" value="bpwUpdate" type="submit">Submit</button>
                        </div>
                      </div>
                    </fieldset>
                    </form>
                    </div>
                </div>
              </li>


              <li><!--Beaker PostWeights-->
            <div class="uk-grid uk-vertical-align-middle uk-align-center uk-width-1-1">
            <div class="uk-width-1-1">
              <form class="uk-panel-box uk-panel-header uk-form uk-form-horizontal" method="post" action="#"><fieldset>
                    <h3 class="uk-panel-title"> Beaker Post-Weights:</h3>
                          <div class="uk-form-row">
                            <div>
                                <ul class="uk-tab" data-uk-tab="{connect:'#tab-content2'}">
                        </ul>

                                 <ul id="tab-content2" class="uk-switcher uk-margin">
                                </ul>
                              </div>
                              <div class="uk-form-row">
                              <button class="uk-width-1-2 uk-button uk-button-primary uk-button-large" name="bpowUpdate" value="bpowUpdate" type="submit">Submit</button>
                          </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
              </li>

               <li><!--Beaker Information-->
            <div class="uk-grid uk-vertical-align-middle uk-align-center uk-width-1-1">
            <div class="uk-width-1-1">
              <form class="uk-panel-box uk-panel-header uk-form uk-form-horizontal" method="post" action="#"><fieldset>
                    <h3 class="uk-panel-title"> Beaker Information</h3>
                          <div class="uk-form-row">
                            <div>
                                <ul class="uk-tab" data-uk-tab="{connect:'#tab-content3'}">
                        </ul>

                                </ul>
                              </div>
                              <div class="uk-form-row">
                              <button class="uk-width-1-2 uk-button uk-button-primary uk-button-large" name="beaker_info_update" value="beaker_info_update" type="submit">Submit</button>
                          </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
              </li>


              <li><!--Filter PostWeights-->
            <div class="uk-grid uk-vertical-align-middle uk-align-center uk-width-1-1">
            <div class="uk-width-1-1">
              <form class="uk-panel-box uk-panel-header uk-form uk-form-horizontal" method="post" action=">
                    <h3 class="uk-panel-title"> Filter Post-Weights:</h3>
                          <div class="uk-form-row">
                            <div>
                                <ul class="uk-tab" data-uk-tab="{connect:'#tab-content4'}">
                                </ul>
                              </div>
                              <div class="uk-form-row">
                              <button class="uk-width-1-2 uk-button uk-button-primary uk-button-large" name="fpowUpdate" value="fpowUpdate" type="submit">Submit</button>
                          </div>
                            </div>
                        </form>
                    </div>
                </div>
              </li>

              <li><!--Filter Total Catch-->
            <div class="uk-grid uk-vertical-align-middle uk-align-center uk-width-1-1">
            <div class="uk-width-8-10">
              <form class="uk-panel-box uk-panel-header uk-form uk-form-horizontal" method="post" action="#"><fieldset>
                    <h3 class="uk-panel-title"> Total Catch:</h3>
                          <div class="uk-form-row">
                            <div>
                                <ul class="uk-tab" data-uk-tab="{connect:'#tab-content5'}">
                                </ul>

                                 <ul id="tab-content5" class="uk-switcher uk-margin">
                                </ul>
                              </div>
                              <div class ="uk-form-row">
                                <input type="text" placeholder="Export File Name" name="export">
                              </div>
                              <div class="uk-form-row">
                              <button class="uk-width-1-2 uk-button uk-button-primary uk-button-large" name="#" value="#" type="submit">Export to Excel</button>
                          </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
              </li>
          </ul>
        </div>
  </body>
</html>