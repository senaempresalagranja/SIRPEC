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
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
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
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(25);

// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
            ->getStyle('A5:K5')
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
            ->getStyle('A5:K6')
            ->applyFromArray($border);



// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A5', 'ESPECIE')
            ->setCellValue('B5', 'FINCA')
            ->setCellValue('C5', 'NUMERO ESTANQUE')
            ->setCellValue('D5', 'LOTE')
            ->setCellValue('E5', 'CANTIDAD ALEVINES')
            ->setCellValue('F5', 'DENSIDAD')
            ->setCellValue('G5', 'BIOMASA')
            ->setCellValue('H5', 'FECHA')
            ->setCellValue('I5', 'HORA')
            ->setCellValue('J5', 'PESO')
            ->setCellValue('K5', 'OBSERVACION');

            $n_especie=$_POST["n_especie"];
            $n_finca=$_POST["n_finca"];
            $n_estanque=$_POST["n_estanque"];
            $lote=$_POST["lote"];
            $cantidad_alevines=$_POST["cantidad_alevines"];
            $densidad=$_POST["densidad"];
            $biomasa=$_POST["biomasa"];
            $fecha=$_POST["fecha"];
            $hora=$_POST["hora"];
            $peso=$_POST["peso"];
            $observaciones=$_POST["observaciones"];
           


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A6', $n_especie )
            ->setCellValue('B6', $n_finca )
            ->setCellValue('C6', $n_estanque )
            ->setCellValue('D6', $lote )
            ->setCellValue('E6', $cantidad_alevines )
            ->setCellValue('F6', $densidad )
            ->setCellValue('G6', $biomasa )
            ->setCellValue('H6', $fecha )
            ->setCellValue('I6', $hora )
            ->setCellValue('J6', $peso )
            ->setCellValue('K6', $observaciones );





// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('EXPORTAR_SIEMBRA');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="exportacion_siembra.xlsx"');
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
