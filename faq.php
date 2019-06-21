<?php
include 'function.php';
head();
// begin
?>
<h2>Frequency Asked Questions</h2>
<hr>
      <!-- FAQ - START -->
      <div class="panel-group" id="accordion">
	  
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">First question?</a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                Colapse...
              </div>
            </div>
          </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">When have driver issue?</a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
              <pre>
Discover Driver Issues
	1. Select your device
	2. Go to Edit Discover Driver
	3. Enable the option "Store complete device session log" and disable the option “Only if no driver is set”
	4. Scroll down until you find Logging Options, and please select the following ones:
	- Device/Access
	- Device/Driver/Discovery
	- Device/Driver/javascript
	- Device/Driver/Parser
	- Device /Driver/Updater
	- Device /Session
	5. Save the task
Once the task is completed, please copy the task output into a text file and attach it to our case.
Then, go to Admin -> Troubleshooting; click on the link "Download troubleshooting information"; leave the default
options selected and check the options "wrapper logs" and "Discover Driver...". Then click on Download.

Please attach the troubleshoot.zip file and the task session log output to our case: 
			  </pre>
            </div>
          </div>
        </div>
		
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">When have snapshot issue?</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
              <pre>
Take Snapshot Issues
	1. Please go to Tasks -> New task->Take snapshot 
	HP NA Handbook - HP INTERNAL, PLEASE DO NOT SHARE IT WITH CUSTOMERS - 37
	April 28st ,2014 Version 1.8
	2. In New Task/Template, go where it says "Applies to" and select the device in the device / group
	3. Look for Task options section, and check the option “Store complete device session log”
	4. Go to the bottom of the page and in Task Logging, please select the following:
	- Device/Access
	- Device/Config
	- Device/Data
	- Device/Driver/javascript
	- Device/Driver/Parser
	- Device/Driver/Updater
	- Device/Session
	5. Save the task
	
Once the task is completed, please copy the task output into a text file and attach it to our case.
Then, go to Admin -> Troubleshooting; click on the link "Download troubleshooting information"; leave the default
options selected and check the options "wrapper logs" and "Take Snapshot...". Then click on Download.

Please attach the troubleshoot.zip file and the task session log output to our case  
			  </pre>
            </div>
          </div>
        </div>
		
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Where to find all official NA patches?</a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
              <div class="panel-body">
               https://patch-central.corp.hpecorp.net/crypt-web/protected/viewProduct.do?productid=crypt%3Anetwork_automation%3A
              </div>
            </div>
          </div>
      </div>

    <!-- FAQ end -->

<?php
// end
foot();
?>