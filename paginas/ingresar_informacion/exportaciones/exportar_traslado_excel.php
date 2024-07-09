<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/../../../PHPExcel/Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("SIRPEC")
							 ->setLastModifiedBy("SIRPEC")
							 ->setTitle("SIRPEC")
							 ->setSubject("SIRPEC")
							 ->setDescription("SIRPEC")
							 ->setKeywords("SIRPEC")
							 ->setCategory("SIRPEC");

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('SIRPEC');
$objDrawing->setDescription('SIRPEC');
$objDrawing->setPath('../../../img/img_logo3.png');     
$objDrawing->setHeight(80);             
$objDrawing->setCoordinates('A1');   
$objDrawing->setOffsetX(90);                
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
 

$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
// $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);

// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
			->getStyle('A5:I5')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()->setARGB('B0C4DE');





// BORDES
$border= array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array('rgb' => '#00000')
            )
        )
    );




$objPHPExcel->getActiveSheet()
            ->getStyle('A5:I6')
            ->applyFromArray($border);



// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A5', 'FINCA')
            ->setCellValue('B5', 'ESTANQUE')
            ->setCellValue('C5', 'SIEMBRA')
            ->setCellValue('D5', 'ESTANQUE A TRASLADAR')
            ->setCellValue('E5', 'NUMERO DE PECES')
            ->setCellValue('F5', 'PESO')
            ->setCellValue('G5', 'TAMAÑO')
            ->setCellValue('H5', 'FECHA')
            ->setCellValue('I5', 'OBSERVACION');



//             $finca=$_POST["finca"];
//             $estanque=$_POST["estanque"];
//             $siembra=$_POST["siembra"];
//             $tras_estanque=$_POST["tras_estanque"];
//             $numero_peces=$_POST["numero_peces"];
//             $peso=$_POST["peso"];
//             $tamaño=$_POST["tamaño"];
//             $fecha=$_POST["fecha"];
//             $observacion=$_POST["observacion"];

// $objPHPExcel->setActiveSheetIndex(0)
//             ->setCellValue('A6', $finca )
//             ->setCellValue('B6', $estanque )
//             ->setCellValue('C6', $siembra )
//             ->setCellValue('D6', $tras_estanque )
//             ->setCellValue('E6', $numero_peces )
//             ->setCellValue('F6', $peso )
//             ->setCellValue('G6', $tamaño )
//             ->setCellValue('H6', $fecha )
//             ->setCellValue('I6', $observacion );




// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('EXPORTAR_TRASLADO');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="exportacion_traslados.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
