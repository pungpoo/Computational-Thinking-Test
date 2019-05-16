<?php session_start();?>
<?php 

  include("verify_login.php");
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blockly Demo: Fixed Blockly</title>
  <script src="blockly_compressed.js"></script>
  <script src="blocks_compressed.js"></script>
  <script src="python_compressed.js"></script>	
  <script src="msg/js/en.js"></script>
  <style>
    body {
      background-color: #fff;
      font-family: sans-serif;
    }
    h1 {
      font-weight: normal;
      font-size: 140%;
    }
  </style>
</head>
<body>
  <h1><a href="https://developers.google.com/blockly/">Blockly</a> &gt;
    <a href="../index.html">Demos</a> &gt; Fixed Blockly</h1>
 <?php 
	print $_SESSION["UserID"]."<br />";
	print $_SESSION["User"]."<br />";
	print $_SESSION["Useremail"]."<br />";
	print $_SESSION["Userschool"]."<br />";

	 if (!$_SESSION["UserID"]){
		
		date_default_timezone_set("Asia/Bangkok");
		$date = date('m/d/Y h:i:s a', time());
		$_SESSION["starttime"]="";

	}
	?> 
  <p>This is a simple demo of injecting Blockly into a fixed-sized 'div' element.</p>
  <?php print " <a href='logout.php'>ออกจากระบบ</a><br />"; ?>

<button onclick="showCode()">Show JavaScript</button>
    <button onclick="runCode()">Run JavaScript</button>

  <div id="blocklyDiv" style="height: 480px; width: 600px;"></div>

  <xml id="toolbox" style="display: none">

	<block type="controls_if"></block>
    <block type="logic_compare"></block>
    <block type="controls_repeat_ext"></block>
    <block type="math_number">
      <field name="NUM">123</field>
    </block>
    <block type="math_arithmetic"></block>
	
    <block type="text"></block>
    <block type="text_print"></block> 
	
  </xml>

  <script>
    var demoWorkspace = Blockly.inject('blocklyDiv',
        {media: 'media/',
         toolbox: document.getElementById('toolbox')});
		 
		  function showCode() {
      // Generate Python code and display it.
      Blockly.Python.INFINITE_LOOP_TRAP = null;
      var code = Blockly.Python.workspaceToCode(demoWorkspace);
	  var itemno = 1;
	  window.location.href = "submitanswer.php?item=" + code+ "&itemno=" + itemno;
	  
      alert(code);
	  
    }

    function runCode() {
      // Generate Python code and run it.
      window.LoopTrap = 1000;
      Blockly.Python.INFINITE_LOOP_TRAP =
          'if (--window.LoopTrap == 0) throw "Infinite loop.";\n';
      var code = Blockly.Python.workspaceToCode(demoWorkspace);
      Blockly.Python.INFINITE_LOOP_TRAP = null;
	  	


      try {
        eval(code);
      } catch (e) {
        alert(e);
      }
    }		
	
  </script>

</body>
</html>
