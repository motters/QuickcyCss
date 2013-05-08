<?php


class quickcyCss{


	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginTop = array(
			'function' => 'margin-top',
			'class' => 'margin-top-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginBottom = array(
			'function' => 'margin-bottom',
			'class' => 'margin-bottom-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginRight = array(
			'function' => 'margin-right',
			'class' => 'margin-right-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginLeft = array(
			'function' => 'margin-left',
			'class' => 'margin-left-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingTop = array(
			'function' => 'padding-top',
			'class' => 'padding-top-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingBottom = array(
			'function' => 'padding-bottom',
			'class' => 'padding-bottom-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingRight = array(
			'function' => 'padding-right',
			'class' => 'padding-right-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingLeft = array(
			'function' => 'padding-left',
			'class' => 'padding-left-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $width = array(
			'function' => 'width',
			'class' => 'width-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginTopPer = array(
			'function' => 'margin-top',
			'class' => 'margin-top-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginBottomPer = array(
			'function' => 'margin-bottom',
			'class' => 'margin-bottom-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginRightPer = array(
			'function' => 'margin-right',
			'class' => 'margin-right-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $marginLeftPer = array(
			'function' => 'margin-left',
			'class' => 'margin-left-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => '%',
			'to' => 1200
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingTopPer = array(
			'function' => 'padding-top',
			'class' => 'padding-top-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingBottomPer = array(
			'function' => 'padding-bottom',
			'class' => 'padding-bottom-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingRightPer = array(
			'function' => 'padding-right',
			'class' => 'padding-right-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $paddingLeftPer = array(
			'function' => 'padding-left',
			'class' => 'padding-left-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $widthPer = array(
			'function' => 'width',
			'class' => 'width-per-{number}',
			'steps' => 10,
			'from' => -100,
			'unit' => '%',
			'to' => 100
		);

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $fontSize = array(
			'function' => 'font-size',
			'class' => 'font-size-{number}',
			'steps' => 10,
			'from' => 0,
			'unit' => 'px',
			'to' => 500
		);	

	/**
	 * Css Dafult change to generate your own custome QuickcyCss stylesheet
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	static private $clear = array(
			'class' => '.clear || .clearfix:before, .clearfix:after || .clearfix:after',
			'function' => 'clear',
			'value' => '*zoom: 1; || display: table;line-height: 0; content: ""; ||  clear: both;'
		);

	/**
	 * Compiles all the css info a output
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	public function run(){
		$return = '';
		//px
		$return .= $this->generateLoop(self::$marginTop);
		$return .= $this->generateLoop(self::$marginBottom);
		$return .= $this->generateLoop(self::$marginLeft);
		$return .= $this->generateLoop(self::$marginRight);
		$return .= $this->generateLoop(self::$paddingTop);
		$return .= $this->generateLoop(self::$paddingBottom);
		$return .= $this->generateLoop(self::$paddingLeft);
		$return .= $this->generateLoop(self::$paddingRight);
		$return .= $this->generateLoop(self::$width);
		//%
		$return .= $this->generateLoop(self::$marginTopPer);
		$return .= $this->generateLoop(self::$marginBottomPer);
		$return .= $this->generateLoop(self::$marginLeftPer);
		$return .= $this->generateLoop(self::$marginRightPer);
		$return .= $this->generateLoop(self::$paddingTopPer);
		$return .= $this->generateLoop(self::$paddingBottomPer);
		$return .= $this->generateLoop(self::$paddingLeftPer);
		$return .= $this->generateLoop(self::$paddingRightPer);
		$return .= $this->generateLoop(self::$widthPer);
		//font size
		$return .= $this->generateLoop(self::$fontSize);
		//clear
		$return .= $this->copilefunctions(self::$clear);
		return $return;
	}

	/**
	 * Compiles most the css that is to do with numbers 
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	public function generateLoop($info){
		$return = '';
		for($i=$info['from']; $i<=$info['to']; $i = $i+$info['steps']){
			$return .= str_replace('{number}', $i, '.'.$info['class']." { \r\n");
			$return .= '    '.$info['function'].': '.$i.$info['unit'].';'."\r\n";
			$return .= "}\r\n";
		}
		return $return;
	}

	/**
	 * Complies small amount more complexe css
	 * @author Sam Mottley (info@sammottley.co.uk)
	 */
	public function copilefunctions($info){
		$retrun = '';
		$class = explode('||', $info['class']);
		$values = explode('||', $info['value']);
		$total = count($class) - 1;
		for($i=0; $i <= $total; $i++){
			$retrun .= $class[$i] . "{ \r\n" . $values[$i] . "\r\n}";
		}

		return $retrun;
	}
}

//Load the class
$css = new quicklyCss;
//Simpally echo out the css code
echo $css->run();
?>