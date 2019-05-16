<?php
	/*
	************ Username Password ************
	หน้าแบบทดสอบ
	http://www.zp11297.tld.111.223.52.146.no-domain.name/website/primary/
	
	ข้อมูล FTP
	Host ns271.pathosting.com
	Username zp11297
	Password q-B8PbTEJF
	Port 21

	Database:
	https://pro52-146.static.lnwhostname.com/phpmyadmin/
	username: zp11297_zp11297
	password: q-B8PbTEJF
	
	
	************การย้ายโฮส ************
	ไปแก้ Username password เข้า Database ที่ไฟล์ connection.php 	
	
	*/
	
	/*

	************ การสร้าง Custom Block ให้ไปที่ ************
	https://blockly-demo.appspot.com/static/demos/blockfactory/index.html
	
	ส่วน Custom Block ที่เคยสร้างไว้ อยู่ที่ไฟล์ชื่อ library_updated.xml
	ไป import เข้าได้เลย

	************การ export Custom Block************
	หลังจากกำหนดหน้าตา Custom Block ที่อยากได้เสร็จแล้ว ที่แท็บ Block Factory
	ให้ไปที่แท็บ Block Exporter แล้ว เลือก Block ตรง Block Selector
	จากนั้น คลิกเลือก block definition และ generator stub(s) 
	เลือกภาษาที่เราต้องการ จะเป็น JS หรือ Python
	แล้วกดปุ่ม Export จะได้ไฟล์ .js 2 ไฟล์ 
	copy code ทั้งสองไฟล์ไปใส่รวมกันใน direction.js
	
	************ ไฟล์  Custom Block ************
	อยู่ที่ path เดียวกับ exam1.php ชื่อไฟล์ direction.js
	มี โค้ด 3 ส่วนด้วยกัน 
	คือ GUI (หน้าตาบล็อก), JS code(แปลงเป็น JS คำสั่งอะไร), Python Code(แปลงเป็น Python คำสั่งอะไร)
	
	************************************************************
	************************************************************
	************************************************************

	************การ export ตรง Toolbox ************
	ไปที่แท็บ Workspace Factory 
	ฝั่งซ้าย เลือกที่แท็บ Toolbox
	แล้วคลิกที่หมวด Block Library พวก Custom จะอยู่ในนั้น 
	ลากมาวาง เท่าที่ต้องการ 
	จากนั้นกดปุ่ม export > Toolbox จะได้ toolbox.xml ออกมา
	ก้อบโค้ดข้างในไปวางที่หน้า exam1.php หรือข้อที่ต้องการ
	
	************การ export ตรง Workspace ************
	ไปที่แท็บ Workspace Factory 
	ฝั่งซ้าย เลือกที่แท็บ Workspace
	แล้วคลิกที่หมวด Block Library พวก Custom จะอยู่ในนั้น 
	ลากมาวางบนพื้นที่ เท่าที่ต้องการ 
	จากนั้นกดปุ่ม export > Workspace Blocks จะได้  Workspace.xml ออกมา
	ก้อบโค้ดข้างในไปวางที่หน้า exam1.php หรือข้อที่ต้องการ
	
	************ การแก้ไฟล์ข้อสอบ ************
	เข้าที่ exam1.php
	ต้องแก้ 2 ส่วน คือ
	ส่วนที่ เป็น โค้ด Toolbox
	และ ส่วนที่เป็น โค้ด Workspace (ถ้าอยากให้มีบล็อกไหนแสดงไว้บน Workspace ตอนเริ่ม)
	
	*/

	
	
?>