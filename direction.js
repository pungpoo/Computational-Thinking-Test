// ***************************
// Custom Block
// ***************************

Blockly.Blocks['direction_moveup'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Move Up");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(160);
 this.setTooltip("เดินขึ้นข้างบน 1 ช่อง");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_movedown'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Move Down");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(160);
 this.setTooltip("เดินลงข้างล่าง 1 ช่อง");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_moveright'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Move Right");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(160);
 this.setTooltip("เดินไปทางขวา 1 ช่อง");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_moveleft'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Move Left");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(160);
 this.setTooltip("เดินไปทางซ้าย 1 ช่อง");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_gostraight'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Go Straight");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("เดินตรงไปข้างหน้าเรื่อยๆ");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_repeat'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Repeat")
        .appendField(new Blockly.FieldDropdown([["2","2"], ["3","3"], ["4","4"], ["5","5"], ["6","6"]]), "loop")
        .appendField("times");
    this.appendStatementInput("NAME")
        .setCheck(null);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(65);
 this.setTooltip("ทำซ้ำคำสั่ง X รอบ");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_moveforward'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Move Forward");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("เดินตรงไปข้างหน้า 1 ก้าว");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_turnleft'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Turn Left");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("หันไปทางซ้าย (อยู่กับที่)");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_turnright'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Turn Right");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("หันไปทางขวา (อยู่กับที่)");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_until_front'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Until")
        .appendField(new Blockly.FieldDropdown([["บางอย่าง","บางอย่าง"], ["วศิน","วศิน"], ["อรุณา","อรุณา"], ["บ้าน","บ้าน"], ["สำนักงาน","สำนักงาน"], ["ร้านกาแฟ","ร้านกาแฟ"], ["ห้างสรรพสินค้า","ห้างสรรพสินค้า"], ["สตูดิโอแต่งงาน","สตูดิโอแต่งงาน"]]), "place")
        .appendField("อยู่ตรงหน้า");
    this.appendStatementInput("NAME")
        .setCheck(null)
        .appendField("do");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(20);
 this.setTooltip("UNTIL เงื่อนไข DO (XXX)	หมายถึงให้ทำตามลำดับ XXX จนกว่า เงื่อนไข จะเป็นจริง");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_until_meet'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Until")
        .appendField("พบ")
        .appendField(new Blockly.FieldDropdown([["ทางไปข้างหน้าได้","ทางไปข้างหน้าได้"], ["วศิน","วศิน"], ["อรุณา","อรุณา"], ["บ้าน","บ้าน"], ["สำนักงาน","สำนักงาน"], ["ร้านกาแฟ","ร้านกาแฟ"], ["ห้างสรรพสินค้า","ห้างสรรพสินค้า"], ["สตูดิโอแต่งงาน","สตูดิโอแต่งงาน"]]), "place");
    this.appendStatementInput("NAME")
        .setCheck(null)
        .appendField("do");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(20);
 this.setTooltip("UNTIL เงื่อนไข DO (XXX)	หมายถึงให้ทำตามลำดับ XXX จนกว่า เงื่อนไข จะเป็นจริง");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_while_front'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("While")
        .appendField(new Blockly.FieldDropdown([["บางอย่าง","บางอย่าง"], ["วศิน","วศิน"], ["อรุณา","อรุณา"], ["บ้าน","บ้าน"], ["สำนักงาน","สำนักงาน"], ["ร้านกาแฟ","ร้านกาแฟ"], ["ห้างสรรพสินค้า","ห้างสรรพสินค้า"], ["สตูดิโอแต่งงาน","สตูดิโอแต่งงาน"]]), "place")
        .appendField("อยู่ตรงหน้า");
    this.appendStatementInput("NAME")
        .setCheck(null)
        .appendField("do");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(20);
 this.setTooltip("WHILE เงื่อนไข DO (XXX)	หมายถึงให้ทำตามลำดับ XXX ตราบใดที่ เงื่อนไข เป็นจริง");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['direction_while_meet'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("While")
        .appendField("พบ")
        .appendField(new Blockly.FieldDropdown([["ทางไปข้างหน้าได้","ทางไปข้างหน้าได้"], ["วศิน","วศิน"], ["อรุณา","อรุณา"], ["บ้าน","บ้าน"], ["สำนักงาน","สำนักงาน"], ["ร้านกาแฟ","ร้านกาแฟ"], ["ห้างสรรพสินค้า","ห้างสรรพสินค้า"], ["สตูดิโอแต่งงาน","สตูดิโอแต่งงาน"]]), "place");
    this.appendStatementInput("NAME")
        .setCheck(null)
        .appendField("do");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(20);
 this.setTooltip("WHILE เงื่อนไข DO (XXX)	หมายถึงให้ทำตามลำดับ XXX ตราบใดที่ เงื่อนไข เป็นจริง");
 this.setHelpUrl("");
  }
};

