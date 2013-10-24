<?php

/** 
 * @author xiaoke
 * 
 */
class PhpPlot {
	// TODO - Insert your code here
	
	/**
	 */
	function __construct($b,$a,$r) {
		$this->pdf=$b;
		$this->code=$a;
		$this->r=$r;
		// TODO - Insert your code here
	}
	function say(){
		echo "name:".$this->pdf."";
		echo "code:".$this->code."";
		echo "r:".$this->r."";
	}
	function create(){
	    exec("touch ./R_scripts/$this->r");
	    file_put_contents ("./R_scripts/$this->r", $this->code);
	
	}
	function plot(){
		exec("cat ./R_scripts/$this->r | /usr/local/bin/R --vanilla",$output);
		exec("convert ./r_tmp/$this->pdf.pdf ./r_tmp/$this->pdf.png");
		exec("chown root ./r_tmp/$this->pdf.png");
		exec("cp ./r_tmp/$this->pdf.png ./");
		echo "<img src='$this->pdf.png'>";		
		
	}
	/**
	 */
	function __destruct() {
		
		// TODO - Insert your code here
	}
}
//$b="gui";//the name of the pdf R will be created
//$a="pdf(\"./r_tmp/$b.pdf\")
//library(RMySQL)
//con<-dbConnect(MySQL(), user=\"root\",password=\"newpassword\",dbname=\"hypertension\",host=\"127.0.0.1\")
//control<-dbGetQuery(con,\"select * from controls where sbp<140 and dbp<90 and age>30\")
//control<-control[,-1]
//boxplot(control,las=2)
//dev.off
//";//R code
//$r="gui.r";
//$p1=new PhpPlot($b, $a,$r);
//$p1->say();
//$p1->create();
//$p1->plot();
?>