// ***************************
// Javascript
// ***************************

Blockly.JavaScript['direction_moveup'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'moveUp();\n';
  return code;
};

Blockly.JavaScript['direction_movedown'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'moveDown();\n';
  return code;
};

Blockly.JavaScript['direction_moveright'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'moveRight();\n';
  return code;
};

Blockly.JavaScript['direction_moveleft'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'moveLeft();\n';
  return code;
};

Blockly.JavaScript['direction_gostraight'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'goStraight();\n';
  return code;
};

Blockly.JavaScript['direction_repeat'] = function(block) {
  var dropdown_loop = block.getFieldValue('loop');
  var statements_name = Blockly.JavaScript.statementToCode(block, 'NAME');
  

   var code = 'repeat ' + dropdown_loop + '\n (' + statements_name+ ');\n';
   return code;
   //return [code, Blockly.JavaScript.ORDER_MEMBER];
};



Blockly.JavaScript['direction_moveforward'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'moveForward();\n';
  return code;
};

Blockly.JavaScript['direction_turnleft'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'turnLeft();\n';
  return code;
};

Blockly.JavaScript['direction_turnright'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'turnRight();\n';
  return code;
};

Blockly.JavaScript['direction_until_front'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.JavaScript.statementToCode(block, 'NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = 'untilFront('+dropdown_place+')\n (' + statements_name+ ');\n';
 
   
  return code;
};

Blockly.JavaScript['direction_until_meet'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.JavaScript.statementToCode(block, 'NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = 'untilMeet('+dropdown_place+')\n (' + statements_name+ ');\n';
  return code;
};

Blockly.JavaScript['direction_while_front'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.JavaScript.statementToCode(block, 'NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = 'whileFront('+dropdown_place+')\n (' + statements_name+ ');\n';
  return code;
};

Blockly.JavaScript['direction_while_meet'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.JavaScript.statementToCode(block, 'NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = 'whileMeet('+dropdown_place+')\n (' + statements_name+ ');\n';
  return code;
};


// ***************************
// Python
// ***************************

Blockly.Python['direction_moveup'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = 'MoveUp\n';
  return code;
};

Blockly.Python['direction_movedown'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = 'MoveDown\n';
  return code;
};

Blockly.Python['direction_moveright'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = 'MoveRight\n';
  return code;
};

Blockly.Python['direction_moveleft'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = 'MoveLeft\n';
  return code;
};


Blockly.Python['direction_gostraight'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_repeat'] = function(block) {
  var dropdown_loop = block.getFieldValue('loop');
  var statements_name = Blockly.Python.statementToCode(block, 'NAME');
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_moveforward'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_turnleft'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_turnright'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_until_front'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.Python.statementToCode(block, 'NAME');
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_until_meet'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.Python.statementToCode(block, 'NAME');
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_while_front'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.Python.statementToCode(block, 'NAME');
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};

Blockly.Python['direction_while_meet'] = function(block) {
  var dropdown_place = block.getFieldValue('place');
  var statements_name = Blockly.Python.statementToCode(block, 'NAME');
  // TODO: Assemble Python into code variable.
  var code = '...\n';
  return code;
};