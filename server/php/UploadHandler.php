<?php
/*
 * jQuery File Upload Plugin PHP Class 8.0.2
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
 
/******************************************************************************
* Global Variable:      JPEG_Segment_Names
*
* Contents:     The names of the JPEG segment markers, indexed by their marker number
*
******************************************************************************/

$GLOBALS[ "JPEG_Segment_Names" ] = array(

0xC0 =>  "SOF0",  0xC1 =>  "SOF1",  0xC2 =>  "SOF2",  0xC3 =>  "SOF4",
0xC5 =>  "SOF5",  0xC6 =>  "SOF6",  0xC7 =>  "SOF7",  0xC8 =>  "JPG",
0xC9 =>  "SOF9",  0xCA =>  "SOF10", 0xCB =>  "SOF11", 0xCD =>  "SOF13",
0xCE =>  "SOF14", 0xCF =>  "SOF15",
0xC4 =>  "DHT",   0xCC =>  "DAC",

0xD0 =>  "RST0",  0xD1 =>  "RST1",  0xD2 =>  "RST2",  0xD3 =>  "RST3",
0xD4 =>  "RST4",  0xD5 =>  "RST5",  0xD6 =>  "RST6",  0xD7 =>  "RST7",

0xD8 =>  "SOI",   0xD9 =>  "EOI",   0xDA =>  "SOS",   0xDB =>  "DQT",
0xDC =>  "DNL",   0xDD =>  "DRI",   0xDE =>  "DHP",   0xDF =>  "EXP",

0xE0 =>  "APP0",  0xE1 =>  "APP1",  0xE2 =>  "APP2",  0xE3 =>  "APP3",
0xE4 =>  "APP4",  0xE5 =>  "APP5",  0xE6 =>  "APP6",  0xE7 =>  "APP7",
0xE8 =>  "APP8",  0xE9 =>  "APP9",  0xEA =>  "APP10", 0xEB =>  "APP11",
0xEC =>  "APP12", 0xED =>  "APP13", 0xEE =>  "APP14", 0xEF =>  "APP15",


0xF0 =>  "JPG0",  0xF1 =>  "JPG1",  0xF2 =>  "JPG2",  0xF3 =>  "JPG3",
0xF4 =>  "JPG4",  0xF5 =>  "JPG5",  0xF6 =>  "JPG6",  0xF7 =>  "JPG7",
0xF8 =>  "JPG8",  0xF9 =>  "JPG9",  0xFA =>  "JPG10", 0xFB =>  "JPG11",
0xFC =>  "JPG12", 0xFD =>  "JPG13",

0xFE =>  "COM",   0x01 =>  "TEM",   0x02 =>  "RES",

);

/******************************************************************************
* End of Global Variable:     JPEG_Segment_Names
******************************************************************************/


/******************************************************************************
* Global Variable:      JPEG_Segment_Descriptions
*
* Contents:     The descriptions of the JPEG segment markers, indexed by their marker number
*
******************************************************************************/

$GLOBALS[ "JPEG_Segment_Descriptions" ] = array(

/* JIF Marker byte pairs in JPEG Interchange Format sequence */
0xC0 => "Start Of Frame (SOF) Huffman  - Baseline DCT",
0xC1 =>  "Start Of Frame (SOF) Huffman  - Extended sequential DCT",
0xC2 =>  "Start Of Frame Huffman  - Progressive DCT (SOF2)",
0xC3 =>  "Start Of Frame Huffman  - Spatial (sequential) lossless (SOF3)",
0xC5 =>  "Start Of Frame Huffman  - Differential sequential DCT (SOF5)",
0xC6 =>  "Start Of Frame Huffman  - Differential progressive DCT (SOF6)",
0xC7 =>  "Start Of Frame Huffman  - Differential spatial (SOF7)",
0xC8 =>  "Start Of Frame Arithmetic - Reserved for JPEG extensions (JPG)",
0xC9 =>  "Start Of Frame Arithmetic - Extended sequential DCT (SOF9)",
0xCA =>  "Start Of Frame Arithmetic - Progressive DCT (SOF10)",
0xCB =>  "Start Of Frame Arithmetic - Spatial (sequential) lossless (SOF11)",
0xCD =>  "Start Of Frame Arithmetic - Differential sequential DCT (SOF13)",
0xCE =>  "Start Of Frame Arithmetic - Differential progressive DCT (SOF14)",
0xCF =>  "Start Of Frame Arithmetic - Differential spatial (SOF15)",
0xC4 =>  "Define Huffman Table(s) (DHT)",
0xCC =>  "Define Arithmetic coding conditioning(s) (DAC)",

0xD0 =>  "Restart with modulo 8 count 0 (RST0)",
0xD1 =>  "Restart with modulo 8 count 1 (RST1)",
0xD2 =>  "Restart with modulo 8 count 2 (RST2)",
0xD3 =>  "Restart with modulo 8 count 3 (RST3)",
0xD4 =>  "Restart with modulo 8 count 4 (RST4)",
0xD5 =>  "Restart with modulo 8 count 5 (RST5)",
0xD6 =>  "Restart with modulo 8 count 6 (RST6)",
0xD7 =>  "Restart with modulo 8 count 7 (RST7)",

0xD8 =>  "Start of Image (SOI)",
0xD9 =>  "End of Image (EOI)",
0xDA =>  "Start of Scan (SOS)",
0xDB =>  "Define quantization Table(s) (DQT)",
0xDC =>  "Define Number of Lines (DNL)",
0xDD =>  "Define Restart Interval (DRI)",
0xDE =>  "Define Hierarchical progression (DHP)",
0xDF =>  "Expand Reference Component(s) (EXP)",

0xE0 =>  "Application Field 0 (APP0) - usually JFIF or JFXX",
0xE1 =>  "Application Field 1 (APP1) - usually EXIF or XMP/RDF",
0xE2 =>  "Application Field 2 (APP2) - usually Flashpix",
0xE3 =>  "Application Field 3 (APP3)",
0xE4 =>  "Application Field 4 (APP4)",
0xE5 =>  "Application Field 5 (APP5)",
0xE6 =>  "Application Field 6 (APP6)",
0xE7 =>  "Application Field 7 (APP7)",

0xE8 =>  "Application Field 8 (APP8)",
0xE9 =>  "Application Field 9 (APP9)",
0xEA =>  "Application Field 10 (APP10)",
0xEB =>  "Application Field 11 (APP11)",
0xEC =>  "Application Field 12 (APP12) - usually [picture info]",
0xED =>  "Application Field 13 (APP13) - usually photoshop IRB / IPTC",
0xEE =>  "Application Field 14 (APP14)",
0xEF =>  "Application Field 15 (APP15)",


0xF0 =>  "Reserved for JPEG extensions (JPG0)",
0xF1 =>  "Reserved for JPEG extensions (JPG1)",
0xF2 =>  "Reserved for JPEG extensions (JPG2)",
0xF3 =>  "Reserved for JPEG extensions (JPG3)",
0xF4 =>  "Reserved for JPEG extensions (JPG4)",
0xF5 =>  "Reserved for JPEG extensions (JPG5)",
0xF6 =>  "Reserved for JPEG extensions (JPG6)",
0xF7 =>  "Reserved for JPEG extensions (JPG7)",
0xF8 =>  "Reserved for JPEG extensions (JPG8)",
0xF9 =>  "Reserved for JPEG extensions (JPG9)",
0xFA =>  "Reserved for JPEG extensions (JPG10)",
0xFB =>  "Reserved for JPEG extensions (JPG11)",
0xFC =>  "Reserved for JPEG extensions (JPG12)",
0xFD =>  "Reserved for JPEG extensions (JPG13)",

0xFE =>  "Comment (COM)",
0x01 =>  "For temp private use arith code (TEM)",
0x02 =>  "Reserved (RES)",

);
$GLOBALS[ "IFD_Tag_Definitions" ] = array(


/*****************************************************************************/
/*                                                                           */
/* TIFF Tags                                                                 */
/*                                                                           */
/*****************************************************************************/


"TIFF" => array(


256 => array(   'Name'  => "Image Width",
                'Description' => "Width of image in pixels (number of columns)",
                'Type'  => "Numeric",
                'Units' => "pixels" ),

257 => array(   'Name'  =>  "Image Length",
                'Description' => "Height of image in pixels (number of rows)",
                'Type'  => "Numeric",
                'Units' => "pixels" ),

258 => array(   'Name'  => "Bits Per Sample",
                'Description' => "Number of bits recorded per sample (a sample is usually one colour (Red, Green or Blue) of one pixel)",
                'Type'  => "Numeric",
                'Units' => "bits ( for each colour component )" ),


259 => array(   'Name' => "Compression",
                'Description' => "Specifies what type of compression is used 1 = uncompressed, 6 = JPEG compression (thumbnails only), Other = reserved",
                'Type' => "Lookup",
                1 => "Uncompressed",
                5 => "LZW Compression",
                6 => "Thumbnail compressed with JPEG compression",
                7 => "JPEG Compression",
                8 => "ZIP Compression" ),                                // Change: Added TIFF compression types as of version 1.11

262 => array(   'Name' =>  "Photometric Interpretation",
                'Description' => "Specifies Pixel Composition - 0 or 1 = monochrome, 2 = RGB, 3 = Palatte Colour, 4 = Transparency Mask, 6 = YCbCr",
                'Type' => "Lookup",
                2 => "RGB (Red Green Blue)",
                6 => "YCbCr (Luminance, Chroma minus Blue, and Chroma minus Red)" ),

274 => array(   'Name' =>  "Orientation",
                'Description' => "Specifies the orientation of the image.\n
1 = Row 0 top, column 0 left\n
2 = Row 0 top, column 0 right\n
3 = Row 0 bottom, column 0 right\n
4 = Row 0 bottom, column 0 left\n
5 = Row 0 left, column 0 top\n
6 = Row 0 right, column 0 top\n
7 = Row 0 right, column 0 bottom\n
8 = Row 0 left, column 0 bottom",
                'Type' => "Lookup",
                1 => "No Rotation, No Flip \n(Row 0 is at the visual top of the image,\n and column 0 is the visual left-hand side)",
                2 => "No Rotation, Flipped Horizontally \n(Row 0 is at the visual top of the image,\n and column 0 is the visual right-hand side)",
                3 => "Rotated 180 degrees, No Flip \n(Row 0 is at the visual bottom of the image,\n and column 0 is the visual right-hand side)",
                4 => "No Rotation, Flipped Vertically \n(Row 0 is at the visual bottom of the image,\n and column 0 is the visual left-hand side)",
                5 => "Flipped Horizontally, Rotated 90 degrees counter clockwise \n(Row 0 is at the visual left-hand side of of the image,\n and column 0 is the visual top)",
                6 => "No Flip, Rotated 90 degrees clockwise \n(Row 0 is at the visual right-hand side of of the image,\n and column 0 is the visual top)",
                7 => "Flipped Horizontally, Rotated 90 degrees clockwise \n(Row 0 is at the visual right-hand side of of the image,\n and column 0 is the visual bottom)",
                8 => "No Flip, Rotated 90 degrees counter clockwise \n(Row 0 is at the visual left-hand side of of the image,\n and column 0 is the visual bottom)" ),
277 => array(   'Name' =>  "Samples Per Pixel",
                'Description' => "Number of recorded samples (colours) per pixel - usually 1 for B&W, grayscale, and palette-colour, usually 3 for RGB and YCbCr",
                'Type' => "Numeric",
                'Units' => "Components (colours)" ),

284 => array(   'Name' =>  "Planar Configuration",
                'Description' => "Specifies whether pixel components are recorded in chunky or planar format - 1 = Chunky, 2 = Planar",
                'Type' => "Lookup",
                1 => "Chunky Format",
                2 => "Planar Format" ),

530 => array(   'Name' =>  "YCbCr Sub-Sampling",
                'Description' => "Specifies ratio of chrominance to luminance components - [2, 1] = YCbCr4:2:2,  [2, 2] = YCbCr4:2:0",
                'Type' => "Special" ),


531 => array(   'Name' =>  "YCbCr Positioning",
                'Description' => "Specifies location of chrominance and luminance components - 1 = centered, 2 = co-sited",
                'Type' => "Lookup",
                1 => "Chrominance components Centred in relation to luminance components",
                2 => "Chrominance and luminance components Co-Sited" ),


282 => array(   'Name' =>  "X Resolution",
                'Description' => "Number of columns (pixels) per \'ResolutionUnit\'",
                'Type' => "Numeric",
                'Units'=> "pixels per 'Resolution Unit' " ),

283 => array(   'Name' =>  "Y Resolution",
                'Description' => "Number of rows (pixels) per \'ResolutionUnit\'",
                'Type' => "Numeric",
                'Units'=> "pixels per 'Resolution Unit' " ),

296 => array(   'Name' =>  "Resolution Unit",
                'Description' => "Units for measuring XResolution and YResolution - 1 = No units, 2 = Inches, 3 = Centimetres",
                'Type' => "Lookup",
                2 => "Inches",
                3 => "Centimetres" ),

273 => array(   'Name' =>  "Strip Offsets",
                'Type' => "Numeric",
                'Units'=> "bytes offset" ),

278 => array(   'Name' =>  "Rows Per Strip",
                'Type' => "Numeric",
                'Units'=> "rows" ),

279 => array(   'Name' => "Strip Byte Counts",
                'Type' => "Numeric",
                'Units'=> "bytes" ),

513 => array(   'Name' => "Exif Thumbnail (JPEG Interchange Format)",
                'Type' => "Special" ),

514 => array(   'Name' => "Exif Thumbnail Length (JPEG Interchange Format Length)",
                'Type' => "Numeric",
                'Units'=> "bytes" ),

301 => array(   'Name' => "Transfer Function",
                'Type' => "Numeric",
                'Units'=> "" ),

318 => array(   'Name' => "White Point Chromaticity",
                'Type' => "Numeric",
                'Units'=> "(x,y coordinates on a 1931 CIE xy chromaticity diagram)" ),

319 => array(   'Name' => "Primary Chromaticities",
                'Type' => "Numeric",
                'Units'=> "(Red x,y, Green x,y, Blue x,y coordinates on a 1931 CIE xy chromaticity diagram)" ),

529 => array(   'Name' => "YCbCr Coefficients",
                'Description' => "Transform Coefficients for transformation from RGB to YCbCr",
                'Type' => "Numeric",
                'Units'=> "(LumaRed, LumaGreen, LumaBlue [proportions of red, green, and blue in luminance])" ),

532 => array(   'Name' => "Reference Black point and White point",
                'Type' => "Numeric",
                'Units'=> "(R or Y White Headroom, R or Y Black Footroom, G or Cb White Headroom, G or Cb Black Footroom, B or Cr White Headroom, B or Cr Black Footroom)" ),

306 => array(   'Name' => "Date and Time",
                'Type' => "Numeric",
                'Units'=> " (Format: YYYY:MM:DD HH:mm:SS)" ),

270 => array(   'Name' => "Image Description",
                'Type' => "String" ),

271 => array(   'Name' => "Make (Manufacturer)",
                'Type' => "String" ),

272 => array(   'Name' => "Model",
                'Type' => "String" ),

305 => array(   'Name' => "Software or Firmware",
                'Type' => "String" ),

315 => array(   'Name' => "Artist Name",
                'Type' => "String" ),

700 => array(   'Name' => "Embedded XMP Block",        // Change: Added embedded XMP as of version 1.11
                'Type' => "XMP" ),

33432 => array( 'Name' => "Copyright Information",
                'Type' => "String" ),

34665 => array( 'Name' => "EXIF Image File Directory (IFD)",
                'Type' => "SubIFD",
                'Tags Name' => "EXIF" ),

33723 => array( 'Name' => "IPTC Records",
                'Type' => "IPTC" ),

34377 => array( 'Name' => "Embedded Photoshop IRB",    // Change: Added embedded IRB as of version 1.11
                'Type' => "IRB" ),

34853 => array( 'Name' => "GPS Info Image File Directory (IFD)",        // Change: Moved GPS IFD tag to correct location as of version 1.11
                'Type' => "SubIFD",
                'Tags Name' => "GPS" ),

50341 => array( 'Name' => "Print Image Matching Info",
                'Type' => "PIM" ),

),


/*****************************************************************************/
/*                                                                           */
/* EXIF Tags                                                                 */
/*                                                                           */
/*****************************************************************************/


'EXIF' => array (

// Exif IFD
36864 => array( 'Name' => "Exif Version",
                'Type' => "String" ),

40965 => array( 'Name' => "Interoperability Image File Directory (IFD)",
                'Type' => "SubIFD",
                'Tags Name' => "Interoperability" ),

// Change: removed GPS IFD tag from here as it was incorrect location - as of version 1.11

40960 => array( 'Name' => "FlashPix Version",
                'Type' => "String" ),

40961 => array( 'Name' => "Colour Space",
                'Type' => "Lookup",
                1 => "sRGB",
                0xFFFF => "Uncalibrated" ),

40962 => array( 'Name' => "Pixel X Dimension",
                'Type' => "Numeric",
                'Units'=> "pixels" ),

40963 => array( 'Name' => "Pixel Y Dimension",
                'Type' => "Numeric",
                'Units' => "pixels" ),

37121 => array( 'Name' => "Components Configuration",
                'Type' => "Special" ),

37122 => array( 'Name' => "Compressed Bits Per Pixel",
                'Type' => "Numeric",
                'Units' => "bits" ),

37500 => array( 'Name' => "Maker Note",
                'Type' => "Maker Note" ),

37510 => array( 'Name' => "User Comment",
                'Type' => "Character Coded String" ),

40964 => array( 'Name' => "Related Sound File",
                'Type' => "String" ),

36867 => array( 'Name' => "Date and Time of Original",
                'Type' => "String",
                'Units' => " (Format: YYYY:MM:DD HH:mm:SS)" ),

36868 => array( 'Name' => "Date and Time when Digitized",
                'Type' => "String",
                'Units' => " (Format: YYYY:MM:DD HH:mm:SS)" ),

37520 => array( 'Name' => "Sub Second Time",
                'Type' => "String" ),

37521 => array( 'Name' => "Sub Second Time of Original",
                'Type' => "String" ),

37522 => array( 'Name' => "Sub Second Time when Digitized",
                'Type' => "String" ),

33434 => array( 'Name' => "Exposure Time",
                'Type' => "Numeric",
                'Units' => "seconds" ),

37377 => array( 'Name' => "APEX Shutter Speed Value (Tv)",
                'Type' => "Numeric" ),

37378 => array( 'Name' => "APEX Aperture Value (Av)",
                'Type' => "Numeric" ),

37379 => array( 'Name' => "APEX Brightness Value (Bv)",
                'Type' => "Numeric" ),

37380 => array( 'Name' => "APEX Exposure Bias Value (Exposure Compensation)",
                'Type' => "Numeric",
                'Units' => "EV" ),

42240 => array( 'Name' => "Gamma Compensation for Playback",
                'Type' => "Numeric" ),


37381 => array( 'Name' => "APEX Maximum Aperture Value",
                'Type' => "Numeric" ),

37382 => array( 'Name' => "Subject Distance",
                'Type' => "Numeric",
                'Units' => "metres" ),

37383 => array( 'Name' => "Metering Mode",
                'Type' => "Lookup",
                0 => "Unknown",
                1 => "Average",
                2 => "Center Weighted Average",
                3 => "Spot",
                4 => "Multi Spot",
                5 => "Pattern",
                6 => "Partial",
                255 => "Other" ),

37384 => array( 'Name' => "Light Source",
                'Type' => "Lookup",
                0 => "Unknown",
                1 => "Daylight",
                2 => "Fluorescent",
                3 => "Tungsten (incandescent light)",
                4 => "Flash",
                9 => "Fine weather",
                10 => "Cloudy weather",
                11 => "Shade",
                12 => "Daylight fluorescent (D 5700  7100K)",
                13 => "Day white fluorescent (N 4600  5400K)",
                14 => "Cool white fluorescent (W 3900  4500K)",
                15 => "White fluorescent (WW 3200  3700K)",
                17 => "Standard light A",
                18 => "Standard light B",
                19 => "Standard light C",
                20 => "D55",
                21 => "D65",
                22 => "D75",
                23 => "D50",
                24 => "ISO studio tungsten",
                255 => "Other" ),

37385 => array( 'Name' => "Flash",
                'Type' => "Lookup",
                0  => "Flash did not fire",
                1  => "Flash fired",
                5  => "Strobe return light not detected",
                7  => "Strobe return light detected",
                9  => "Flash fired, compulsory flash mode",
                13 => "Flash fired, compulsory flash mode, return light not detected",
                15 => "Flash fired, compulsory flash mode, return light detected",
                16 => "Flash did not fire, compulsory flash suppression mode",
                24 => "Flash did not fire, auto mode",
                25 => "Flash fired, auto mode",
                29 => "Flash fired, auto mode, return light not detected",
                31 => "Flash fired, auto mode, return light detected",
                32 => "No flash function",
                65 => "Flash fired, red-eye reduction mode",
                69 => "Flash fired, red-eye reduction mode, return light not detected",
                71 => "Flash fired, red-eye reduction mode, return light detected",
                73 => "Flash fired, compulsory flash mode, red-eye reduction mode",
                77 => "Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected",
                79 => "Flash fired, compulsory flash mode, red-eye reduction mode, return light detected",
                89 => "Flash fired, auto mode, red-eye reduction mode",
                93 => "Flash fired, auto mode, return light not detected, red-eye reduction mode",
                95 => "Flash fired, auto mode, return light detected, red-eye reduction mode" ),

37386 => array( 'Name' => "FocalLength",
                'Type' => "Numeric",
                'Units' => "mm" ),

37396 => array( 'Name' => "Subject Area",
                'Type' => "Numeric",
                'Units' => "( Two Values: x,y coordinates,  Three Values: x,y coordinates, diameter,  Four Values: center x,y coordinates, width, height)" ),

33437 => array( 'Name' => "Aperture F Number",
                'Type' => "Numeric" ),

34850 => array( 'Name' => "Exposure Program",
                'Type' => "Lookup",
                0 => "Not defined",
                1 => "Manual",
                2 => "Normal program",
                3 => "Aperture priority",
                4 => "Shutter priority",
                5 => "Creative program (biased toward depth of field)",
                6 => "Action program (biased toward fast shutter speed)",
                7 => "Portrait mode (for closeup photos with the background out of focus)",
                8 => "Landscape mode (for landscape photos with the background in focus)" ),

34852 => array( 'Name' => "Spectral Sensitivity",
                'Type' => "String" ),

34855 => array( 'Name' => "ISO Speed Ratings",
                'Type' => "Numeric" ),

34856 => array( 'Name' => "Opto-Electronic Conversion Function",
                'Type' => "Unknown" ),

41483 => array( 'Name' => "Flash Energy",
                'Type' => "Numeric",
                'Units' => "Beam Candle Power Seconds (BCPS)" ),

41484 => array( 'Name' => "Spatial Frequency Response",
                'Type' => "Unknown" ),

41486 => array( 'Name' => "Focal Plane X Resolution",
                'Type' => "Numeric",
                'Units' => "pixels per 'Focal Plane Resolution Unit'" ),

41487 => array( 'Name' => "Focal Plane Y Resolution",
                'Type' => "Numeric",
                'Units' => "pixels per 'Focal Plane Resolution Unit'" ),

41488 => array( 'Name' => "Focal Plane Resolution Unit",
                'Type' => "Lookup",
                2 => "Inches",
                3 => "Centimetres" ),

41492 => array( 'Name' => "Subject Location",
                'Type' => "Numeric",
                'Units' => "(x,y pixel coordinates of subject)" ),

41493 => array( 'Name' => "Exposure Index",
                'Type' => "Numeric" ),

41495 => array( 'Name' => "Sensing Method",
                'Type' => "Lookup",
                1 => "Not defined",
                2 => "One-chip colour area sensor",
                3 => "Two-chip colour area sensor",
                4 => "Three-chip colour area sensor",
                5 => "Colour sequential area sensor",
                7 => "Trilinear sensor",
                8 => "Colour sequential linear sensor" ),

41728 => array( 'Name' => "File Source",
                'Type' => "Lookup",
                3 => "Digital Still Camera" ),

41729 => array( 'Name' => "Scene Type",
                'Type' => "Lookup",
                1 => "A directly photographed image" ),

41730 => array( 'Name' => "Colour Filter Array Pattern",
                'Type' => "Special" ),

41985 => array( 'Name' => "Special Processing (Custom Rendered)",
                'Type' => "Lookup",
                0 => "Normal process",
                1 => "Custom process" ),

41986 => array( 'Name' => "Exposure Mode",
                'Type' => "Lookup",
                0 => "Auto exposure",
                1 => "Manual exposure",
                2 => "Auto bracket" ),

41987 => array( 'Name' => "White Balance",
                'Type' => "Lookup",
                0 => "Auto white balance",
                1 => "Manual white balance" ),

41988 => array( 'Name' => "Digital Zoom Ratio",
                'Type' => "Numeric",
                'Units' => " ( Zero = Digital Zoom Not Used )" ),

41989 => array( 'Name' => "Equivalent Focal Length In 35mm Film",
                'Type' => "Numeric",
                'Units' => "mm" ),

41990 => array( 'Name' => "Scene Capture Type",
                'Type' => "Lookup",
                0 => "Standard",
                1 => "Landscape",
                2 => "Portrait",
                3 => "Night scene" ),

41991 => array( 'Name' => "Gain Control",
                'Type' => "Lookup",
                0 => "None",
                1 => "Low gain up",
                2 => "High gain up",
                3 => "Low gain down",
                4 => "High gain down" ),

41992 => array( 'Name' => "Contrast",
                'Type' => "Lookup",
                0 => "Normal",
                1 => "Soft",
                2 => "Hard" ),

41993 => array( 'Name' => "Saturation",
                'Type' => "Lookup",
                0 => "Normal",
                1 => "Low saturation",
                2 => "High saturation" ),

41994 => array( 'Name' => "Sharpness",
                'Type' => "Lookup",
                0 => "Normal",
                1 => "Soft",
                2 => "Hard" ),

41995 => array( 'Name' => "Device Setting Description",
                'Type' => "Unknown" ),

41996 => array( 'Name' => "Subject Distance Range",
                'Type' => "Lookup",
                0 => "Unknown",
                1 => "Macro",
                2 => "Close view",
                3 => "Distant view" ),

42016 => array( 'Name' => "Image Unique ID",
                'Type' => "String" ),



//  11  => "ACDComment",
//  255 => "NewSubfileType"


),




/*****************************************************************************/
/*                                                                           */
/* Interoperability Tags                                                     */
/*                                                                           */
/*****************************************************************************/

"Interoperability" => array(

1 => array(     'Name' => "Interoperability Index",
                'Type' => "String" ),

2 => array(     'Name' => "Interoperability Version",
                'Type' => "String" ),

4096 => array(  'Name' => "Related Image File Format",
                'Type' => "String" ),

4097 => array(  'Name' => "Related Image File Width",
                'Type' => "Numeric",
                'Units' => "pixels" ),

4098 => array(  'Name' => "Related Image File Length",
                'Type' => "Numeric",
                'Units' => "pixels " )

),


/*****************************************************************************/
/*                                                                           */
/* GPS Tags                                                                  */
/*                                                                           */
/*****************************************************************************/

"GPS" => array(

0 => array(     'Name' => "GPS Tag Version",
                'Type' => "Numeric",
                'Units' => "(e.g.: 2.2.0.0 = Version 2.2 )" ),

1 => array(     'Name' => "North or South Latitude",
                'Type' => "String" ),

2 => array(     'Name' => "Latitude",
                'Type' => "Numeric",
                'Units' => "(Degrees Minutes Seconds North or South)" ),

3 => array(     'Name' => "East or West Longitude",
                'Type' => "String" ),

4 => array(     'Name' => "Longitude",
                'Type' => "Numeric",
                'Units' => "(Degrees Minutes Seconds East or West)" ),

5 => array(     'Name' => "Altitude Reference",
                'Type' => "Lookup",
                0 => "Sea Level",
                1 => "Sea level reference (negative value)" ),

6 => array(     'Name' => "Altitude",
                'Type' => "Numeric",
                'Units' => "Metres with respect to Altitude Reference" ),

7 => array(     'Name' => "GPS Time (atomic clock)",
                'Type' => "Numeric",
                'Units' => "(Hours Minutes Seconds)" ),

8 => array(     'Name' => "GPS Satellites used for Measurement",
                'Type' => "String" ),

9 => array(     'Name' => "GPS Receiver Status",
                'Type' => "Lookup",
                'A' => "Measurement in progress",          // Change: Fixed tag values as of version 1.11
                'V' => "Measurement Interoperability" ),

10 => array(    'Name' => "GPS Measurement Mode",
                'Type' => "Lookup",
                2 => "2-dimensional measurement",         // Change: Fixed tag values as of version 1.11
                3 => "3-dimensional measurement" ),

11 => array(    'Name' => "Measurement Precision",
                'Type' => "Numeric",
                'Units' => "(Data Degree of Precision, Horizontal for 2D, Position for 3D)" ),

12 => array(    'Name' => "Speed Unit",
                'Type' => "Lookup",
                'K' => "Kilometers per Hour",            // Change: Fixed tag values as of version 1.11
                'M' => "Miles per Hour",
                'N' => "Knots" ),

13 => array(    'Name' => "Speed of GPS receiver",
                'Type' => "Numeric",
                'Units' => "Speed Units" ),

14 => array(    'Name' => "Reference for direction of Movement",
                'Type' => "Lookup",                     // Change: Fixed tag values as of version 1.11
                'T' => "True North",
                'M' => "Magnetic North" ),

15 => array(    'Name' => "Direction of Movement",
                'Type' => "Numeric",
                'Units' => "Degrees relative to Movement Direction Reference" ),

16 => array(    'Name' => "Reference for Direction of Image",
                'Type' => "Lookup",
                'T' => "True North",                    // Change: Fixed tag values as of version 1.11
                'M' => "Magnetic North" ),

17 => array(    'Name' => "Direction of Image",
                'Type' => "Numeric",
                'Units' => "Degrees relative to Image Direction Reference" ),

18 => array(    'Name' => "Geodetic Survey Datum Used",
                'Type' => "String" ),

19 => array(    'Name' => "Destination - North or South Latitude",
                'Type' => "String" ),

20 => array(    'Name' => "Latitude of Destination",
                'Type' => "Numeric",
                'Units' => "(Degrees Minutes Seconds North or South)" ),

21 => array(    'Name' => "Destination - East or West Longitude",
                'Type' => "String" ),

22 => array(    'Name' => "Longitude of Destination",
                'Type' => "Numeric",
                'Units' => "(Degrees Minutes Seconds East or West)" ),

23 => array(    'Name' => "Reference for Bearing of Destination",
                'Type' => "Lookup",
                'T' => "True North",                    // Change: Fixed tag values as of version 1.11
                'M' => "Magnetic North" ),

24 => array(    'Name' => "Bearing of Destination",
                'Type' => "Numeric",
                'Units' => "Degrees relative to Destination Bearing Reference" ),

25 => array(    'Name' => "Units for Distance to Destination",
                'Type' => "Lookup",
                'K' => "Kilometres",                    // Change: Fixed tag values as of version 1.11
                'M' => "Miles",
                'N' => "Nautical Miles" ),

26 => array(    'Name' => "Distance to Destination",
                'Type' => "Numeric",
                'Units' => "Destination Distance Units" ),

27 => array(    'Name' => "Name of GPS Processing Method",
                'Type' => "Character Coded String" ),

28 => array(    'Name' => "Name of GPS Area",
                'Type' => "Character Coded String" ),

29 => array(    'Name' => "GPS Date",
                'Type' => "Numeric",
                'Units'=> " (Format: YYYY:MM:DD HH:mm:SS)" ),

30 => array(    'Name' => "GPS Differential Correction",
                'Type' => "Lookup",
                0 => "Measurement without differential correction",
                1 => "Differential correction applied" ),

),









/*****************************************************************************/
/*                                                                           */
/* META (App3) Tags                                                          */
/*                                                                           */
/*****************************************************************************/

"Meta" => array(


50000 => array( 'Name' => "CaptureDevice.FilmProductCode",
                'Type' => "Unknown" ),

50001 => array( 'Name' => "DigitalProcess.ImageSourceEK",
                'Type' => "Unknown" ),

50002 => array( 'Name' => "CaptureConditions.PAR",
                'Type' => "Unknown" ),

50003 => array( 'Name' => "CaptureDevice.CameraOwner.EK",
                'Type' => "Character Coded String" ),

50004 => array( 'Name' => "CaptureDevice.SerialNumber.Camera",
                'Type' => "Unknown" ),

50005 => array( 'Name' => "SceneContent.GroupCaption.UserSelectGroupTitle",
                'Type' => "Unknown" ),

50006 => array( 'Name' => "OutputOrder.Information.DealerIDNumber",
                'Type' => "Unknown" ),

50007 => array( 'Name' => "CaptureDevice.FID",
                'Type' => "Unknown" ),

50008 => array( 'Name' => "OutputOrder.Information.EnvelopeNumber",
                'Type' => "Unknown" ),

50009 => array( 'Name' => "OutputOrder.SimpleRenderInst.FrameNumber",
                'Type' => "Unknown" ),

50010 => array( 'Name' => "CaptureDevice.FilmCategory",
                'Type' => "Unknown" ),

50011 => array( 'Name' => "CaptureDevice.FilmGencode",
                'Type' => "Unknown" ),

50012 => array( 'Name' => "CaptureDevice.Scanner.ModelAndVersion",
                'Type' => "Unknown" ),

50013 => array( 'Name' => "CaptureDevice.FilmSize",
                'Type' => "Unknown" ),

50014 => array( 'Name' => "DigitalProcess.History.SBARGBShifts",
                'Type' => "Unknown" ),

50015 => array( 'Name' => "DigitalProcess.History.SBAInputImageColourspace",
                'Type' => "Unknown" ),

50016 => array( 'Name' => "DigitalProcess.History.SBAInputImageBitDepth",
                'Type' => "Unknown" ),

50017 => array( 'Name' => "DigitalProcess.History.SBAExposureRecord",
                'Type' => "Unknown" ),

50018 => array( 'Name' => "DigitalProcess.History.UserAdjSBARGBShifts",
                'Type' => "Unknown" ),

50019 => array( 'Name' => "DigitalProcess.ImageRotationStatus",
                'Type' => "Unknown" ),

50020 => array( 'Name' => "DigitalProcess.RollGuid.Elements",
                'Type' => "Unknown" ),

50021 => array( 'Name' => "ImageContainer.MetadataNumber",
                'Type' => "String" ),

50022 => array( 'Name' => "DigitalProcess.History.EditTagArray",
                'Type' => "Unknown" ),

50023 => array( 'Name' => "CaptureConditions.Magnification",
                'Type' => "Unknown" ),

50028 => array( 'Name' => "CaptureDevice.NativePhysicalXResolution",
                'Type' => "Unknown" ),

50029 => array( 'Name' => "CaptureDevice.NativePhysicalYResolution",
                'Type' => "Unknown" ),

50030 => array( 'Name' => "Kodak Special Effects IFD",
                'Type' => "SubIFD",
                'Tags Name' => "KodakSpecialEffects" ),

50031 => array( 'Name' => "Kodak Borders IFD",
                'Type' => "SubIFD",
                'Tags Name' => "KodakBorders" ),

50042 => array( 'Name' => "CaptureDevice.NativePhysicalResolutionUnit",
                'Type' => "Unknown" ),

50200 => array( 'Name' => "ImageContainer.SourceImageDirectory",
                'Type' => "Unknown" ),

50201 => array( 'Name' => "ImageContainer.SourceImageFileName",
                'Type' => "Unknown" ),

50202 => array( 'Name' => "ImageContainer.SourceImageVolumeName",
                'Type' => "Unknown" ),

50284 => array( 'Name' => "CaptureConditions.PrintQuantity",
                'Type' => "Unknown" ),

50286 => array( 'Name' => "DigitalProcess.ImagePrintStatus",
                'Type' => "Unknown" )

),



/*****************************************************************************/
/*                                                                           */
/* Kodak Special Effects IFD Tags                                            */
/*                                                                           */
/*****************************************************************************/

"KodakSpecialEffects" => array(

0 => array(     'Name' => "Digital Effects Version",
                'Type' => "Numeric" ),

1 => array(     'Name' => "Digital Effects Name",
                'Type' => "Character Coded String" ),

2 => array(     'Name' => "Digital Effects Type",
                'Type' => "Lookup",
                0 => "None Applied" )

),

/*****************************************************************************/
/*                                                                           */
/* Kodak Borders IFD Tags                                                    */
/*                                                                           */
/*****************************************************************************/

"KodakBorders" => array(

0 => array(     'Name' => "Borders Version",
                'Type' => "Numeric" ),

1 => array(     'Name' => "Border Name",
                'Type' => "Character Coded String" ),

2 => array(     'Name' => "Border ID",
                'Type' => "Numeric" ),

3 => array(     'Name' => "Border Location",
                'Type' => "Lookup" ),

4 => array(     'Name' => "Border Type",
                'Type' => "Lookup",
                0 => "None" ),

8 => array(     'Name' => "Watermark Type",
                'Type' => "Lookup",
                0 => "None" )

),

);

if ( !isset( $GLOBALS['HIDE_UNKNOWN_TAGS'] ) )     $GLOBALS['HIDE_UNKNOWN_TAGS']= FALSE;
if ( !isset( $GLOBALS['SHOW_BINARY_DATA_HEX'] ) )  $GLOBALS['SHOW_BINARY_DATA_HEX'] = FALSE;
if ( !isset( $GLOBALS['SHOW_BINARY_DATA_TEXT'] ) ) $GLOBALS['SHOW_BINARY_DATA_TEXT'] = FALSE;


class UploadHandler
{

    protected $options;

    // PHP File Upload error message codes:
    // http://php.net/manual/en/features.file-upload.errors.php
    protected $error_messages = array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk',
        8 => 'A PHP extension stopped the file upload',
        'post_max_size' => 'The uploaded file exceeds the post_max_size directive in php.ini',
        'max_file_size' => 'File is too big',
        'min_file_size' => 'File is too small',
        'accept_file_types' => 'Filetype not allowed',
        'max_number_of_files' => 'Maximum number of files exceeded',
        'max_width' => 'Image exceeds maximum width',
        'min_width' => 'Image requires a minimum width',
        'max_height' => 'Image exceeds maximum height',
        'min_height' => 'Image requires a minimum height',
        'abort' => 'File upload aborted',
        'image_resize' => 'Failed to resize image'
    );

    protected $image_objects = array();

    function __construct($options = null, $initialize = true, $error_messages = null) {
        $this->options = array(
            'script_url' => $this->get_full_url().'/',
            'upload_dir' => dirname($this->get_server_var('SCRIPT_FILENAME')).'/files_uploaded/',
            'upload_url' => $this->get_full_url().'/files_uploaded/',
            'user_dirs' => false,
            'mkdir_mode' => 0755,
            'param_name' => 'files',
            // Set the following option to 'POST', if your server does not support
            // DELETE requests. This is a parameter sent to the client:
            'delete_type' => 'DELETE',
            'access_control_allow_origin' => '*',
            'access_control_allow_credentials' => false,
            'access_control_allow_methods' => array(
                'OPTIONS',
                'HEAD',
                'GET',
                'POST',
                'PUT',
                'PATCH',
                'DELETE'
            ),
            'access_control_allow_headers' => array(
                'Content-Type',
                'Content-Range',
                'Content-Disposition'
            ),
            // Enable to provide file downloads via GET requests to the PHP script:
            //     1. Set to 1 to download files via readfile method through PHP
            //     2. Set to 2 to send a X-Sendfile header for lighttpd/Apache
            //     3. Set to 3 to send a X-Accel-Redirect header for nginx
            // If set to 2 or 3, adjust the upload_url option to the base path of
            // the redirect parameter, e.g. '/files/'.
            'download_via_php' => false,
            // Read files in chunks to avoid memory limits when download_via_php
            // is enabled, set to 0 to disable chunked reading of files:
            'readfile_chunk_size' => 10 * 1024 * 1024, // 10 MiB
            // Defines which files can be displayed inline when downloaded:
            'inline_file_types' => '/\.(gif|jpe?g|png)$/i',
            // Defines which files (based on their names) are accepted for upload:
            'accept_file_types' => '/.+$/i',
            // The php.ini settings upload_max_filesize and post_max_size
            // take precedence over the following max_file_size setting:
            'max_file_size' => null,
            'min_file_size' => 1,
            // The maximum number of files for the upload directory:
            'max_number_of_files' => null,
            // Defines which files are handled as image files:
            'image_file_types' => '/\.(gif|jpe?g|png)$/i',
            // Image resolution restrictions:
            'max_width' => null,
            'max_height' => null,
            'min_width' => 1,
            'min_height' => 1,
            // Set the following option to false to enable resumable uploads:
            'discard_aborted_uploads' => true,
            // Set to 0 to use the GD library to scale and orient images,
            // set to 1 to use imagick (if installed, falls back to GD),
            // set to 2 to use the ImageMagick convert binary directly:
            'image_library' => 1,
            // Uncomment the following to define an array of resource limits
            // for imagick:
            /*
            'imagick_resource_limits' => array(
                imagick::RESOURCETYPE_MAP => 32,
                imagick::RESOURCETYPE_MEMORY => 32
            ),
            */
            // Command or path for to the ImageMagick convert binary:
            'convert_bin' => 'convert',
            // Uncomment the following to add parameters in front of each
            // ImageMagick convert call (the limit constraints seem only
            // to have an effect if put in front):
            /*
            'convert_params' => '-limit memory 32MiB -limit map 32MiB',
            */
            // Command or path for to the ImageMagick identify binary:
            'identify_bin' => 'identify',
            'image_versions' => array(
                // The empty image version key defines options for the original image:
                '' => array(
                    // Automatically rotate images based on EXIF meta data:
                    'auto_orient' => true
                ),
                // Uncomment the following to create medium sized images:
                /*
                'medium' => array(
                    'max_width' => 800,
                    'max_height' => 600
                ),
                */
                'thumbnail' => array(
                    // Uncomment the following to use a defined directory for the thumbnails
                    // instead of a subdirectory based on the version identifier.
                    // Make sure that this directory doesn't allow execution of files if you
                    // don't pose any restrictions on the type of uploaded files, e.g. by
                    // copying the .htaccess file from the files directory for Apache:
                    //'upload_dir' => dirname($this->get_server_var('SCRIPT_FILENAME')).'/thumb/',
                    //'upload_url' => $this->get_full_url().'/thumb/',
                    // Uncomment the following to force the max
                    // dimensions and e.g. create square thumbnails:
                    //'crop' => true,
                    'max_width' => 80,
                    'max_height' => 80
                )
            )
        );
        if ($options) {
            $this->options = $options + $this->options;
        }
        if ($error_messages) {
            $this->error_messages = $error_messages + $this->error_messages;
        }
        if ($initialize) {
            $this->initialize();
        }
    }

    protected function initialize() {
        switch ($this->get_server_var('REQUEST_METHOD')) {
            case 'OPTIONS':
            case 'HEAD':
                $this->head();
                break;
            case 'GET':
                $this->get();
                break;
            case 'PATCH':
            case 'PUT':
            case 'POST':
                $this->post();
                break;
            case 'DELETE':
                $this->delete();
                break;
            default:
                $this->header('HTTP/1.1 405 Method Not Allowed');
        }
    }

    protected function get_full_url() {
        $https = !empty($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'on') === 0;
        return
            ($https ? 'https://' : 'http://').
            (!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
            (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
            ($https && $_SERVER['SERVER_PORT'] === 443 ||
            $_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
            substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
    }

    protected function get_user_id() {
        @session_start();
        return session_id();
    }

    protected function get_user_path() {
        if ($this->options['user_dirs']) {
            return $this->get_user_id().'/';
        }
        return '';
    }

    protected function get_upload_path($file_name = null, $version = null) {
        $file_name = $file_name ? $file_name : '';
        if (empty($version)) {
            $version_path = '';
        } else {
            $version_dir = @$this->options['image_versions'][$version]['upload_dir'];
            if ($version_dir) {
                return $version_dir.$this->get_user_path().$file_name;
            }
            $version_path = $version.'/';
        }
        return $this->options['upload_dir'].$this->get_user_path()
            .$version_path.$file_name;
    }

    protected function get_query_separator($url) {
        return strpos($url, '?') === false ? '?' : '&';
    }

    protected function get_download_url($file_name, $version = null, $direct = false) {
        if (!$direct && $this->options['download_via_php']) {
            $url = $this->options['script_url']
                .$this->get_query_separator($this->options['script_url'])
                .$this->get_singular_param_name()
                .'='.rawurlencode($file_name);
            if ($version) {
                $url .= '&version='.rawurlencode($version);
            }
            return $url.'&download=1';
        }
        if (empty($version)) {
            $version_path = '';
        } else {
            $version_url = @$this->options['image_versions'][$version]['upload_url'];
            if ($version_url) {
                return $version_url.$this->get_user_path().rawurlencode($file_name);
            }
            $version_path = rawurlencode($version).'/';
        }
        return $this->options['upload_url'].$this->get_user_path()
            .$version_path.rawurlencode($file_name);
    }

    protected function set_additional_file_properties($file) {
        $file->deleteUrl = $this->options['script_url']
            .$this->get_query_separator($this->options['script_url'])
            .$this->get_singular_param_name()
            .'='.$this->get_upload_path().rawurlencode($file->name);
        $file->deleteType = $this->options['delete_type'];
        if ($file->deleteType !== 'DELETE') {
            $file->deleteUrl .= '&_method=DELETE';
        }
        if ($this->options['access_control_allow_credentials']) {
            $file->deleteWithCredentials = true;
        }
    }

    // Fix for overflowing signed 32 bit integers,
    // works for sizes up to 2^32-1 bytes (4 GiB - 1):
    protected function fix_integer_overflow($size) {
        if ($size < 0) {
            $size += 2.0 * (PHP_INT_MAX + 1);
        }
        return $size;
    }

    protected function get_file_size($file_path, $clear_stat_cache = false) {
        if ($clear_stat_cache) {
            if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
                clearstatcache(true, $file_path);
            } else {
                clearstatcache();
            }
        }
        return $this->fix_integer_overflow(filesize($file_path));
    }

    protected function is_valid_file_object($file_name) {
        $file_path = $this->get_upload_path($file_name);
        if (is_file($file_path) && $file_name[0] !== '.') {
            return true;
        }
        return false;
    }

    protected function get_file_object($file_name) {
        if ($this->is_valid_file_object($file_name)) {
            $file = new \stdClass();
            $file->name = $file_name;
            $file->size = $this->get_file_size(
                $this->get_upload_path($file_name)
            );
            $file->url = $this->get_download_url($file->name);
            foreach($this->options['image_versions'] as $version => $options) {
                if (!empty($version)) {
                    if (is_file($this->get_upload_path($file_name, $version))) {
                        $file->{$version.'Url'} = $this->get_download_url(
                            $file->name,
                            $version
                        );
                    }
                }
            }
            $this->set_additional_file_properties($file);
            return $file;
        }
        return null;
    }

    protected function get_file_objects($iteration_method = 'get_file_object') {
        $upload_dir = $this->get_upload_path();
        if (!is_dir($upload_dir)) {
            return array();
        }
        return array_values(array_filter(array_map(
            array($this, $iteration_method),
            scandir($upload_dir)
        )));
    }

    protected function count_file_objects() {
        return count($this->get_file_objects('is_valid_file_object'));
    }

    protected function get_error_message($error) {
        return array_key_exists($error, $this->error_messages) ?
            $this->error_messages[$error] : $error;
    }

    function get_config_bytes($val) {
        $val = trim($val);
        $last = strtolower($val[strlen($val)-1]);
        switch($last) {
            case 'g':
                $val *= 1024;
            case 'm':
                $val *= 1024;
            case 'k':
                $val *= 1024;
        }
        return $this->fix_integer_overflow($val);
    }

    protected function validate($uploaded_file, $file, $error, $index) {
        if ($error) {
            $file->error = $this->get_error_message($error);
            return false;
        }
        $content_length = $this->fix_integer_overflow(intval(
            $this->get_server_var('CONTENT_LENGTH')
        ));
        $post_max_size = $this->get_config_bytes(ini_get('post_max_size'));
        if ($post_max_size && ($content_length > $post_max_size)) {
            $file->error = $this->get_error_message('post_max_size');
            return false;
        }
        if (!preg_match($this->options['accept_file_types'], $file->name)) {
            $file->error = $this->get_error_message('accept_file_types');
            return false;
        }
        if ($uploaded_file && is_uploaded_file($uploaded_file)) {
            $file_size = $this->get_file_size($uploaded_file);
        } else {
            $file_size = $content_length;
        }
        if ($this->options['max_file_size'] && (
                $file_size > $this->options['max_file_size'] ||
                $file->size > $this->options['max_file_size'])
            ) {
            $file->error = $this->get_error_message('max_file_size');
            return false;
        }
        if ($this->options['min_file_size'] &&
            $file_size < $this->options['min_file_size']) {
            $file->error = $this->get_error_message('min_file_size');
            return false;
        }
        if (is_int($this->options['max_number_of_files']) &&
                ($this->count_file_objects() >= $this->options['max_number_of_files']) &&
                // Ignore additional chunks of existing files:
                !is_file($this->get_upload_path($file->name))) {
            $file->error = $this->get_error_message('max_number_of_files');
            return false;
        }
        $max_width = @$this->options['max_width'];
        $max_height = @$this->options['max_height'];
        $min_width = @$this->options['min_width'];
        $min_height = @$this->options['min_height'];
        if (($max_width || $max_height || $min_width || $min_height)
           && preg_match($this->options['image_file_types'], $file->name)) {
            list($img_width, $img_height) = $this->get_image_size($uploaded_file);
        }
        if (!empty($img_width)) {
            if ($max_width && $img_width > $max_width) {
                $file->error = $this->get_error_message('max_width');
                return false;
            }
            if ($max_height && $img_height > $max_height) {
                $file->error = $this->get_error_message('max_height');
                return false;
            }
            if ($min_width && $img_width < $min_width) {
                $file->error = $this->get_error_message('min_width');
                return false;
            }
            if ($min_height && $img_height < $min_height) {
                $file->error = $this->get_error_message('min_height');
                return false;
            }
        }
        return true;
    }

    protected function upcount_name_callback($matches) {
        $index = isset($matches[1]) ? intval($matches[1]) + 1 : 1;
        $ext = isset($matches[2]) ? $matches[2] : '';
        return ' ('.$index.')'.$ext;
    }

    protected function upcount_name($name) {
        return preg_replace_callback(
            '/(?:(?: \(([\d]+)\))?(\.[^.]+))?$/',
            array($this, 'upcount_name_callback'),
            $name,
            1
        );
    }

    protected function get_unique_filename($file_path, $name, $size, $type, $error,
            $index, $content_range) {
        while(is_dir($this->get_upload_path($name))) {
            $name = $this->upcount_name($name);
        }
        // Keep an existing filename if this is part of a chunked upload:
        $uploaded_bytes = $this->fix_integer_overflow(intval($content_range[1]));
        while(is_file($this->get_upload_path($name))) {
            if ($uploaded_bytes === $this->get_file_size(
                    $this->get_upload_path($name))) {
                break;
            }
            $name = $this->upcount_name($name);
        }
        return $name;
    }

    protected function trim_file_name($file_path, $name, $size, $type, $error,
            $index, $content_range) {
        // Remove path information and dots around the filename, to prevent uploading
        // into different directories or replacing hidden system files.
        // Also remove control characters and spaces (\x00..\x20) around the filename:
        $name = trim(basename(stripslashes($name)), ".\x00..\x20");
        // Use a timestamp for empty filenames:
        if (!$name) {
            $name = str_replace('.', '-', microtime(true));
        }
        // Add missing file extension for known image types:
        if (strpos($name, '.') === false &&
                preg_match('/^image\/(gif|jpe?g|png)/', $type, $matches)) {
            $name .= '.'.$matches[1];
        }
        if (function_exists('exif_imagetype')) {
            switch(@exif_imagetype($file_path)){
                case IMAGETYPE_JPEG:
                    $extensions = array('jpg', 'jpeg');
                    break;
                case IMAGETYPE_PNG:
                    $extensions = array('png');
                    break;
                case IMAGETYPE_GIF:
                    $extensions = array('gif');
                    break;
            }
            // Adjust incorrect image file extensions:
            if (!empty($extensions)) {
                $parts = explode('.', $name);
                $extIndex = count($parts) - 1;
                $ext = strtolower(@$parts[$extIndex]);
                if (!in_array($ext, $extensions)) {
                    $parts[$extIndex] = $extensions[0];
                    $name = implode('.', $parts);
                }
            }
        }
        return $name;
    }

    protected function get_file_name($file_path, $name, $size, $type, $error,
            $index, $content_range) {
        return $this->get_unique_filename(
            $file_path,
            $this->trim_file_name($file_path, $name, $size, $type, $error,
                $index, $content_range),
            $size,
            $type,
            $error,
            $index,
            $content_range
        );
    }

    protected function handle_form_data($file, $index) {
        // Handle form data, e.g. $_REQUEST['description'][$index]
    }

    protected function get_scaled_image_file_paths($file_name, $version) {
        $file_path = $this->get_upload_path($file_name);
        if (!empty($version)) {
            $version_dir = $this->get_upload_path(null, $version);
            if (!is_dir($version_dir)) {
                mkdir($version_dir, $this->options['mkdir_mode'], true);
            }
            $new_file_path = $version_dir.'/'.$file_name;
        } else {
            $new_file_path = $file_path;
#                $imagen_original = $file_path;
#                $exif_data = $this->get_EXIF_JPEG( $file_path );
#				// this is the original file.
#				$imagen_logo = imagecreatefrompng("little_moose_v1.png");
#				// This is the imagen im embedding, a png file
#				$ancho_logo = imagesx($imagen_logo); //get width
#				$alto_logo = imagesy($imagen_logo); // get height
#				$imagen_dest = imagecreatefromjpeg($imagen_original);
#				// new image created
#				$ancho_dest = imagesx($imagen_dest); //get new image width
#				$alto_dest = imagesy($imagen_dest); //get new image height
#				$ancho_muestra = ($ancho_dest - $ancho_logo) - 20; // get the X position of the logo in the new image
#				$alto_muestra = ($alto_dest - $alto_logo) - 20; // get the Y position of the logo in the new image
#				imagecopyresized($imagen_dest,$imagen_logo,$ancho_muestra,$alto_muestra,0,0,$ancho_logo,$alto_logo,$ancho_logo,$alto_logo);
#				//create the new image with the logo embedded
#				imagejpeg($imagen_dest,$file_path,85);
#                //$jpeg_header_data = $this->get_jpeg_header_data( $file_path );
#                $jpeg_header_data = $this->put_EXIF_JPEG( $exif_data, $jpeg_header_data );
#                $this->debug_to_console( $jpeg_header_data );
#                $this->put_jpeg_header_data( $file_path, $file_path, $jpeg_header_data );
        }
        return array($file_path, $new_file_path);
    }

    protected function gd_get_image_object($file_path, $func, $no_cache = false) {
        if (empty($this->image_objects[$file_path]) || $no_cache) {
            $this->gd_destroy_image_object($file_path);
            $this->image_objects[$file_path] = $func($file_path);
        }
        return $this->image_objects[$file_path];
    }

    protected function gd_set_image_object($file_path, $image) {
        $this->gd_destroy_image_object($file_path);
        $this->image_objects[$file_path] = $image;
    }

    protected function gd_destroy_image_object($file_path) {
        $image = @$this->image_objects[$file_path];
        return $image && imagedestroy($image);
    }

    protected function gd_imageflip($image, $mode) {
        if (function_exists('imageflip')) {
            return imageflip($image, $mode);
        }
        $new_width = $src_width = imagesx($image);
        $new_height = $src_height = imagesy($image);
        $new_img = imagecreatetruecolor($new_width, $new_height);
        $src_x = 0;
        $src_y = 0;
        switch ($mode) {
            case '1': // flip on the horizontal axis
                $src_y = $new_height - 1;
                $src_height = -$new_height;
                break;
            case '2': // flip on the vertical axis
                $src_x  = $new_width - 1;
                $src_width = -$new_width;
                break;
            case '3': // flip on both axes
                $src_y = $new_height - 1;
                $src_height = -$new_height;
                $src_x  = $new_width - 1;
                $src_width = -$new_width;
                break;
            default:
                return $image;
        }
        imagecopyresampled(
            $new_img,
            $image,
            0,
            0,
            $src_x,
            $src_y,
            $new_width,
            $new_height,
            $src_width,
            $src_height
        );
        return $new_img;
    }

    protected function gd_orient_image($file_path, $src_img) {
        if (!function_exists('exif_read_data')) {
            return false;
        }
        $exif = @exif_read_data($file_path);
        if ($exif === false) {
            return false;
        }
        $orientation = intval(@$exif['Orientation']);
        if ($orientation < 2 || $orientation > 8) {
            return false;
        }
        switch ($orientation) {
            case 2:
                $new_img = $this->gd_imageflip(
                    $src_img,
                    defined('IMG_FLIP_VERTICAL') ? IMG_FLIP_VERTICAL : 2
                );
                break;
            case 3:
                $new_img = imagerotate($src_img, 180, 0);
                break;
            case 4:
                $new_img = $this->gd_imageflip(
                    $src_img,
                    defined('IMG_FLIP_HORIZONTAL') ? IMG_FLIP_HORIZONTAL : 1
                );
                break;
            case 5:
                $tmp_img = $this->gd_imageflip(
                    $src_img,
                    defined('IMG_FLIP_HORIZONTAL') ? IMG_FLIP_HORIZONTAL : 1
                );
                $new_img = imagerotate($tmp_img, 270, 0);
                imagedestroy($tmp_img);
                break;
            case 6:
                $new_img = imagerotate($src_img, 270, 0);
                break;
            case 7:
                $tmp_img = $this->gd_imageflip(
                    $src_img,
                    defined('IMG_FLIP_VERTICAL') ? IMG_FLIP_VERTICAL : 2
                );
                $new_img = imagerotate($tmp_img, 270, 0);
                imagedestroy($tmp_img);
                break;
            case 8:
                $new_img = imagerotate($src_img, 90, 0);
                break;
            default:
                return false;
        }
        $this->gd_set_image_object($file_path, $new_img);
        return true;
    }

    protected function gd_create_scaled_image($file_name, $version, $options) {
        if (!function_exists('imagecreatetruecolor')) {
            error_log('Function not found: imagecreatetruecolor');
            return false;
        }
        list($file_path, $new_file_path) =
            $this->get_scaled_image_file_paths($file_name, $version);
        $type = strtolower(substr(strrchr($file_name, '.'), 1));
        switch ($type) {
            case 'jpg':
            case 'jpeg':
                $src_func = 'imagecreatefromjpeg';
                $write_func = 'imagejpeg';
                $image_quality = isset($options['jpeg_quality']) ?
                    $options['jpeg_quality'] : 75;
                break;
            case 'gif':
                $src_func = 'imagecreatefromgif';
                $write_func = 'imagegif';
                $image_quality = null;
                break;
            case 'png':
                $src_func = 'imagecreatefrompng';
                $write_func = 'imagepng';
                $image_quality = isset($options['png_quality']) ?
                    $options['png_quality'] : 9;
                break;
            default:
                return false;
        }
        $src_img = $this->gd_get_image_object(
            $file_path,
            $src_func,
            !empty($options['no_cache'])
        );
        $image_oriented = false;
        if (!empty($options['auto_orient']) && $this->gd_orient_image(
                $file_path,
                $src_img
            )) {
            $image_oriented = true;
            $src_img = $this->gd_get_image_object(
                $file_path,
                $src_func
            );
        }
        $max_width = $img_width = imagesx($src_img);
        $max_height = $img_height = imagesy($src_img);
        if (!empty($options['max_width'])) {
            $max_width = $options['max_width'];
        }
        if (!empty($options['max_height'])) {
            $max_height = $options['max_height'];
        }
        $scale = min(
            $max_width / $img_width,
            $max_height / $img_height
        );
        if ($scale >= 1) {
            if ($image_oriented) {
                return $write_func($src_img, $new_file_path, $image_quality);
            }
            if ($file_path !== $new_file_path) {
                return copy($file_path, $new_file_path);
            }
            return true;
        }
        if (empty($options['crop'])) {
            $new_width = $img_width * $scale;
            $new_height = $img_height * $scale;
            $dst_x = 0;
            $dst_y = 0;
            $new_img = imagecreatetruecolor($new_width, $new_height);
        } else {
            if (($img_width / $img_height) >= ($max_width / $max_height)) {
                $new_width = $img_width / ($img_height / $max_height);
                $new_height = $max_height;
            } else {
                $new_width = $max_width;
                $new_height = $img_height / ($img_width / $max_width);
            }
            $dst_x = 0 - ($new_width - $max_width) / 2;
            $dst_y = 0 - ($new_height - $max_height) / 2;
            $new_img = imagecreatetruecolor($max_width, $max_height);
        }
        // Handle transparency in GIF and PNG images:
        switch ($type) {
            case 'gif':
            case 'png':
                imagecolortransparent($new_img, imagecolorallocate($new_img, 0, 0, 0));
            case 'png':
                imagealphablending($new_img, false);
                imagesavealpha($new_img, true);
                break;
        }
        $success = imagecopyresampled(
            $new_img,
            $src_img,
            $dst_x,
            $dst_y,
            0,
            0,
            $new_width,
            $new_height,
            $img_width,
            $img_height
        ) && $write_func($new_img, $new_file_path, $image_quality);
        $this->gd_set_image_object($file_path, $new_img);
        return $success;
    }

    protected function imagick_get_image_object($file_path, $no_cache = false) {
        if (empty($this->image_objects[$file_path]) || $no_cache) {
            $this->imagick_destroy_image_object($file_path);
            $image = new \Imagick();
            if (!empty($this->options['imagick_resource_limits'])) {
                foreach ($this->options['imagick_resource_limits'] as $type => $limit) {
                    $image->setResourceLimit($type, $limit);
                }
            }
            $image->readImage($file_path);
            $this->image_objects[$file_path] = $image;
        }
        return $this->image_objects[$file_path];
    }

    protected function imagick_set_image_object($file_path, $image) {
        $this->imagick_destroy_image_object($file_path);
        $this->image_objects[$file_path] = $image;
    }

    protected function imagick_destroy_image_object($file_path) {
        $image = @$this->image_objects[$file_path];
        return $image && $image->destroy();
    }

    protected function imagick_orient_image($image) {
        $orientation = $image->getImageOrientation();
        $background = new \ImagickPixel('none');
        switch ($orientation) {
            case \imagick::ORIENTATION_TOPRIGHT: // 2
                $image->flopImage(); // horizontal flop around y-axis
                break;
            case \imagick::ORIENTATION_BOTTOMRIGHT: // 3
                $image->rotateImage($background, 180);
                break;
            case \imagick::ORIENTATION_BOTTOMLEFT: // 4
                $image->flipImage(); // vertical flip around x-axis
                break;
            case \imagick::ORIENTATION_LEFTTOP: // 5
                $image->flopImage(); // horizontal flop around y-axis
                $image->rotateImage($background, 270);
                break;
            case \imagick::ORIENTATION_RIGHTTOP: // 6
                $image->rotateImage($background, 90);
                break;
            case \imagick::ORIENTATION_RIGHTBOTTOM: // 7
                $image->flipImage(); // vertical flip around x-axis
                $image->rotateImage($background, 270);
                break;
            case \imagick::ORIENTATION_LEFTBOTTOM: // 8
                $image->rotateImage($background, 270);
                break;
            default:
                return false;
        }
        $image->setImageOrientation(\imagick::ORIENTATION_TOPLEFT); // 1
        return true;
    }

    protected function imagick_create_scaled_image($file_name, $version, $options) {
        list($file_path, $new_file_path) =
            $this->get_scaled_image_file_paths($file_name, $version);
        $image = $this->imagick_get_image_object(
            $file_path,
            !empty($options['no_cache'])
        );
        if ($image->getImageFormat() === 'GIF') {
            // Handle animated GIFs:
            $images = $image->coalesceImages();
            foreach ($images as $frame) {
                $image = $frame;
                $this->imagick_set_image_object($file_name, $image);
                break;
            }
        }
        $image_oriented = false;
        if (!empty($options['auto_orient'])) {
            $image_oriented = $this->imagick_orient_image($image);
        }
        $new_width = $max_width = $img_width = $image->getImageWidth();
        $new_height = $max_height = $img_height = $image->getImageHeight();
        if (!empty($options['max_width'])) {
            $new_width = $max_width = $options['max_width'];
        }
        if (!empty($options['max_height'])) {
            $new_height = $max_height = $options['max_height'];
        }
        if (!($image_oriented || $max_width < $img_width || $max_height < $img_height)) {
            if ($file_path !== $new_file_path) {
                return copy($file_path, $new_file_path);
            }
            return true;
        }
        $crop = !empty($options['crop']);
        if ($crop) {
            $x = 0;
            $y = 0;
            if (($img_width / $img_height) >= ($max_width / $max_height)) {
                $new_width = 0; // Enables proportional scaling based on max_height
                $x = ($img_width / ($img_height / $max_height) - $max_width) / 2;
            } else {
                $new_height = 0; // Enables proportional scaling based on max_width
                $y = ($img_height / ($img_width / $max_width) - $max_height) / 2;
            }
        }
        $success = $image->resizeImage(
            $new_width,
            $new_height,
            isset($options['filter']) ? $options['filter'] : \imagick::FILTER_LANCZOS,
            isset($options['blur']) ? $options['blur'] : 1,
            $new_width && $new_height // fit image into constraints if not to be cropped
        );
        if ($success && $crop) {
            $success = $image->cropImage(
                $max_width,
                $max_height,
                $x,
                $y
            );
            if ($success) {
                $success = $image->setImagePage($max_width, $max_height, 0, 0);
            }
        }
        $type = strtolower(substr(strrchr($file_name, '.'), 1));
        switch ($type) {
            case 'jpg':
            case 'jpeg':
                if (!empty($options['jpeg_quality'])) {
                    $image->setImageCompression(\imagick::COMPRESSION_JPEG);
                    $image->setImageCompressionQuality($options['jpeg_quality']);
                }
                break;
        }
        if (!empty($options['strip'])) {
            $image->stripImage();
        }
        return $success && $image->writeImage($new_file_path);
    }

    protected function imagemagick_create_scaled_image($file_name, $version, $options) {
        list($file_path, $new_file_path) =
            $this->get_scaled_image_file_paths($file_name, $version);
        $resize = @$options['max_width']
            .(empty($options['max_height']) ? '' : 'X'.$options['max_height']);
        if (!$resize && empty($options['auto_orient'])) {
            if ($file_path !== $new_file_path) {
                return copy($file_path, $new_file_path);
            }
            return true;
        }
        $cmd = $this->options['convert_bin'];
        if (!empty($this->options['convert_params'])) {
            $cmd .= ' '.$this->options['convert_params'];
        }
        $cmd .= ' '.escapeshellarg($file_path);
        if (!empty($options['auto_orient'])) {
            $cmd .= ' -auto-orient';
        }
        if ($resize) {
            // Handle animated GIFs:
            $cmd .= ' -coalesce';
            if (empty($options['crop'])) {
                $cmd .= ' -resize '.escapeshellarg($resize.'>');
            } else {
                $cmd .= ' -resize '.escapeshellarg($resize.'^');
                $cmd .= ' -gravity center';
                $cmd .= ' -crop '.escapeshellarg($resize.'+0+0');
            }
            // Make sure the page dimensions are correct (fixes offsets of animated GIFs):
            $cmd .= ' +repage';
        }
        if (!empty($options['convert_params'])) {
            $cmd .= ' '.$options['convert_params'];
        }
        $cmd .= ' '.escapeshellarg($new_file_path);
        exec($cmd, $output, $error);
        if ($error) {
            error_log(implode('\n', $output));
            return false;
        }
        return true;
    }

    protected function get_image_size($file_path) {
        if ($this->options['image_library']) {
            if (extension_loaded('imagick')) {
                $image = new \Imagick();
                try {
                    if (@$image->pingImage($file_path)) {
                        $dimensions = array($image->getImageWidth(), $image->getImageHeight());
                        $image->destroy();
                        return $dimensions;
                    }
                    return false;
                } catch (Exception $e) {
                    error_log($e->getMessage());
                }
            }
            if ($this->options['image_library'] === 2) {
                $cmd = $this->options['identify_bin'];
                $cmd .= ' -ping '.escapeshellarg($file_path);
                exec($cmd, $output, $error);
                if (!$error && !empty($output)) {
                    // image.jpg JPEG 1920x1080 1920x1080+0+0 8-bit sRGB 465KB 0.000u 0:00.000
                    $infos = preg_split('/\s+/', $output[0]);
                    $dimensions = preg_split('/x/', $infos[2]);
                    return $dimensions;
                }
                return false;
            }
        }
        if (!function_exists('getimagesize')) {
            error_log('Function not found: getimagesize');
            return false;
        }
        return @getimagesize($file_path);
    }

    protected function create_scaled_image($file_name, $version, $options) {
        if ($this->options['image_library'] === 2) {
            return $this->imagemagick_create_scaled_image($file_name, $version, $options);
        }
        if ($this->options['image_library'] && extension_loaded('imagick')) {
            return $this->imagick_create_scaled_image($file_name, $version, $options);
        }
        return $this->gd_create_scaled_image($file_name, $version, $options);
    }

    protected function destroy_image_object($file_path) {
        if ($this->options['image_library'] && extension_loaded('imagick')) {
            return $this->imagick_destroy_image_object($file_path);
        }
    }

    protected function is_valid_image_file($file_path) {
        if (!preg_match($this->options['image_file_types'], $file_path)) {
            return false;
        }
        if (function_exists('exif_imagetype')) {
            return @exif_imagetype($file_path);
        }
        $image_info = $this->get_image_size($file_path);
        return $image_info && $image_info[0] && $image_info[1];
    }

    protected function handle_image_file($file_path, $file) {
        $failed_versions = array();
        foreach($this->options['image_versions'] as $version => $options) {
            if ($this->create_scaled_image($file->name, $version, $options)) {
                if (!empty($version)) {
                    $file->{$version.'Url'} = $this->get_download_url(
                        $file->name,
                        $version
                    );
                } else {
                    $file->size = $this->get_file_size($file_path, true);
                }
            } else {
                $failed_versions[] = $version ? $version : 'original';
            }
        }
        if (count($failed_versions)) {
            $file->error = $this->get_error_message('image_resize')
                    .' ('.implode($failed_versions,', ').')';
        }
        // Free memory:
        $this->destroy_image_object($file_path);
    }

    protected function handle_file_upload($uploaded_file, $name, $size, $type, $error,
            $index = null, $content_range = null) {
        $file = new \stdClass();
        $file->name = $this->get_file_name($uploaded_file, $name, $size, $type, $error,
            $index, $content_range);
        $file->size = $this->fix_integer_overflow(intval($size));
        $file->type = $type;
        if ($this->validate($uploaded_file, $file, $error, $index)) {
            $this->handle_form_data($file, $index);
            $upload_dir = $this->get_upload_path();
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, $this->options['mkdir_mode'], true);
            }
            $file_path = $this->get_upload_path($file->name);
            $append_file = $content_range && is_file($file_path) &&
                $file->size > $this->get_file_size($file_path);
            if ($uploaded_file && is_uploaded_file($uploaded_file)) {
                // multipart/formdata uploads (POST method uploads)
                if ($append_file) {
                    file_put_contents(
                        $file_path,
                        fopen($uploaded_file, 'r'),
                        FILE_APPEND
                    );
                } else {
                    move_uploaded_file($uploaded_file, $file_path);
                }
            } else {
                // Non-multipart uploads (PUT method support)
                file_put_contents(
                    $file_path,
                    fopen('php://input', 'r'),
                    $append_file ? FILE_APPEND : 0
                );
            }
            $file_size = $this->get_file_size($file_path, $append_file);
            if ($file_size === $file->size) {
                $file->url = $this->get_download_url($file->name);
                if ($this->is_valid_image_file($file_path)) {
                    $this->handle_image_file($file_path, $file);
                }
            } else {
                $file->size = $file_size;
                if (!$content_range && $this->options['discard_aborted_uploads']) {
                    unlink($file_path);
                    $file->error = $this->get_error_message('abort');
                }
            }
            $this->set_additional_file_properties($file);
        }
        return $file;
    }

    protected function readfile($file_path) {
        $file_size = $this->get_file_size($file_path);
        $chunk_size = $this->options['readfile_chunk_size'];
        if ($chunk_size && $file_size > $chunk_size) {
            $handle = fopen($file_path, 'rb');
            while (!feof($handle)) {
                echo fread($handle, $chunk_size);
                @ob_flush();
                @flush();
            }
            fclose($handle);
            return $file_size;
        }
        return readfile($file_path);
    }

    protected function body($str) {
        echo $str;
    }
    
    protected function header($str) {
        header($str);
    }

    protected function get_server_var($id) {
        return isset($_SERVER[$id]) ? $_SERVER[$id] : '';
    }

    protected function generate_response($content, $print_response = true) {
        if ($print_response) {
            $json = json_encode($content);
            $redirect = isset($_REQUEST['redirect']) ?
                stripslashes($_REQUEST['redirect']) : null;
            if ($redirect) {
                $this->header('Location: '.sprintf($redirect, rawurlencode($json)));
                return;
            }
            $this->head();
            if ($this->get_server_var('HTTP_CONTENT_RANGE')) {
                $files = isset($content[$this->options['param_name']]) ?
                    $content[$this->options['param_name']] : null;
                if ($files && is_array($files) && is_object($files[0]) && $files[0]->size) {
                    $this->header('Range: 0-'.(
                        $this->fix_integer_overflow(intval($files[0]->size)) - 1
                    ));
                }
            }
            $this->body($json);
        }
        return $content;
    }

    protected function get_version_param() {
        return isset($_GET['version']) ? basename(stripslashes($_GET['version'])) : null;
    }

    protected function get_singular_param_name() {
        return substr($this->options['param_name'], 0, -1);
    }

    protected function get_file_name_param() {
        $name = $this->get_singular_param_name();
        return isset($_REQUEST[$name]) ? basename(stripslashes($_REQUEST[$name])) : null;
    }

    protected function get_file_names_params() {
        $params = isset($_REQUEST[$this->options['param_name']]) ?
            $_REQUEST[$this->options['param_name']] : array();
        foreach ($params as $key => $value) {
            $params[$key] = basename(stripslashes($value));
        }
        return $params;
    }

    protected function get_file_type($file_path) {
        switch (strtolower(pathinfo($file_path, PATHINFO_EXTENSION))) {
            case 'jpeg':
            case 'jpg':
                return 'image/jpeg';
            case 'png':
                return 'image/png';
            case 'gif':
                return 'image/gif';
            default:
                return '';
        }
    }

    protected function download() {
        switch ($this->options['download_via_php']) {
            case 1:
                $redirect_header = null;
                break;
            case 2:
                $redirect_header = 'X-Sendfile';
                break;
            case 3:
                $redirect_header = 'X-Accel-Redirect';
                break;
            default:
                return $this->header('HTTP/1.1 403 Forbidden');
        }
        $file_name = $this->get_file_name_param();
        if (!$this->is_valid_file_object($file_name)) {
            return $this->header('HTTP/1.1 404 Not Found');
        }
        if ($redirect_header) {
            return $this->header(
                $redirect_header.': '.$this->get_download_url(
                    $file_name,
                    $this->get_version_param(),
                    true
                )
            );
        }
        $file_path = $this->get_upload_path($file_name, $this->get_version_param());
        // Prevent browsers from MIME-sniffing the content-type:
        $this->header('X-Content-Type-Options: nosniff');
        if (!preg_match($this->options['inline_file_types'], $file_name)) {
            $this->header('Content-Type: application/octet-stream');
            $this->header('Content-Disposition: attachment; filename="'.$file_name.'"');
        } else {
            $this->header('Content-Type: '.$this->get_file_type($file_path));
            $this->header('Content-Disposition: inline; filename="'.$file_name.'"');
        }
        $this->header('Content-Length: '.$this->get_file_size($file_path));
        $this->header('Last-Modified: '.gmdate('D, d M Y H:i:s T', filemtime($file_path)));
        $this->readfile($file_path);
    }

    protected function send_content_type_header() {
        $this->header('Vary: Accept');
        if (strpos($this->get_server_var('HTTP_ACCEPT'), 'application/json') !== false) {
            $this->header('Content-type: application/json');
        } else {
            $this->header('Content-type: text/plain');
        }
    }

    protected function send_access_control_headers() {
        $this->header('Access-Control-Allow-Origin: '.$this->options['access_control_allow_origin']);
        $this->header('Access-Control-Allow-Credentials: '
            .($this->options['access_control_allow_credentials'] ? 'true' : 'false'));
        $this->header('Access-Control-Allow-Methods: '
            .implode(', ', $this->options['access_control_allow_methods']));
        $this->header('Access-Control-Allow-Headers: '
            .implode(', ', $this->options['access_control_allow_headers']));
    }

    public function head() {
        $this->header('Pragma: no-cache');
        $this->header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->header('Content-Disposition: inline; filename="files.json"');
        // Prevent Internet Explorer from MIME-sniffing the content-type:
        $this->header('X-Content-Type-Options: nosniff');
        if ($this->options['access_control_allow_origin']) {
            $this->send_access_control_headers();
        }
        $this->send_content_type_header();
    }

    public function get($print_response = true) {
        if ($print_response && isset($_GET['download'])) {
            return $this->download();
        }
        $file_name = $this->get_file_name_param();
        if ($file_name) {
            $response = array(
                $this->get_singular_param_name() => $this->get_file_object($file_name)
            );
        } else {
            $response = array(
                $this->options['param_name'] => $this->get_file_objects()
            );
        }
        return $this->generate_response($response, $print_response);
    }

    public function post($print_response = true) {
        if (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'DELETE') {
            return $this->delete($print_response);
        }
        $upload = isset($_FILES[$this->options['param_name']]) ?
            $_FILES[$this->options['param_name']] : null;
        // Parse the Content-Disposition header, if available:
        $file_name = $this->get_server_var('HTTP_CONTENT_DISPOSITION') ?
            rawurldecode(preg_replace(
                '/(^[^"]+")|("$)/',
                '',
                $this->get_server_var('HTTP_CONTENT_DISPOSITION')
            )) : null;
        // Parse the Content-Range header, which has the following form:
        // Content-Range: bytes 0-524287/2000000
        $content_range = $this->get_server_var('HTTP_CONTENT_RANGE') ?
            preg_split('/[^0-9]+/', $this->get_server_var('HTTP_CONTENT_RANGE')) : null;
        $size =  $content_range ? $content_range[3] : null;
        $files = array();
        if ($upload && is_array($upload['tmp_name'])) {
            // param_name is an array identifier like "files[]",
            // $_FILES is a multi-dimensional array:
            foreach ($upload['tmp_name'] as $index => $value) {
                $files[] = $this->handle_file_upload(
                    $upload['tmp_name'][$index],
                    $file_name ? $file_name : $upload['name'][$index],
                    $size ? $size : $upload['size'][$index],
                    $upload['type'][$index],
                    $upload['error'][$index],
                    $index,
                    $content_range
                );
            }
        } else {
            // param_name is a single object identifier like "file",
            // $_FILES is a one-dimensional array:
            $files[] = $this->handle_file_upload(
                isset($upload['tmp_name']) ? $upload['tmp_name'] : null,
                $file_name ? $file_name : (isset($upload['name']) ?
                        $upload['name'] : null),
                $size ? $size : (isset($upload['size']) ?
                        $upload['size'] : $this->get_server_var('CONTENT_LENGTH')),
                isset($upload['type']) ?
                        $upload['type'] : $this->get_server_var('CONTENT_TYPE'),
                isset($upload['error']) ? $upload['error'] : null,
                null,
                $content_range
            );
        }
        return $this->generate_response(
            array($this->options['param_name'] => $files),
            $print_response
        );
    }

    public function delete($print_response = true) {
        $file_names = $this->get_file_names_params();
        if (empty($file_names)) {
            $file_names = array($this->get_file_name_param());
        }
        $response = array();
        foreach($file_names as $file_name) {
            //$file_path = $this->get_upload_path($file_name);
            $file_path = $_REQUEST['file'];
            //$file_path = '/home/sites/little-moose.ch/public_html/app/extensions/ImageUpload/files_uploaded/'.$file_name;
            //$file_path = $this->options['upload_dir'].$file_name;
            $success = is_file($file_path) && $file_name[0] !== '.' && unlink($file_path);
            if ($success) {
                foreach($this->options['image_versions'] as $version => $options) {
                    if (!empty($version)) {
                        $file = $this->get_upload_path($file_name, $version);
                        if (is_file($file)) {
                            unlink($file);
                        }
                    }
                }
            }
            $response[$file_name] = $success;
            $response['path'] = $file_path;
        }
        return $this->generate_response($response, $print_response);
    }

    function get_EXIF_JPEG( $filename )
    {
            // Change: Added as of version 1.11
            // Check if a wrapper is being used - these are not currently supported (see notes at top of file)
            if ( ( stristr ( $filename, "http://" ) != FALSE ) || ( stristr ( $filename, "ftp://" ) != FALSE ) )
            {
                    // A HTTP or FTP wrapper is being used - show a warning and abort
                    echo "HTTP and FTP wrappers are currently not supported with EXIF - See EXIF functionality documentation - a local file must be specified<br>";
                    echo "To work on an internet file, copy it locally to start with:<br><br>\n";
                    echo "\$newfilename = tempnam ( \$dir, \"tmpexif\" );<br>\n";
                    echo "copy ( \"http://whatever.com\", \$newfilename );<br><br>\n";
                    return FALSE;
            }
    
            // get the JPEG headers
            $jpeg_header_data = $this->get_jpeg_header_data( $filename );
    
    
            // Flag that an EXIF segment has not been found yet
            $EXIF_Location = -1;
    
            //Cycle through the header segments
            for( $i = 0; $i < count( $jpeg_header_data ); $i++ )
            {
                    // If we find an APP1 header,
                    if ( strcmp ( $jpeg_header_data[$i]['SegName'], "APP1" ) == 0 )
                    {
                            // And if it has the EXIF label,
                            if ( ( strncmp ( $jpeg_header_data[$i]['SegData'], "Exif\x00\x00", 6) == 0 ) ||
                                 ( strncmp ( $jpeg_header_data[$i]['SegData'], "Exif\x00\xFF", 6) == 0 ) )          // For some reason, some files have a faulty EXIF name which has a 0xFF in it
                            {
                                    // Save the location of the EXIF segment
                                    $EXIF_Location = $i;
                            }
                    }
    
            }
    
            // Check if an EXIF segment was found
            if ( $EXIF_Location == -1 )
            {
                    // Couldn't find any EXIF block to decode
                    return FALSE;
            }
    
            $filehnd = @fopen($filename, 'rb');
    
            // Check if the file opened successfully
            if ( ! $filehnd  )
            {
                    // Could't open the file - exit
                    echo "<p>Could not open file $filename</p>\n";
                    return FALSE;
            }
    
            fseek( $filehnd, $jpeg_header_data[$EXIF_Location]['SegDataStart'] + 6  );
    
            // Decode the Exif segment into an array and return it
            $exif_data = $this->process_TIFF_Header( $filehnd, "TIFF" );
    
    
    
            // Close File
            fclose($filehnd);
            return $exif_data;
    }
    
    /******************************************************************************
    * End of Function:     get_EXIF_JPEG
    ******************************************************************************/
    
    
    
    /******************************************************************************
    *
    * Function:     put_EXIF_JPEG
    *
    * Description:  Stores information into a Exchangeable Image File Format (EXIF)
    *               APP1 segment from an EXIF array.
    *
    *               WARNING: Because the EXIF standard allows pointers to data
    *               outside the APP1 segment, if there are any such pointers in
    *               a makernote, this function will DAMAGE them since it will not
    *               be aware that there is an external pointer. This will often
    *               happen with Makernotes that include an embedded thumbnail.
    *               This damage could be prevented where makernotes can be decoded,
    *               but currently this is not implemented.
    *
    *
    * Parameters:   exif_data - The array of EXIF data to insert into the JPEG header
    *               jpeg_header_data - The JPEG header into which the EXIF data
    *                                  should be stored, as from get_jpeg_header_data
    *
    * Returns:      jpeg_header_data - JPEG header array with the EXIF segment inserted
    *               FALSE - If an error occured
    *
    ******************************************************************************/
    
    function put_EXIF_JPEG( $exif_data, $jpeg_header_data )
    {
            // pack the EXIF data into its proper format for a JPEG file
            $packed_data = $this->get_TIFF_Packed_Data( $exif_data );
            if ( $packed_data === FALSE )
            {
                    return $jpeg_header_data;
            }
    
            $packed_data = "Exif\x00\x00$packed_data";
    
            //Cycle through the header segments
            for( $i = 0; $i < count( $jpeg_header_data ); $i++ )
            {
                    // If we find an APP1 header,
                    if ( strcmp ( $jpeg_header_data[$i]['SegName'], "APP1" ) == 0 )
                    {
                            // And if it has the EXIF label,
                            if ( ( strncmp ( $jpeg_header_data[$i]['SegData'], "Exif\x00\x00", 6) == 0 ) ||
                                 ( strncmp ( $jpeg_header_data[$i]['SegData'], "Exif\x00\xFF", 6) == 0 ) )          // For some reason, some files have a faulty EXIF name which has a 0xFF in it
                            {
                                    // Found a preexisting EXIF block - Replace it with the new one and return.
                                    $jpeg_header_data[$i]['SegData'] = $packed_data;
                                    return $jpeg_header_data;
                            }
                    }
            }
    
            // No preexisting segment segment found, insert a new one at the start of the header data.
    
            // Determine highest position of an APP segment at or below APP3, so we can put the
            // new APP3 at this position
    
    
            $highest_APP = -1;
    
            //Cycle through the header segments
            for( $i = 0; $i < count( $jpeg_header_data ); $i++ )
            {
                    // Check if we have found an APP segment at or below APP3,
                    if ( ( $jpeg_header_data[$i]['SegType'] >= 0xE0 ) && ( $jpeg_header_data[$i]['SegType'] <= 0xE3 ) )
                    {
                            // Found an APP segment at or below APP12
                            $highest_APP = $i;
                    }
            }
    
            // No preexisting EXIF block found, insert a new one at the start of the header data.
            array_splice($jpeg_header_data, $highest_APP + 1 , 0, array( array(   "SegType" => 0xE1,
                                                                                  "SegName" => "APP1",
                                                                                  "SegDesc" => $GLOBALS[ "JPEG_Segment_Descriptions" ][ 0xE1 ],
                                                                                  "SegData" => $packed_data ) ) );
            return $jpeg_header_data;
    
    }
    
    /******************************************************************************
    * End of Function:     put_EXIF_JPEG
    ******************************************************************************/
    
    
    
    
    /******************************************************************************
    *
    * Function:     get_Meta_JPEG
    *
    * Description:  Retrieves information from a Meta APP3 segment and returns it
    *               in an array. Uses information supplied by the
    *               get_jpeg_header_data function.
    *               The Meta segment has the same format as an EXIF segment, but
    *               uses different tags
    *
    * Parameters:   filename - the filename of the JPEG image to process
    *
    * Returns:      OutputArray - Array of Meta records
    *               FALSE - If an error occured in decoding
    *
    ******************************************************************************/
    
    function get_Meta_JPEG( $filename )
    {
            // Change: Added as of version 1.11
            // Check if a wrapper is being used - these are not currently supported (see notes at top of file)
            if ( ( stristr ( $filename, "http://" ) != FALSE ) || ( stristr ( $filename, "ftp://" ) != FALSE ) )
            {
                    // A HTTP or FTP wrapper is being used - show a warning and abort
                    echo "HTTP and FTP wrappers are currently not supported with Meta - See EXIF/Meta functionality documentation - a local file must be specified<br>";
                    echo "To work on an internet file, copy it locally to start with:<br><br>\n";
                    echo "\$newfilename = tempnam ( \$dir, \"tmpmeta\" );<br>\n";
                    echo "copy ( \"http://whatever.com\", \$newfilename );<br><br>\n";
                    return FALSE;
            }
    
            // get the JPEG headers
            $jpeg_header_data = get_jpeg_header_data( $filename );
    
    
            // Flag that an Meta segment has not been found yet
            $Meta_Location = -1;
    
            //Cycle through the header segments
            for( $i = 0; $i < count( $jpeg_header_data ); $i++ )
            {
                    // If we find an APP3 header,
                    if  ( strcmp ( $jpeg_header_data[$i]['SegName'], "APP3" ) == 0 )
                    {
                            // And if it has the Meta label,
                            if ( ( strncmp ( $jpeg_header_data[$i]['SegData'], "Meta\x00\x00", 6) == 0 ) ||
                                 ( strncmp ( $jpeg_header_data[$i]['SegData'], "META\x00\x00", 6) == 0 ) )
                            {
                                    // Save the location of the Meta segment
                                    $Meta_Location = $i;
                            }
                    }
            }
    
            // Check if an EXIF segment was found
            if ( $Meta_Location == -1 )
            {
                    // Couldn't find any Meta block to decode
                    return FALSE;
            }
    
    
            $filehnd = @fopen($filename, 'rb');
    
            // Check if the file opened successfully
            if ( ! $filehnd  )
            {
                    // Could't open the file - exit
                    echo "<p>Could not open file $filename</p>\n";
                    return FALSE;
            }
    
            fseek( $filehnd, $jpeg_header_data[$Meta_Location]['SegDataStart'] + 6 );
    
            // Decode the Meta segment into an array and return it
            $meta = process_TIFF_Header( $filehnd, "Meta" );
    
             // Close File
            fclose($filehnd);
    
            return $meta;
    }
    
    /******************************************************************************
    * End of Function:     get_Meta
    ******************************************************************************/
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     put_Meta_JPEG
    *
    * Description:  Stores information into a Meta APP3 segment from a Meta array.
    *
    *
    *               WARNING: Because the Meta (EXIF) standard allows pointers to data
    *               outside the APP1 segment, if there are any such pointers in
    *               a makernote, this function will DAMAGE them since it will not
    *               be aware that there is an external pointer. This will often
    *               happen with Makernotes that include an embedded thumbnail.
    *               This damage could be prevented where makernotes can be decoded,
    *               but currently this is not implemented.
    *
    *
    * Parameters:   meta_data - The array of Meta data to insert into the JPEG header
    *               jpeg_header_data - The JPEG header into which the Meta data
    *                                  should be stored, as from get_jpeg_header_data
    *
    * Returns:      jpeg_header_data - JPEG header array with the Meta segment inserted
    *               FALSE - If an error occured
    *
    ******************************************************************************/
    
    function put_Meta_JPEG( $meta_data, $jpeg_header_data )
    {
            // pack the Meta data into its proper format for a JPEG file
            $packed_data = get_TIFF_Packed_Data( $meta_data );
            if ( $packed_data === FALSE )
            {
                    return $jpeg_header_data;
            }
    
            $packed_data = "Meta\x00\x00$packed_data";
    
            //Cycle through the header segments
            for( $i = 0; $i < count( $jpeg_header_data ); $i++ )
            {
                    // If we find an APP1 header,
                    if ( strcmp ( $jpeg_header_data[$i]['SegName'], "APP3" ) == 0 )
                    {
                            // And if it has the Meta label,
                            if ( ( strncmp ( $jpeg_header_data[$i]['SegData'], "Meta\x00\x00", 6) == 0 ) ||
                                 ( strncmp ( $jpeg_header_data[$i]['SegData'], "META\x00\x00", 6) == 0 ) )
                            {
                                    // Found a preexisting Meta block - Replace it with the new one and return.
                                    $jpeg_header_data[$i]['SegData'] = $packed_data;
                                    return $jpeg_header_data;
                            }
                    }
            }
            // No preexisting segment segment found, insert a new one at the start of the header data.
    
            // Determine highest position of an APP segment at or below APP3, so we can put the
            // new APP3 at this position
    
    
            $highest_APP = -1;
    
            //Cycle through the header segments
            for( $i = 0; $i < count( $jpeg_header_data ); $i++ )
            {
                    // Check if we have found an APP segment at or below APP3,
                    if ( ( $jpeg_header_data[$i]['SegType'] >= 0xE0 ) && ( $jpeg_header_data[$i]['SegType'] <= 0xE3 ) )
                    {
                            // Found an APP segment at or below APP12
                            $highest_APP = $i;
                    }
            }
    
            // No preexisting Meta block found, insert a new one at the start of the header data.
            array_splice($jpeg_header_data, $highest_APP + 1 , 0, array( array(     "SegType" => 0xE3,
                                                                                    "SegName" => "APP3",
                                                                                    "SegDesc" => $GLOBALS[ "JPEG_Segment_Descriptions" ][ 0xE1 ],
                                                                                    "SegData" => $packed_data ) ) );
            return $jpeg_header_data;
    
    }
    
    /******************************************************************************
    * End of Function:     put_Meta_JPEG
    ******************************************************************************/
    
    
    
    /******************************************************************************
    *
    * Function:     get_EXIF_TIFF
    *
    * Description:  Retrieves information from a Exchangeable Image File Format (EXIF)
    *               within a TIFF file and returns it in an array.
    *
    * Parameters:   filename - the filename of the TIFF image to process
    *
    * Returns:      OutputArray - Array of EXIF records
    *               FALSE - If an error occured in decoding
    *
    ******************************************************************************/
    
    function get_EXIF_TIFF( $filename )
    {
            // Change: Added as of version 1.11
            // Check if a wrapper is being used - these are not currently supported (see notes at top of file)
            if ( ( stristr ( $filename, "http://" ) != FALSE ) || ( stristr ( $filename, "ftp://" ) != FALSE ) )
            {
                    // A HTTP or FTP wrapper is being used - show a warning and abort
                    echo "HTTP and FTP wrappers are currently not supported with TIFF - See EXIF/TIFF functionality documentation - a local file must be specified<br>";
                    echo "To work on an internet file, copy it locally to start with:<br><br>\n";
                    echo "\$newfilename = tempnam ( \$dir, \"tmptiff\" );<br>\n";
                    echo "copy ( \"http://whatever.com\", \$newfilename );<br><br>\n";
                    return FALSE;
            }
    
    
            $filehnd = @fopen($filename, 'rb');
    
            // Check if the file opened successfully
            if ( ! $filehnd  )
            {
                    // Could't open the file - exit
                    echo "<p>Could not open file $filename</p>\n";
                    return FALSE;
            }
    
            // Decode the Exif segment into an array and return it
            $exif_data = process_TIFF_Header( $filehnd, "TIFF" );
    
            // Close File
            fclose($filehnd);
            return $exif_data;
    }
    
    /******************************************************************************
    * End of Function:     get_EXIF_TIFF
    ******************************************************************************/
    
    
    
    
    /******************************************************************************
    *
    * Function:     Interpret_EXIF_to_HTML
    *
    * Description:  Generates html detailing the contents an APP1 EXIF array
    *               which was retrieved with a get_EXIF_.... function.
    *               Can also be used for APP3 Meta arrays.
    *
    * Parameters:   Exif_array - the EXIF array,as read from get_EXIF_....
    *               filename - the name of the Image file being processed ( used
    *                          by scripts which displays EXIF thumbnails)
    *
    * Returns:      output_str - A string containing the HTML
    *
    ******************************************************************************/
    
    function Interpret_EXIF_to_HTML( $Exif_array, $filename )
    {
            // Create the string to receive the html output
            $output_str = "";
    
            // Check if the array to process is valid
            if ( $Exif_array === FALSE )
            {
                    // Exif Array is not valid - abort processing
                    return $output_str;
            }
    
            // Ouput the heading according to what type of tags were used in processing
            if ( $Exif_array[ 'Tags Name' ] == "TIFF" )
            {
                    $output_str .= "<h2 class=\"EXIF_Main_Heading\">Contains Exchangeable Image File Format (EXIF) Information</h2>\n";
            }
            else if ( $Exif_array[ 'Tags Name' ] == "Meta" )
            {
                    $output_str .= "<h2 class=\"EXIF_Main_Heading\">Contains META Information (APP3)</h2>\n";
            }
            else
            {
                    $output_str .= "<h2 class=\"EXIF_Main_Heading\">Contains " . $Exif_array[ 'Tags Name' ] . " Information</h2>\n";
            }
    
    
            // Check that there are actually items to process in the array
            if ( count( $Exif_array ) < 1 )
            {
                    // No items to process in array - abort processing
                    return $output_str;
            }
    
            // Output secondary heading
            $output_str .= "<h3 class=\"EXIF_Secondary_Heading\">Main Image Information</h2>\n";
    
            // Interpret the zeroth IFD to html
            $output_str .= interpret_IFD( $Exif_array[0], $filename, $Exif_array['Byte_Align'] );
    
            // Check if there is a first IFD to process
            if ( array_key_exists( 1, $Exif_array ) )
            {
                    // There is a first IFD for a thumbnail
                    // Add a heading for it to the output
                    $output_str .= "<h3 class=\"EXIF_Secondary_Heading\">Thumbnail Information</h2>\n";
    
                    // Interpret the IFD to html and add it to the output
                    $output_str .= interpret_IFD( $Exif_array[1], $filename, $Exif_array['Byte_Align'] );
            }
    
            // Cycle through any other IFD's
            $i = 2;
            while ( array_key_exists( $i, $Exif_array ) )
            {
                    // Add a heading for the IFD
                    $output_str .= "<h3  class=\"EXIF_Secondary_Heading\">Image File Directory (IFD) $i Information</h2>\n";
    
                    // Interpret the IFD to html and add it to the output
                    $output_str .= interpret_IFD( $Exif_array[$i], $filename, $Exif_array['Byte_Align'] );
                    $i++;
            }
    
            // Return the resulting HTML
            return $output_str;
    }
    
    /******************************************************************************
    * End of Function:     Interpret_EXIF_to_HTML
    ******************************************************************************/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /******************************************************************************
    *
    *         INTERNAL FUNCTIONS
    *
    ******************************************************************************/
    
    
    
    
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Internal Function:     get_TIFF_Packed_Data
    *
    * Description:  Packs TIFF IFD data from EXIF or Meta into a form ready for
    *               either a JPEG EXIF/Meta segment or a TIFF file
    *               This function attempts to protect the contents of an EXIF makernote,
    *               by ensuring that it remains in the same position relative to the
    *               TIFF header
    *
    * Parameters:   tiff_data - the EXIF array,as read from get_EXIF_JPEG or get_Meta_JPEG
    *
    * Returns:      packed_data - A string containing packed segment
    *
    ******************************************************************************/
    
    function get_TIFF_Packed_Data( $tiff_data )
    {
            // Check that the segment is valid
            if ( $tiff_data === FALSE )
            {
                    return FALSE;
            }
    
            // Get the byte alignment
            $Byte_Align = $tiff_data['Byte_Align'];
    
            // Add the Byte Alignment to the Packed data
            $packed_data = $Byte_Align;
    
            // Add the TIFF ID to the Packed Data
            $packed_data .= $this->put_IFD_Data_Type( 42, 3, $Byte_Align );
    
            // Create a string for the makernote
            $makernote = "";
    
            // Check if the makernote exists
            if ( $tiff_data[ 'Makernote_Tag' ] !== FALSE )
            {
                    // A makernote exists - We need to ensure that it stays in the same position as it was
                    // Put the Makernote before any of the IFD's by padding zeros to the correct offset
                    $makernote .= str_repeat("\x00",( $tiff_data[ 'Makernote_Tag' ][ 'Offset' ] - 8 ) );
                    $makernote .= $tiff_data[ 'Makernote_Tag' ]['Data'];
            }
    
            // Calculage where the zeroth ifd will be
            $ifd_offset = strlen( $makernote ) + 8;
    
            // Add the Zeroth IFD pointer to the packed data
            $packed_data .= $this->put_IFD_Data_Type( $ifd_offset, 4, $Byte_Align );
    
            // Add the makernote to the packed data (if there was one)
            $packed_data .= $makernote;
    
            //Add the IFD's to the packed data
            $packed_data .= $this->get_IFD_Array_Packed_Data( $tiff_data, $ifd_offset, $Byte_Align );
    
            // Return the result
            return $packed_data;
    }
    
    /******************************************************************************
    * End of Function:     get_TIFF_Packed_Data
    ******************************************************************************/
    
    
    
    
    /******************************************************************************
    *
    * Internal Function:     get_IFD_Array_Packed_Data
    *
    * Description:  Packs a chain of IFD's from EXIF or Meta segments into a form
    *               ready for either a JPEG EXIF/Meta segment or a TIFF file
    *
    * Parameters:   ifd_data - the IFD chain array, as read from get_EXIF_JPEG or get_Meta_JPEG
    *               Zero_IFD_offset - The offset to the first IFD from the start of the TIFF header
    *               Byte_Align - the Byte alignment to use - "MM" or "II"
    *
    * Returns:      packed_data - A string containing packed IFD's
    *
    ******************************************************************************/
    
    function get_IFD_Array_Packed_Data( $ifd_data, $Zero_IFD_offset, $Byte_Align )
    {
            // Create a string to receive the packed output
            $packed_data = "";
    
            // Count the IFDs
            $ifd_count = 0;
            foreach( $ifd_data as $key => $IFD )
            {
                    // Make sure we only count the IFD's, not other information keys
                    if ( is_numeric( $key ) )
                    {
                            $ifd_count++;
                    }
            }
    
    
            // Cycle through each IFD,
            for ( $ifdno = 0; $ifdno < $ifd_count; $ifdno++ )
            {
                    // Check if this IFD is the last one
                    if ( $ifdno == $ifd_count - 1 )
                    {
                            // This IFD is the last one, get it's packed data
                            $packed_data .= $this->get_IFD_Packed_Data( $ifd_data[ $ifdno ], $Zero_IFD_offset +strlen($packed_data), $Byte_Align, FALSE );
                    }
                    else
                    {
                            // This IFD is NOT the last one, get it's packed data
                            $packed_data .= $this->get_IFD_Packed_Data( $ifd_data[ $ifdno ], $Zero_IFD_offset +strlen($packed_data), $Byte_Align, TRUE );
                    }
    
            }
    
            // Return the packed output
            return $packed_data;
    }
    
    /******************************************************************************
    * End of Function:     get_IFD_Array_Packed_Data
    ******************************************************************************/
    
    
    
    /******************************************************************************
    *
    * Internal Function:     get_IFD_Packed_Data
    *
    * Description:  Packs an IFD from EXIF or Meta segments into a form
    *               ready for either a JPEG EXIF/Meta segment or a TIFF file
    *
    * Parameters:   ifd_data - the IFD chain array, as read from get_EXIF_JPEG or get_Meta_JPEG
    *               IFD_offset - The offset to the IFD from the start of the TIFF header
    *               Byte_Align - the Byte alignment to use - "MM" or "II"
    *               Another_IFD - boolean - false if this is the last IFD in the chain
    *                                     - true if it is not the last
    *
    * Returns:      packed_data - A string containing packed IFD's
    *
    ******************************************************************************/
    
    function get_IFD_Packed_Data( $ifd_data, $IFD_offset, $Byte_Align, $Another_IFD )
    {
    
            $ifd_body_str = "";
            $ifd_data_str = "";
    
            $Tag_Definitions_Name = $ifd_data[ 'Tags Name' ];
    
    
            // Count the Tags in this IFD
            $tag_count = 0;
            foreach( $ifd_data as $key => $tag )
            {
                    // Make sure we only count the Tags, not other information keys
                    if ( is_numeric( $key ) )
                    {
                            $tag_count++;
                    }
            }
    
            // Add the Tag count to the packed data
            $packed_data = $this->put_IFD_Data_Type( $tag_count, 3, $Byte_Align );
    
            // Calculate the total length of the IFD (without the offset data)
            $IFD_len = 2 + $tag_count * 12 + 4;
    
    
            // Cycle through each tag
            foreach( $ifd_data as $key => $tag )
            {
                    // Make sure this is a tag, not another information key
                    if ( is_numeric( $key ) )
                    {
    
                            // Add the tag number to the packed data
                            $ifd_body_str .= $this->put_IFD_Data_Type( $tag[ 'Tag Number' ], 3, $Byte_Align );
    
                            // Add the Data type to the packed data
                            $ifd_body_str .= $this->put_IFD_Data_Type( $tag['Data Type'], 3, $Byte_Align );
    
                            // Check if this is a Print Image Matching entry
                            if ( $tag['Type'] == "PIM" )
                            {
                                    // This is a Print Image Matching entry,
                                    // encode it
                                    $data = $this->Encode_PIM( $tag, $Byte_Align );
                            }
                                    // Check if this is a IPTC/NAA Record within the EXIF IFD
                            else if ( ( ( $Tag_Definitions_Name == "EXIF" ) || ( $Tag_Definitions_Name == "TIFF" ) ) &&
                                      ( $tag[ 'Tag Number' ] == 33723 ) )
                            {
                                    // This is a IPTC/NAA Record, encode it
                                    $data = $this->put_IPTC( $tag['Data'] );
                            }
                                    // Change: Check for embedded XMP as of version 1.11
                                    // Check if this is a XMP Record within the EXIF IFD
                            else if ( ( ( $Tag_Definitions_Name == "EXIF" ) || ( $Tag_Definitions_Name == "TIFF" ) ) &&
                                      ( $tag[ 'Tag Number' ] == 700 ) )
                            {
                                    // This is a XMP Record, encode it
                                    $data = $this->write_XMP_array_to_text( $tag['Data'] );
                            }
                                    // Change: Check for embedded IRB as of version 1.11
                                    // Check if this is a Photoshop IRB Record within the EXIF IFD
                            else if ( ( ( $Tag_Definitions_Name == "EXIF" ) || ( $Tag_Definitions_Name == "TIFF" ) ) &&
                                      ( $tag[ 'Tag Number' ] == 34377 ) )
                            {
                                    // This is a Photoshop IRB Record, encode it
                                    $data = $this->pack_Photoshop_IRB_Data( $tag['Data'] );
                            }
                                    // Exif Thumbnail Offset
                            else if ( ( $tag[ 'Tag Number' ] == 513 ) && ( $Tag_Definitions_Name == "TIFF" ) )
                            {
                                            // The Exif Thumbnail Offset is a pointer but of type Long, not Unknown
                                            // Hence we need to put the data into the packed string separately
                                            // Calculate the thumbnail offset
                                            $data_offset = $IFD_offset + $IFD_len + strlen($ifd_data_str);
    
                                            // Create the Offset for the IFD
                                            $data = $this->put_IFD_Data_Type( $data_offset, 4, $Byte_Align );
    
                                            // Store the thumbnail
                                            $ifd_data_str .= $tag['Data'];
                            }
                                    // Exif Thumbnail Length
                            else if ( ( $tag[ 'Tag Number' ] == 514 ) && ( $Tag_Definitions_Name == "TIFF" ) )
                            {
                                            // Encode the Thumbnail Length
                                            $data = $this->put_IFD_Data_Type( strlen($ifd_data[513]['Data']), 4, $Byte_Align );
                            }
                                    // Sub-IFD
                            else if ( $tag['Type'] == "SubIFD" )
                            {
                                            // This is a Sub-IFD
                                            // Calculate the offset to the start of the Sub-IFD
                                            $data_offset = $IFD_offset + $IFD_len + strlen($ifd_data_str);
                                            // Get the packed data for the IFD chain as the data for this tag
                                            $data = $this->get_IFD_Array_Packed_Data( $tag['Data'], $data_offset, $Byte_Align );
                            }
                            else
                            {
                                    // Not a special tag
    
                                    // Create a string to receive the data
                                    $data = "";
    
                                    // Check if this is a type Unknown tag
                                    if ( $tag['Data Type'] != 7 )
                                    {
                                            // NOT type Unknown
                                            // Cycle through each data value and add it to the data string
                                            foreach( $tag[ 'Data' ] as $data_val )
                                            {
                                                    $data .= $this->put_IFD_Data_Type( $data_val, $tag['Data Type'], $Byte_Align );
                                            }
                                    }
                                    else
                                    {
                                            // This is a type Unknown - just add the data as is to the data string
                                            $data .= $tag[ 'Data' ];
                                    }
                            }
    
                            // Pad the data string out to at least 4 bytes
                            $data = str_pad ( $data, 4, "\x00" );
    
    
                            // Check if the data type is an ASCII String or type Unknown
                            if ( ( $tag['Data Type'] == 2 ) || ( $tag['Data Type'] == 7 ) )
                            {
                                    // This is an ASCII String or type Unknown
                                    // Add the Length of the string to the packed data as the Count
                                    $ifd_body_str .= $this->put_IFD_Data_Type( strlen($data), 4, $Byte_Align );
                            }
                            else
                            {
                                    // Add the array count to the packed data as the Count
                                    $ifd_body_str .= $this->put_IFD_Data_Type( count($tag[ 'Data' ]), 4, $Byte_Align );
                            }
    
    
                            // Check if the data is over 4 bytes long
                            if ( strlen( $data ) > 4 )
                            {
                                    // Data is longer than 4 bytes - it needs to be offset
                                    // Check if this entry is the Maker Note
                                    if ( ( $Tag_Definitions_Name == "EXIF" ) && ( $tag[ 'Tag Number' ] == 37500 ) )
                                    {
                                            // This is the makernote - It will have already been stored
                                            // at its original offset to help preserve it
                                            // all we need to do is add the Offset to the IFD packed data
                                            $data_offset = $tag[ 'Offset' ];
    
                                            $ifd_body_str .= $this->put_IFD_Data_Type( $data_offset, 4, $Byte_Align );
                                    }
                                    else
                                    {
                                            // This is NOT the makernote
                                            // Calculate the data offset
                                            $data_offset = $IFD_offset + $IFD_len + strlen($ifd_data_str);
    
                                            // Add the offset to the IFD packed data
                                            $ifd_body_str .= $this->put_IFD_Data_Type( $data_offset, 4, $Byte_Align );
    
                                            // Add the data to the offset packed data
                                            $ifd_data_str .= $data;
                                    }
                            }
                            else
                            {
                                    // Data is less than or equal to 4 bytes - Add it to the packed IFD data as is
                                    $ifd_body_str .= $data;
                            }
    
                    }
            }
    
            // Assemble the IFD body onto the packed data
            $packed_data .= $ifd_body_str;
    
            // Check if there is another IFD after this one
            if( $Another_IFD === TRUE )
            {
                    // There is another IFD after this
                    // Calculate the Next-IFD offset so that it goes immediately after this IFD
                    $next_ifd_offset = $IFD_offset + $IFD_len + strlen($ifd_data_str);
            }
            else
            {
                    // There is NO IFD after this - indicate with offset=0
                    $next_ifd_offset = 0;
            }
    
            // Add the Next-IFD offset to the packed data
            $packed_data .= $this->put_IFD_Data_Type( $next_ifd_offset, 4, $Byte_Align );
    
            // Add the offset data to the packed data
            $packed_data .= $ifd_data_str;
    
            // Return the resulting packed data
            return $packed_data;
    }
    
    /******************************************************************************
    * End of Function:     get_IFD_Packed_Data
    ******************************************************************************/
    
    
    
    
    
    /******************************************************************************
    *
    * Internal Function:     process_TIFF_Header
    *
    * Description:  Decodes the information stored in a TIFF header and it's
    *               Image File Directories (IFD's). This information is returned
    *               in an array
    *
    * Parameters:   filehnd - The handle of a open image file, positioned at the
    *                          start of the TIFF header
    *               Tag_Definitions_Name - The name of the Tag Definitions group
    *                                      within the global array IFD_Tag_Definitions
    *
    *
    * Returns:      OutputArray - Array of IFD records
    *               FALSE - If an error occured in decoding
    *
    ******************************************************************************/
    
    function process_TIFF_Header( $filehnd, $Tag_Definitions_Name )
    {
    
    
            // Save the file position where the TIFF header starts, as offsets are relative to this position
            $Tiff_start_pos = ftell( $filehnd );
    
    
    
            // Read the eight bytes of the TIFF header
            $DataStr = $this->network_safe_fread( $filehnd, 8 );
    
            // Check that we did get all eight bytes
            if ( strlen( $DataStr ) != 8 )
            {
                    return FALSE;   // Couldn't read the TIFF header properly
            }
    
            $pos = 0;
            // First two bytes indicate the byte alignment - should be 'II' or 'MM'
            // II = Intel (LSB first, MSB last - Little Endian)
            // MM = Motorola (MSB first, LSB last - Big Endian)
            $Byte_Align = substr( $DataStr, $pos, 2 );
    
    
    
            // Check the Byte Align Characters for validity
            if ( ( $Byte_Align != "II" ) && ( $Byte_Align != "MM" ) )
            {
                    // Byte align field is invalid - we won't be able to decode file
                    return FALSE;
            }
    
            // Skip over the Byte Align field which was just read
            $pos += 2;
    
            // Next two bytes are TIFF ID - should be value 42 with the appropriate byte alignment
            $TIFF_ID = substr( $DataStr, $pos, 2 );
    
            if ( $this->get_IFD_Data_Type( $TIFF_ID, 3, $Byte_Align ) != 42 )
            {
                    // TIFF header ID not found
                    return FALSE;
            }
    
            // Skip over the TIFF ID field which was just read
            $pos += 2;
    
    
            // Next four bytes are the offset to the first IFD
            $offset_str = substr( $DataStr, $pos, 4 );
            $offset = $this->get_IFD_Data_Type( $offset_str, 4, $Byte_Align );
    
            // Done reading TIFF Header
    
    
            // Move to first IFD
    
            if ( fseek( $filehnd, $Tiff_start_pos + $offset ) !== 0 )
            {
                    // Error seeking to position of first IFD
                    return FALSE;
            }
    
    
    
            // Flag that a makernote has not been found yet
            $GLOBALS[ "Maker_Note_Tag" ] = FALSE;
    
            // Read the IFD chain into an array
            $Output_Array = $this->read_Multiple_IFDs( $filehnd, $Tiff_start_pos, $Byte_Align, $Tag_Definitions_Name );
    
            // Check if a makernote was found
            if ( $GLOBALS[ "Maker_Note_Tag" ] != FALSE )
            {
                    // Makernote was found - Process it
                    // The makernote needs to be processed after all other
                    // tags as it may require some of the other tags in order
                    // to be processed properly
                    $GLOBALS[ "Maker_Note_Tag" ] = $this->Read_Makernote_Tag( $GLOBALS[ "Maker_Note_Tag" ], $Output_Array, $filehnd );
    
            }
    
            $Output_Array[ 'Makernote_Tag' ] = $GLOBALS[ "Maker_Note_Tag" ];
    
            // Save the Name of the Tags used in the output array
            $Output_Array[ 'Tags Name' ] = $Tag_Definitions_Name;
    
    
    
            // Save the Byte alignment
            $Output_Array['Byte_Align'] = $Byte_Align;
    
    
            // Return the output array
            return $Output_Array ;
    }
    
    /******************************************************************************
    * End of Function:     process_TIFF_Header
    ******************************************************************************/
    
    
    
    
    
    
    /******************************************************************************
    *
    * Internal Function:     read_Multiple_IFDs
    *
    * Description:  Reads and interprets a chain of standard Image File Directories (IFD's),
    *               and returns the entries in an array. This chain is made up from IFD's
    *               which have a pointer to the next IFD. IFD's are read until the next
    *               pointer indicates there are no more
    *
    * Parameters:   filehnd - a handle for the image file being read, positioned at the
    *                         start of the IFD chain
    *               Tiff_offset - The offset of the TIFF header from the start of the file
    *               Byte_Align - either "MM" or "II" indicating Motorola or Intel Byte alignment
    *               Tag_Definitions_Name - The name of the Tag Definitions group within the global array IFD_Tag_Definitions
    *               local_offsets - True indicates that offset data should be interpreted as being relative to the start of the currrent entry
    *                               False (normal) indicates offests are relative to start of Tiff header as per IFD standard
    *               read_next_ptr - True (normal) indicates that a pointer to the next IFD should be read at the end of the IFD
    *                               False indicates that no pointer follows the IFD
    *
    *
    * Returns:      OutputArray - Array of IFD entries
    *
    ******************************************************************************/
    
    function read_Multiple_IFDs( $filehnd, $Tiff_offset, $Byte_Align, $Tag_Definitions_Name, $local_offsets = FALSE, $read_next_ptr = TRUE )
    {
            // Start at the offset of the first IFD
            $Next_Offset = 0;
    
            do
            {
                    // Read an IFD
                    list($IFD_Array , $Next_Offset) = $this->read_IFD_universal( $filehnd, $Tiff_offset, $Byte_Align, $Tag_Definitions_Name, $local_offsets, $read_next_ptr );
    
                    // Move to the position of the next IFD
                    if ( fseek( $filehnd, $Tiff_offset + $Next_Offset ) !== 0 )
                    {
                            // Error seeking to position of next IFD
                            echo "<p>Error: Corrupted EXIF</p>\n";
                            return FALSE;
                    }
    
                    $Output_Array[] = $IFD_Array;
    
    
            } while ( $Next_Offset != 0 );      // Until the Next IFD Offset is zero
    
    
            // return resulting array
    
            return $Output_Array ;
    }
    
    /******************************************************************************
    * End of Function:     read_Multiple_IFDs
    ******************************************************************************/
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Internal Function:     read_IFD_universal
    *
    * Description:  Reads and interprets a standard or Non-standard Image File
    *               Directory (IFD), and returns the entries in an array
    *
    * Parameters:   filehnd - a handle for the image file being read, positioned at the start
    *                         of the IFD
    *               Tiff_offset - The offset of the TIFF header from the start of the file
    *               Byte_Align - either "MM" or "II" indicating Motorola or Intel Byte alignment
    *               Tag_Definitions_Name - The name of the Tag Definitions group within the global array IFD_Tag_Definitions
    *               local_offsets - True indicates that offset data should be interpreted as being relative to the start of the currrent entry
    *                               False (normal) indicates offests are relative to start of Tiff header as per IFD standard
    *               read_next_ptr - True (normal) indicates that a pointer to the next IFD should be read at the end of the IFD
    *                               False indicates that no pointer follows the IFD
    *
    * Returns:      OutputArray - Array of IFD entries
    *               Next_Offset - Offset to next IFD (zero = no next IFD)
    *
    ******************************************************************************/
    
    function read_IFD_universal( $filehnd, $Tiff_offset, $Byte_Align, $Tag_Definitions_Name, $local_offsets = FALSE, $read_next_ptr = TRUE )
    {
            if ( ( $filehnd == NULL ) || ( feof( $filehnd ) ) )
            {
                    return array (FALSE , 0);
            }
    
            // Record the Name of the Tag Group used for this IFD in the output array
            $OutputArray[ 'Tags Name' ] = $Tag_Definitions_Name;
    
            // Record the offset of the TIFF header in the output array
            $OutputArray[ 'Tiff Offset' ] = $Tiff_offset;
    
            // First 2 bytes of IFD are number of entries in the IFD
            $No_Entries_str = $this->network_safe_fread( $filehnd, 2 );
            $No_Entries = $this->get_IFD_Data_Type( $No_Entries_str, 3, $Byte_Align );
    
    
            // If the data is corrupt, the number of entries may be huge, which will cause errors
            // This is often caused by a lack of a Next-IFD pointer
            if ( $No_Entries> 10000 )
            {
                    // Huge number of entries - abort
                    echo "<p>Error: huge number of EXIF entries - EXIF is probably Corrupted</p>\n";
    
                    return array ( FALSE , 0);
            }
    
            // If the data is corrupt or just stupid, the number of entries may zero,
            // Indicate this by returning false
            if ( $No_Entries === 0 )
            {
                    // No entries - abort
                    return array ( FALSE , 0);
            }
    
            // Save the file position where first IFD record starts as non-standard offsets
            // need to know this to calculate an absolute offset
            $IFD_first_rec_pos = ftell( $filehnd );
    
    
            // Read in the IFD structure
            $IFD_Data = $this->network_safe_fread( $filehnd, 12 * $No_Entries );
    
            // Check if the entire IFD was able to be read
            if ( strlen( $IFD_Data ) != (12 * $No_Entries) )
            {
                    // Couldn't read the IFD Data properly, Some Casio files have no Next IFD pointer, hence cause this error
                    echo "<p>Error: EXIF Corrupted</p>\n";
                    return array(FALSE, 0);
            }
    
    
            // Last 4 bytes of a standard IFD are the offset to the next IFD
            // Some NON-Standard IFD implementations do not have this, hence causing problems if it is read
    
            // If the Next IFD pointer has been requested to be read,
            if ( $read_next_ptr )
            {
                    // Read the pointer to the next IFD
    
                    $Next_Offset_str = $this->network_safe_fread( $filehnd, 4 );
                    $Next_Offset = $this->get_IFD_Data_Type( $Next_Offset_str, 4, $Byte_Align );
            }
            else
            {
                    // Otherwise set the pointer to zero ( no next IFD )
                    $Next_Offset = 0;
            }
    
    
    
            // Initialise current position to the start
            $pos = 0;
    
    
            // Loop for reading IFD entries
    
            for ( $i = 0; $i < $No_Entries; $i++ )
            {
                    // First 2 bytes of IFD entry are the tag number ( Unsigned Short )
                    $Tag_No_str = substr( $IFD_Data, $pos, 2 );
                    $Tag_No = $this->get_IFD_Data_Type( $Tag_No_str, 3, $Byte_Align );
                    $pos += 2;
    
                    // Next 2 bytes of IFD entry are the data format ( Unsigned Short )
                    $Data_Type_str = substr( $IFD_Data, $pos, 2 );
                    $Data_Type = $this->get_IFD_Data_Type( $Data_Type_str, 3, $Byte_Align );
                    $pos += 2;
    
                    // If Datatype is not between 1 and 12, then skip this entry, it is probably corrupted or custom
                    if (( $Data_Type > 12 ) || ( $Data_Type < 1 ) )
                    {
                            $pos += 8;
                            continue 1;  // Stop trying to process the tag any further and skip to the next one
                    }
    
                    // Next 4 bytes of IFD entry are the data count ( Unsigned Long )
                    $Data_Count_str = substr( $IFD_Data, $pos, 4 );
                    $Data_Count = $this->get_IFD_Data_Type( $Data_Count_str, 4, $Byte_Align );
                    $pos += 4;
    
                    if ( $Data_Count > 100000 )
                    {
                            echo "<p>Error: huge EXIF data count - EXIF is probably Corrupted</p>\n";
    
                            // Some Casio files have no Next IFD pointer, hence cause errors
    
                            return array ( FALSE , 0);
                    }
    
                    // Total Data size is the Data Count multiplied by the size of the Data Type
                    $Total_Data_Size = $GLOBALS['IFD_Data_Sizes'][ $Data_Type ] * $Data_Count;
    
                    $Data_Start_pos = -1;
    
                    // If the total data size is larger than 4 bytes, then the data part is the offset to the real data
                    if ( $Total_Data_Size > 4 )
                    {
                            // Not enough room for data - offset provided instead
                            $Data_Offset_str = substr( $IFD_Data, $pos, 4 );
                            $Data_Start_pos = $this->get_IFD_Data_Type( $Data_Offset_str, 4, $Byte_Align );
    
    
                            // In some NON-STANDARD makernotes, the offset is relative to the start of the current IFD entry
                            if ( $local_offsets )
                            {
                                    // This is a NON-Standard IFD, seek relative to the start of the current tag
                                    fseek( $filehnd, $IFD_first_rec_pos +  $pos - 8 + $Data_Start_pos );
                            }
                            else
                            {
                                    // This is a normal IFD, seek relative to the start of the TIFF header
                                    fseek( $filehnd, $Tiff_offset + $Data_Start_pos );
                            }
    
                            // Read the data block from the offset position
                            $DataStr = $this->network_safe_fread( $filehnd, $Total_Data_Size );
                    }
                    else
                    {
                            // The data block is less than 4 bytes, and is provided in the IFD entry, so read it
                            $DataStr = substr( $IFD_Data, $pos, $Total_Data_Size );
                    }
    
                    // Increment the position past the data
                    $pos += 4;
    
    
                    // Now create the entry for output array
    
                    $Data_Array = array( );
    
    
                    // Read the data items from the data block
    
                    if ( ( $Data_Type != 2 ) && ( $Data_Type != 7 ) )
                    {
                            // The data type is Numerical, Read the data items from the data block
                            for ( $j = 0; $j < $Data_Count; $j++ )
                            {
                                    $Part_Data_Str = substr( $DataStr, $j * $GLOBALS['IFD_Data_Sizes'][ $Data_Type ], $GLOBALS['IFD_Data_Sizes'][ $Data_Type ] );
                                    $Data_Array[] = $this->get_IFD_Data_Type( $Part_Data_Str, $Data_Type, $Byte_Align );
                            }
                    }
                    elseif ( $Data_Type == 2 )
                    {
                            // The data type is String(s)   (type 2)
    
                            // Strip the last terminating Null
                            $DataStr = substr( $DataStr, 0, strlen($DataStr)-1 );
    
                            // Split the data block into multiple strings whereever there is a Null
                            $Data_Array = explode( "\x00", $DataStr );
                    }
                    else
                    {
                            // The data type is Unknown (type 7)
                            // Do nothing to data
                            $Data_Array = $DataStr;
                    }
    
    
                    // If this is a Sub-IFD entry,
                    if ( ( array_key_exists( $Tag_No, $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name] ) ) &&
                         ( "SubIFD" == $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ]['Type'] ) )
                    {
                            // This is a Sub-IFD entry, go and process the data forming Sub-IFD and use its output array as the new data for this entry
                            fseek( $filehnd, $Tiff_offset + $Data_Array[0] );
                            $Data_Array = $this->read_Multiple_IFDs( $filehnd, $Tiff_offset, $Byte_Align, $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ]['Tags Name'] );
                    }
    
                    $desc = "";
                    $units = "";
    
                    // Check if this tag exists in the list of tag definitions,
    
                    if ( array_key_exists ( $Tag_No, $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name]) )
                    {
    
                            if ( array_key_exists ( 'Description', $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ] ) )
                            {
                                    $desc = $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ]['Description'];
                            }
    
                            if ( array_key_exists ( 'Units', $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ] ) )
                            {
                                    $units = $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ]['Units'];
                            }
    
                            // Tag exists in definitions, append details to output array
                            $OutputArray[ $Tag_No ] = array (       "Tag Number"      => $Tag_No,
                                                                    "Tag Name"        => $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ]['Name'],
                                                                    "Tag Description" => $desc,
                                                                    "Data Type"       => $Data_Type,
                                                                    "Type"            => $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag_No ]['Type'],
                                                                    "Units"           => $units,
                                                                    "Data"            => $Data_Array );
    
                    }
                    else
                    {
                            // Tag doesnt exist in definitions, append unknown details to output array
    
                            $OutputArray[ $Tag_No ] = array (       "Tag Number"      => $Tag_No,
                                                                    "Tag Name"        => "Unknown Tag #" . $Tag_No,
                                                                    "Tag Description" => "",
                                                                    "Data Type"       => $Data_Type,
                                                                    "Type"            => "Unknown",
                                                                    "Units"           => "",
                                                                    "Data"            => $Data_Array );
                    }
    
    
    
                    // Some information of type "Unknown" (type 7) might require information about
                    // how it's position and byte alignment in order to be decoded
                    if ( $Data_Type == 7 )
                    {
                            $OutputArray[ $Tag_No ]['Offset'] = $Data_Start_pos;
                            $OutputArray[ $Tag_No ]['Byte Align'] = $Byte_Align;
                    }
    
    
                    ////////////////////////////////////////////////////////////////////////
                    // Special Data handling
                    ////////////////////////////////////////////////////////////////////////
    
    
                    // Check if this is a Print Image Matching entry
                    if ( $OutputArray[ $Tag_No ]['Type'] == "PIM" )
                    {
                            // This is a Print Image Matching entry, decode it.
                            $OutputArray[ $Tag_No ] = $this->Decode_PIM( $OutputArray[ $Tag_No ], $Tag_Definitions_Name );
                    }
    
    
                    // Interpret the entry into a text string using a custom interpreter
                    $text_val = $this->get_Tag_Text_Value( $OutputArray[ $Tag_No ], $Tag_Definitions_Name );
    
                    // Check if a text string was generated
                    if ( $text_val !== FALSE )
                    {
                            // A string was generated, append it to the output array entry
                            $OutputArray[ $Tag_No ]['Text Value'] = $text_val;
                            $OutputArray[ $Tag_No ]['Decoded'] = TRUE;
                    }
                    else
                    {
                            // A string was NOT generated, append a generic string to the output array entry
                            $OutputArray[ $Tag_No ]['Text Value'] = $this->get_IFD_value_as_text( $OutputArray[ $Tag_No ] )  . " " . $units;
                            $OutputArray[ $Tag_No ]['Decoded'] = FALSE;
                    }
    
    
    
    
                    // Check if this entry is the Maker Note
                    if ( ( $Tag_Definitions_Name == "EXIF" ) && ( $Tag_No == 37500 ) )
                    {
    
                            // Save some extra information which will allow Makernote Decoding with the output array entry
                            $OutputArray[ $Tag_No ]['Offset'] = $Data_Start_pos;
                            $OutputArray[ $Tag_No ][ 'Tiff Offset' ] = $Tiff_offset;
                            $OutputArray[ $Tag_No ]['ByteAlign'] = $Byte_Align;
    
                            // Save a pointer to this entry for Maker note processing later
                            $GLOBALS[ "Maker_Note_Tag" ] = & $OutputArray[ $Tag_No ];
                    }
    
    
                    // Check if this is a IPTC/NAA Record within the EXIF IFD
                    if ( ( ( $Tag_Definitions_Name == "EXIF" ) || ( $Tag_Definitions_Name == "TIFF" ) ) &&
                         ( $Tag_No == 33723 ) )
                    {
                            // This is a IPTC/NAA Record, interpret it and put result in the data for this entry
                            $OutputArray[ $Tag_No ]['Data'] = $this->get_IPTC( $DataStr );
                            $OutputArray[ $Tag_No ]['Decoded'] = TRUE;
                    }
                    // Change: Check for embedded XMP as of version 1.11
                    // Check if this is a XMP Record within the EXIF IFD
                    if ( ( ( $Tag_Definitions_Name == "EXIF" ) || ( $Tag_Definitions_Name == "TIFF" ) ) &&
                         ( $Tag_No == 700 ) )
                    {
                            // This is a XMP Record, interpret it and put result in the data for this entry
                            $OutputArray[ $Tag_No ]['Data'] =  $this->read_XMP_array_from_text( $DataStr );
                            $OutputArray[ $Tag_No ]['Decoded'] = TRUE;
                    }
    
                    // Change: Check for embedded IRB as of version 1.11
                    // Check if this is a Photoshop IRB Record within the EXIF IFD
                    if ( ( ( $Tag_Definitions_Name == "EXIF" ) || ( $Tag_Definitions_Name == "TIFF" ) ) &&
                         ( $Tag_No == 34377 ) )
                    {
                            // This is a Photoshop IRB Record, interpret it and put result in the data for this entry
                            $OutputArray[ $Tag_No ]['Data'] = $this->unpack_Photoshop_IRB_Data( $DataStr );
                            $OutputArray[ $Tag_No ]['Decoded'] = TRUE;
                    }
    
                    // Exif Thumbnail
                    // Check that both the thumbnail length and offset entries have been processed,
                    // and that this is one of them
                    if ( ( ( ( $Tag_No == 513 ) && ( array_key_exists( 514, $OutputArray ) ) ) ||
                           ( ( $Tag_No == 514 ) && ( array_key_exists( 513, $OutputArray ) ) ) )  &&
                         ( $Tag_Definitions_Name == "TIFF" ) )
                    {
                            // Seek to the start of the thumbnail using the offset entry
                            fseek( $filehnd, $Tiff_offset + $OutputArray[513]['Data'][0] );
    
                            // Read the thumbnail data, and replace the offset data with the thumbnail
                            $OutputArray[513]['Data'] = $this->network_safe_fread( $filehnd, $OutputArray[514]['Data'][0] );
                    }
    
    
                    // Casio Thumbnail
                    // Check that both the thumbnail length and offset entries have been processed,
                    // and that this is one of them
                    if ( ( ( ( $Tag_No == 0x0004 ) && ( array_key_exists( 0x0003, $OutputArray ) ) ) ||
                           ( ( $Tag_No == 0x0003 ) && ( array_key_exists( 0x0004, $OutputArray ) ) ) )  &&
                         ( $Tag_Definitions_Name == "Casio Type 2" ) )
                    {
                            // Seek to the start of the thumbnail using the offset entry
                            fseek( $filehnd, $Tiff_offset + $OutputArray[0x0004]['Data'][0] );
    
                            // Read the thumbnail data, and replace the offset data with the thumbnail
                            $OutputArray[0x0004]['Data'] = $this->network_safe_fread( $filehnd, $OutputArray[0x0003]['Data'][0] );
                    }
    
                    // Minolta Thumbnail
                    // Check that both the thumbnail length and offset entries have been processed,
                    // and that this is one of them
                    if ( ( ( ( $Tag_No == 0x0088 ) && ( array_key_exists( 0x0089, $OutputArray ) ) ) ||
                           ( ( $Tag_No == 0x0089 ) && ( array_key_exists( 0x0088, $OutputArray ) ) ) )  &&
                         ( $Tag_Definitions_Name == "Olympus" ) )
                    {
    
                            // Seek to the start of the thumbnail using the offset entry
                            fseek( $filehnd, $Tiff_offset + $OutputArray[0x0088]['Data'][0] );
    
                            // Read the thumbnail data, and replace the offset data with the thumbnail
                            $OutputArray[0x0088]['Data'] = $this->network_safe_fread( $filehnd, $OutputArray[0x0089]['Data'][0] );
    
                            // Sometimes the minolta thumbnail data is empty (or the offset is corrupt, which results in the same thing)
    
                            // Check if the thumbnail data exists
                            if ( $OutputArray[0x0088]['Data'] != "" )
                            {
                                    // Thumbnail exists
    
                                    // Minolta Thumbnails are missing their first 0xFF for some reason,
                                    // which is replaced with some weird character, so fix this
                                    $OutputArray[0x0088]['Data']{0} = "\xFF";
                            }
                            else
                            {
                                    // Thumbnail doesnt exist - make it obvious
                                    $OutputArray[0x0088]['Data'] = FALSE;
                            }
                    }
    
            }
    
    
    
    
    
    
    
            // Return the array of IFD entries and the offset to the next IFD
    
            return array ($OutputArray , $Next_Offset);
    }
    
    
    
    /******************************************************************************
    * End of Function:     read_IFD_universal
    ******************************************************************************/
    
    
    
    
    
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Internal Function:     get_Tag_Text_Value
    *
    * Description:  Attempts to interpret an IFD entry into a text string using the
    *               information in the IFD_Tag_Definitions global array.
    *
    * Parameters:   Tag - The IFD entry to process
    *               Tag_Definitions_Name - The name of the tag definitions to use from within the IFD_Tag_Definitions global array
    *
    * Returns:      String - if the tag was successfully decoded into a text string
    *               FALSE - if the tag could not be decoded using the information
    *                       in the IFD_Tag_Definitions global array
    *
    ******************************************************************************/
    
    function get_Tag_Text_Value( $Tag, $Tag_Definitions_Name )
    {
            // Check what format the entry is specified as
    
            if ( $Tag['Type'] == "String" )
            {
                    // Format is Text String
    
                    // If "Unknown" (type 7) data type,
                    if ( $Tag['Data Type'] == 7 )
                    {
                            // Return data as is.
                            return $Tag['Data'];
                    }
                    else
                    {
                            // Otherwise return the default string value of the datatype
                            return $this->get_IFD_value_as_text( $Tag );
                    }
            }
            else if ( $Tag['Type'] == "Character Coded String" )
            {
                    // Format is Character Coded String (First 8 characters indicate coding scheme)
    
                    // Convert Data to a string
                    if ( $Tag['Data Type'] == 7 )
                    {
                            // If it is type "Unknown" (type 7) use data as is
                            $data =  $Tag['Data'];
                    }
                    else
                    {
                            // Otherwise use the default string value of the datatype
                            $data = $this->get_IFD_value_as_text( $Tag );
                    }
    
                    // Some implementations allow completely data with no Coding Scheme Name,
                    // so we need to handle this to avoid errors
                    if ( trim( $data ) == "" )
                    {
                            return "";
                    }
    
                    // Extract the Coding Scheme Name from the first 8 characters
                    $char_code = substr( $data, 0, 8 );
    
                    // Extract the Data part from after the first 8 characters
                    $characters = substr( $data, 8 );
    
                    // Check coding scheme and interpret as neccessary
    
                    if ( $char_code === "ASCII\x00\x00\x00" )
                    {
                            // ASCII coding - return data as is.
                            return $characters;
                    }
                    elseif ( ( $char_code === "UNICODE\x00" ) ||
                             ( $char_code === "Unicode\x00" ) )             // Note lowercase is non standard
                    {
                            // Unicode coding - interpret and return result.
                            return $this->xml_UTF16_clean( $characters, TRUE );
                    }
                    else
                    {
                            // Unknown coding - return string indicating this
                            return "Unsupported character coding : \"$char_code\"\n\"" . trim($characters) . "\"";
                    }
                    break;
            }
            else if ( $Tag['Type'] == "Numeric" )
            {
                    // Format is numeric - return default text value with any required units text appended
                    if ( array_key_exists ( 'Units', $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag["Tag Number"] ] ) )
                    {
                            $units = $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag["Tag Number"] ]['Units'];
                    }
                    else
                    {
                            $units = "";
                    }
                    return $this->get_IFD_value_as_text( $Tag )  . " " . $units;
            }
            else if  ( $Tag['Type'] == "Lookup" )
            {
                    // Format is a Lookup Table
    
                    // Get a numeric value to use in lookup
    
                    if ( is_array( $Tag['Data'] ) )
                    {
                            // If data is an array, use first element
                            $first_val = $Tag['Data'][0];
                    }
                    else if ( is_string( $Tag['Data'] ) )
                    {
                            // If data is a string, use the first character
                            $first_val = ord($Tag['Data']{0});
                    }
                    else
                    {
                            // Otherwise use the data as is
                            $first_val = $Tag['Data'];
                    }
    
                    // Check if the data value exists in the lookup table for this IFD entry
                    if ( array_key_exists( $first_val, $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag["Tag Number"] ] ) )
                    {
                            // Data value exists in lookup table - return the matching string
                            return $GLOBALS[ "IFD_Tag_Definitions" ][$Tag_Definitions_Name][ $Tag["Tag Number"] ][ $first_val ];
                    }
                    else
                    {
                            // Data value doesnt exist in lookup table - return explanation string
                            return "Unknown Reserved value $first_val ";
                    }
            }
            else if  ( $Tag['Type'] == "Special" )
            {
                    // Format is special - interpret to text with special handlers
                    return $this->get_Special_Tag_Text_Value( $Tag, $Tag_Definitions_Name );
            }
            else if  ( $Tag['Type'] == "PIM" )
            {
                    // Format is Print Image Matching info - interpret with custom handler
                    return $this->get_PIM_Text_Value( $Tag, $Tag_Definitions_Name );
            }
            else if  ( $Tag['Type'] == "SubIFD" )
            {
                    // Format is a Sub-IFD - this has no text value
                    return "";
            }
            else
            {
                    // Unknown Format - Couldn't interpret using the IFD_Tag_Definitions global array information
                    return FALSE;
            }
    }
    
    /******************************************************************************
    * End of Function:     get_Tag_Text_Value
    ******************************************************************************/
    
    
    
    
    
    
    /******************************************************************************
    *
    * Internal Function:     get_Special_Tag_Text_Value
    *
    * Description:  Interprets an IFD entry marked as "Special" in the IFD_Tag_Definitions
    *               global array into a text string using custom handlers
    *
    * Parameters:   Tag - The IFD entry to process
    *               Tag_Definitions_Name - The name of the tag definitions to use from within the IFD_Tag_Definitions global array
    *
    * Returns:      String - if the tag was successfully decoded into a text string
    *               FALSE - if the tag could not be decoded
    *
    ******************************************************************************/
    
    function get_Special_Tag_Text_Value( $Tag, $Tag_Definitions_Name )
    {
            // Check what type of IFD is being decoded
    
            if ( $Tag_Definitions_Name == "TIFF" )
            {
                    // This is a TIFF IFD (bottom level)
    
                    // Check what tag number the IFD entry has.
                    switch ( $Tag['Tag Number'] )
                    {
                            case 530:  // YCbCr Sub Sampling Entry
    
                                    // Data contains two numerical values
    
                                    if ( ( $Tag['Data'][0] == 2 ) && ( $Tag['Data'][1] == 1 ) )
                                    {
                                            // Values are 2,1 - hence YCbCr 4:2:2
                                            return "YCbCr 4:2:2 ratio of chrominance components to the luminance components";
                                    }
                                    elseif ( ( $Tag['Data'][0] == 2 ) && ( $Tag['Data'][1] == 2 ) )
                                    {
                                            // Values are 2,2 - hence YCbCr 4:2:0
                                            return "YCbCr 4:2:0 ratio of chrominance components to the luminance components";
                                    }
                                    else
                                    {
                                            // Other values are unknown
                                            return "Unknown Reserved value (" . $Tag['Data'][0] . ")";
                                    }
                                    break;
    
                            default:
                                    return FALSE;
                    }
            }
            else if ( $Tag_Definitions_Name == "EXIF" )
            {
                    // This is an EXIF IFD
    
                    // Check what tag number the IFD entry has.
                    switch ( $Tag['Tag Number'] )
                    {
    
                            case 37121: // Components configuration
    
                                    // Data contains 4 numerical values indicating component type
    
                                    $output_str = "";
    
                                    // Cycle through each component
                                    for ( $Num = 0; $Num < 4; $Num++ )
                                    {
                                            // Construct first part of text string
                                            $output_str .= "Component " . ( $Num + 1 ) . ": ";
    
                                            // Construct second part of text string via
                                            // lookup using numerical value
    
                                            $value = ord( $Tag['Data']{$Num} );
                                            switch( $value )
                                            {
                                                    case 0:
                                                            $output_str .= "Does not exist\n";
                                                            break;
                                                    case 1:
                                                            $output_str .= "Y (Luminance)\n";
                                                            break;
                                                    case 2:
                                                            $output_str .= "Cb (Chroma minus Blue)\n";
                                                            break;
                                                    case 3:
                                                            $output_str .= "Cr (Chroma minus Red)\n";
                                                            break;
                                                    case 4:
                                                            $output_str .= "Red\n";
                                                            break;
                                                    case 5:
                                                            $output_str .= "Green\n";
                                                            break;
                                                    case 6:
                                                            $output_str .= "Blue\n";
                                                            break;
                                                    default:
                                                            $output_str .= "Unknown value $value\n";
                                            };
                                    }
    
                                    // Return the completed string
    
                                    return $output_str;
                                    break;
    
    
    
                            case 41730: // Colour Filter Array Pattern
    
                                    // The first two characters are a SHORT for Horizontal repeat pixel unit -
                                    $n_max = get_IFD_Data_Type( substr( $Tag['Data'], 0, 2 ), 3, $Tag['Byte Align'] );
    
                                    // The next two characters are a SHORT for Vertical repeat pixel unit -
                                    $m_max = get_IFD_Data_Type( substr( $Tag['Data'], 2, 2 ), 3, $Tag['Byte Align'] );
    
    
                                    // At least one camera type appears to have byte reversed values for N_Max and M_Max
                                    // Check if they need reversing
                                    if ( $n_max > 256 )
                                    {
                                            $n_max = $n_max/256 + 256*($n_max%256);
                                    }
    
                                    if ( $m_max > 256 )
                                    {
                                            $m_max = $m_max/256 + 256*($m_max%256);
                                    }
    
    
                                    $output_str = "";
    
    
                                    // Cycle through all the elements in the resulting 2 dimensional array,
                                    for( $m = 1; $m <= $m_max; $m++ )
                                    {
                                            for( $n = 1; $n <= $n_max; $n++ )
                                            {
    
                                                    // Append text from a lookup table according to
                                                    // the value read for this element
    
                                                    switch ( ord($Tag['Data']{($n_max*($m-1)+$n+3)}) )
                                                    {
                                                            case 0:
                                                                    $output_str .= "RED     ";
                                                                    break;
                                                            case 1:
                                                                    $output_str .= "GREEN   ";
                                                                    break;
                                                            case 2:
                                                                    $output_str .= "BLUE    ";
                                                                    break;
                                                            case 3:
                                                                    $output_str .= "CYAN    ";
                                                                    break;
                                                            case 4:
                                                                    $output_str .= "MAGENTA ";
                                                                    break;
                                                            case 5:
                                                                    $output_str .= "YELLOW  ";
                                                                    break;
                                                            case 6:
                                                                    $output_str .= "WHITE   ";
                                                                    break;
                                                            default:
                                                                    $output_str .= "Unknown ";
                                                                    break;
                                                    };
                                            };
                                            $output_str .= "\n";
                                    };
    
                                    // Return the resulting string
                                    return $output_str;
                                    break;
    
                            default:
                                    return FALSE;
                    }
            }
            else
            {
                    // Unknown IFD type, see if it is part of a makernote
                    return get_Makernote_Text_Value( $Tag, $Tag_Definitions_Name );
            }
    
    
    }
    
    /******************************************************************************
    * End of Function:     get_Tag_Text_Value
    ******************************************************************************/
    
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     interpret_IFD
    *
    * Description:  Generates html detailing the contents a single IFD.
    *
    * Parameters:   IFD_array - the array containing an IFD
    *               filename - the name of the Image file being processed ( used
    *                          by scripts which displays EXIF thumbnails)
    *
    * Returns:      output_str - A string containing the HTML
    *
    ******************************************************************************/
    
    function interpret_IFD( $IFD_array, $filename )
    {
            // Create the output string with the table tag
            $output_str = "<table class=\"EXIF_Table\" border=1>\n";
    
            // Create an extra output string to receive any supplementary html
            // which cannot go inside the table
            $extra_IFD_str = "";
    
            // Check that the IFD array is valid
            if ( ( $IFD_array === FALSE ) || ( $IFD_array === NULL ) )
            {
                    // the IFD array is NOT valid - exit
                    return "";
            }
    
            // Check if this is an EXIF IFD and if there is a makernote present
            if ( ( $IFD_array['Tags Name'] === "EXIF" ) &&
                 ( ! array_key_exists( 37500, $IFD_array ) ) )
            {
    
                    // This is an EXIF IFD but NO makernote is present - Add a message to the output
                    $extra_IFD_str .= "<h3 class=\"EXIF_Secondary_Heading\">No Makernote Present</h3>";
            }
    
            // Cycle through each tag in the IFD
    
            foreach( $IFD_array as $Tag_ID => $Exif_Tag )
            {
    
                    // Ignore the non numeric elements - they aren't tags
                    if ( ! is_numeric ( $Tag_ID ) )
                    {
                            // Skip Tags Name
                    }
                            // Check if the Tag has been decoded successfully
                    else if ( $Exif_Tag['Decoded'] == TRUE )
                    {
                            // This tag has been successfully decoded
    
                            // Table cells won't get drawn with nothing in them -
                            // Ensure that at least a non breaking space exists in them
    
                            if ( trim($Exif_Tag['Text Value']) == "" )
                            {
                                    $Exif_Tag['Text Value'] = "&nbsp;";
                            }
    
                            // Check if the tag is a sub-IFD
                            if ( $Exif_Tag['Type'] == "SubIFD" )
                            {
                                    // This is a sub-IFD tag
                                    // Add a sub-heading for the sub-IFD
                                    $extra_IFD_str .= "<h3 class=\"EXIF_Secondary_Heading\">" . $Exif_Tag['Tag Name'] . " contents</h3>";
    
                                    // Cycle through each sub-IFD in the chain
                                    foreach ( $Exif_Tag['Data'] as $subIFD )
                                    {
                                            // Interpret this sub-IFD and add the html to the secondary output
                                            $extra_IFD_str .= interpret_IFD( $subIFD, $filename );
                                    }
                            }
                                    // Check if the tag is a makernote
                            else if ( $Exif_Tag['Type'] == "Maker Note" )
                            {
                                    // This is a Makernote Tag
                                    // Add a sub-heading for the Makernote
                                    $extra_IFD_str .= "<h3 class=\"EXIF_Secondary_Heading\">Maker Note Contents</h3>";
    
                                    // Interpret the Makernote and add the html to the secondary output
                                    $extra_IFD_str .= Interpret_Makernote_to_HTML( $Exif_Tag, $filename );
                            }
                                    // Check if this is a IPTC/NAA Record within the EXIF IFD
                            else if ( $Exif_Tag['Type'] == "IPTC" )
                            {
                                    // This is a IPTC/NAA Record, interpret it and output to the secondary html
                                    $extra_IFD_str .= "<h3 class=\"EXIF_Secondary_Heading\">Contains IPTC/NAA Embedded in EXIF</h3>";
                                    $extra_IFD_str .=Interpret_IPTC_to_HTML( $Exif_Tag['Data'] );
                            }
                                    // Change: Check for embedded XMP as of version 1.11
                                    // Check if this is a XMP Record within the EXIF IFD
                            else if ( $Exif_Tag['Type'] == "XMP" )
                            {
                                    // This is a XMP Record, interpret it and output to the secondary html
                                    $extra_IFD_str .= "<h3 class=\"EXIF_Secondary_Heading\">Contains XMP Embedded in EXIF</h3>";
                                    $extra_IFD_str .= Interpret_XMP_to_HTML( $Exif_Tag['Data'] );
                            }
                                    // Change: Check for embedded IRB as of version 1.11
                                    // Check if this is a Photoshop IRB Record within the EXIF IFD
                            else if ( $Exif_Tag['Type'] == "IRB" )
                            {
                                    // This is a Photoshop IRB Record, interpret it and output to the secondary html
                                    $extra_IFD_str .= "<h3 class=\"EXIF_Secondary_Heading\">Contains Photoshop IRB Embedded in EXIF</h3>";
                                    $extra_IFD_str .= Interpret_IRB_to_HTML( $Exif_Tag['Data'], $filename );
                            }
                                    // Check if the tag is Numeric
                            else if ( $Exif_Tag['Type'] == "Numeric" )
                            {
                                    // Numeric Tag - Output text value as is.
                                    $output_str .= "<tr class=\"EXIF_Table_Row\"><td class=\"EXIF_Caption_Cell\">" . $Exif_Tag['Tag Name'] . "</td><td class=\"EXIF_Value_Cell\">" . $Exif_Tag['Text Value'] . "</td></tr>\n";
                            }
                            else
                            {
                                    // Other tag - Output text as preformatted
                                    $output_str .= "<tr class=\"EXIF_Table_Row\"><td class=\"EXIF_Caption_Cell\">" . $Exif_Tag['Tag Name'] . "</td><td class=\"EXIF_Value_Cell\"><pre>" . trim( $Exif_Tag['Text Value']) . "</pre></td></tr>\n";
                            }
    
                    }
                    else
                    {
                            // Tag has NOT been decoded successfully
                            // Hence it is either an unknown tag, or one which
                            // requires processing at the time of html construction
    
                            // Table cells won't get drawn with nothing in them -
                            // Ensure that at least a non breaking space exists in them
    
                            if ( trim($Exif_Tag['Text Value']) == "" )
                            {
                                    $Exif_Tag['Text Value'] = "&nbsp;";
                            }
    
                            // Check if this tag is the first IFD Thumbnail
                            if ( ( $IFD_array['Tags Name'] == "TIFF" ) &&
                                 ( $Tag_ID == 513 ) )
                            {
                                    // This is the first IFD thumbnail - Add html to the output
    
                                    // Change: as of version 1.11 - Changed to make thumbnail link portable across directories
                                    // Build the path of the thumbnail script and its filename parameter to put in a url
                                    $link_str = get_relative_path( dirname(__FILE__) . "/get_exif_thumb.php" , getcwd ( ) );
                                    $link_str .= "?filename=";
                                    $link_str .= get_relative_path( $filename, dirname(__FILE__) );
    
                                    // Add thumbnail link to html
                                    $output_str .= "<tr class=\"EXIF_Table_Row\"><td class=\"EXIF_Caption_Cell\">" . $Exif_Tag['Tag Name'] . "</td><td class=\"EXIF_Value_Cell\"><a class=\"EXIF_First_IFD_Thumb_Link\" href=\"$link_str\"><img class=\"EXIF_First_IFD_Thumb\" src=\"$link_str\"></a></td></tr>\n";
                            }
                                    // Check if this is the Makernote
                            else if ( $Exif_Tag['Type'] == "Maker Note" )
                            {
                                    // This is the makernote, but has not been decoded
                                    // Add a message to the secondary output
                                    $extra_IFD_str .= "<h3 class=\"EXIF_Secondary_Heading\">Makernote Coding Unknown</h3>\n";
                            }
                            else
                            {
                                    // This is an Unknown Tag
    
                                    // Check if the user wants to hide unknown tags
                                    if ( $GLOBALS['HIDE_UNKNOWN_TAGS'] === FALSE )
                                    {
                                            // User wants to display unknown tags
    
                                            // Check if the Data is an ascii string
                                            if ( $Exif_Tag['Data Type'] == 2 )
                                            {
                                                    // This is a Ascii String field - add it preformatted to the output
                                                    $output_str .= "<tr class=\"EXIF_Table_Row\"><td class=\"EXIF_Caption_Cell\">" . $Exif_Tag['Tag Name'] . "</td><td class=\"EXIF_Value_Cell\"><pre>" . trim( $Exif_Tag['Text Value'] ) . "</pre></td></tr>\n";
                                            }
                                            else
                                            {
                                                    // Not an ASCII string - add it as is to the output
                                                    $output_str .= "<tr class=\"EXIF_Table_Row\"><td class=\"EXIF_Caption_Cell\">" . $Exif_Tag['Tag Name'] . "</td><td class=\"EXIF_Value_Cell\">" . trim( $Exif_Tag['Text Value'] ) . "</td></tr>\n";
                                            }
                                    }
                            }
                    }
            }
    
            // Close the table in the output
            $output_str .= "</table>\n";
    
            // Add the secondary output at the end of the main output
            $output_str .= "$extra_IFD_str\n";
    
            // Return the resulting html
            return $output_str;
    }
    
    /******************************************************************************
    * End of Function:     interpret_IFD
    ******************************************************************************/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     get_IFD_Data_Type
    *
    * Description:  Decodes an IFD field value from a binary data string, using
    *               information supplied about the data type and byte alignment of
    *               the stored data.
    *               This function should be used for all datatypes except ASCII strings
    *
    * Parameters:   input_data - a binary data string containing the IFD value,
    *                            must be exact length of the value
    *               data_type - a number representing the IFD datatype as per the
    *                           TIFF 6.0 specification:
    *                               1 = Unsigned 8-bit Byte
    *                               2 = ASCII String
    *                               3 = Unsigned 16-bit Short
    *                               4 = Unsigned 32-bit Long
    *                               5 = Unsigned 2x32-bit Rational
    *                               6 = Signed 8-bit Byte
    *                               7 = Undefined
    *                               8 = Signed 16-bit Short
    *                               9 = Signed 32-bit Long
    *                               10 = Signed 2x32-bit Rational
    *                               11 = 32-bit Float
    *                               12 = 64-bit Double
    *               Byte_Align - Indicates the byte alignment of the data.
    *                            MM = Motorola, MSB first, Big Endian
    *                            II = Intel, LSB first, Little Endian
    *
    * Returns:      output - the value of the data (string or numeric)
    *
    ******************************************************************************/
    
    function get_IFD_Data_Type( $input_data, $data_type, $Byte_Align )
    {
            // Check if this is a Unsigned Byte, Unsigned Short or Unsigned Long
            if (( $data_type == 1 ) || ( $data_type == 3 ) || ( $data_type == 4 ))
            {
                    // This is a Unsigned Byte, Unsigned Short or Unsigned Long
    
                    // Check the byte alignment to see if the bytes need tp be reversed
                    if ( $Byte_Align == "II" )
                    {
                            // This is in Intel format, reverse it
                            $input_data = strrev ( $input_data );
                    }
    
                    // Convert the binary string to a number and return it
                    return hexdec( bin2hex( $input_data ) );
            }
                    // Check if this is a ASCII string type
            elseif ( $data_type == 2 )
            {
                    // Null terminated ASCII string(s)
                    // The input data may represent multiple strings, as the
                    // 'count' field represents the total bytes, not the number of strings
                    // Hence this should not be processed here, as it would have
                    // to return multiple values instead of a single value
    
                    echo "<p>Error - ASCII Strings should not be processed in get_IFD_Data_Type</p>\n";
                    return "Error Should never get here"; //explode( "\x00", $input_data );
            }
                    // Check if this is a Unsigned rational type
            elseif ( $data_type == 5 )
            {
                    // This is a Unsigned rational type
    
                    // Check the byte alignment to see if the bytes need to be reversed
                    if ( $Byte_Align == "MM" )
                    {
                            // Motorola MSB first byte aligment
                            // Unpack the Numerator and denominator and return them
                            return unpack( 'NNumerator/NDenominator', $input_data );
                    }
                    else
                    {
                            // Intel LSB first byte aligment
                            // Unpack the Numerator and denominator and return them
                            return unpack( 'VNumerator/VDenominator', $input_data );
                    }
            }
                    // Check if this is a Signed Byte, Signed Short or Signed Long
            elseif ( ( $data_type == 6 ) || ( $data_type == 8 ) || ( $data_type == 9 ) )
            {
                    // This is a Signed Byte, Signed Short or Signed Long
    
                    // Check the byte alignment to see if the bytes need to be reversed
                    if ( $Byte_Align == "II" )
                    {
                            //Intel format, reverse the bytes
                            $input_data = strrev ( $input_data );
                    }
    
                    // Convert the binary string to an Unsigned number
                    $value = hexdec( bin2hex( $input_data ) );
    
                    // Convert to signed number
    
                    // Check if it is a Byte above 128 (i.e. a negative number)
                    if ( ( $data_type == 6 ) && ( $value > 128 ) )
                    {
                            // number should be negative - make it negative
                            return  $value - 256;
                    }
    
                    // Check if it is a Short above 32767 (i.e. a negative number)
                    if ( ( $data_type == 8 ) && ( $value > 32767 ) )
                    {
                            // number should be negative - make it negative
                            return  $value - 65536;
                    }
    
                    // Check if it is a Long above 2147483648 (i.e. a negative number)
                    if ( ( $data_type == 9 ) && ( $value > 2147483648 ) )
                    {
                            // number should be negative - make it negative
                            return  $value - 4294967296;
                    }
    
                    // Return the signed number
                    return $value;
            }
                    // Check if this is Undefined type
            elseif ( $data_type == 7 )
            {
                    // Custom Data - Do nothing
                    return $input_data;
            }
                    // Check if this is a Signed Rational type
            elseif ( $data_type == 10 )
            {
                    // This is a Signed Rational type
    
                    // Signed Long not available with endian in unpack , use unsigned and convert
    
                    // Check the byte alignment to see if the bytes need to be reversed
                    if ( $Byte_Align == "MM" )
                    {
                            // Motorola MSB first byte aligment
                            // Unpack the Numerator and denominator
                            $value = unpack( 'NNumerator/NDenominator', $input_data );
                    }
                    else
                    {
                            // Intel LSB first byte aligment
                            // Unpack the Numerator and denominator
                            $value = unpack( 'VNumerator/VDenominator', $input_data );
                    }
    
                    // Convert the numerator to a signed number
                    // Check if it is above 2147483648 (i.e. a negative number)
                    if ( $value['Numerator'] > 2147483648 )
                    {
                            // number is negative
                            $value['Numerator'] -= 4294967296;
                    }
    
                    // Convert the denominator to a signed number
                    // Check if it is above 2147483648 (i.e. a negative number)
                    if ( $value['Denominator'] > 2147483648 )
                    {
                            // number is negative
                            $value['Denominator'] -= 4294967296;
                    }
    
                    // Return the Signed Rational value
                    return $value;
            }
                    // Check if this is a Float type
            elseif ( $data_type == 11 )
            {
                    // IEEE 754 Float
                    // TODO - EXIF - IFD datatype Float not implemented yet
                    return "FLOAT NOT IMPLEMENTED YET";
            }
                    // Check if this is a Double type
            elseif ( $data_type == 12 )
            {
                    // IEEE 754 Double
                    // TODO - EXIF - IFD datatype Double not implemented yet
                    return "DOUBLE NOT IMPLEMENTED YET";
            }
            else
            {
                    // Error - Invalid Datatype
                    return "Invalid Datatype $data_type";
    
            }
    
    }
    
    /******************************************************************************
    * End of Function:     get_IFD_Data_Type
    ******************************************************************************/
    
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     put_IFD_Data_Type
    *
    * Description:  Encodes an IFD field from a value to a binary data string, using
    *               information supplied about the data type and byte alignment of
    *               the stored data.
    *
    * Parameters:   input_data - an IFD data value, numeric or string
    *               data_type - a number representing the IFD datatype as per the
    *                           TIFF 6.0 specification:
    *                               1 = Unsigned 8-bit Byte
    *                               2 = ASCII String
    *                               3 = Unsigned 16-bit Short
    *                               4 = Unsigned 32-bit Long
    *                               5 = Unsigned 2x32-bit Rational
    *                               6 = Signed 8-bit Byte
    *                               7 = Undefined
    *                               8 = Signed 16-bit Short
    *                               9 = Signed 32-bit Long
    *                               10 = Signed 2x32-bit Rational
    *                               11 = 32-bit Float
    *                               12 = 64-bit Double
    *               Byte_Align - Indicates the byte alignment of the data.
    *                            MM = Motorola, MSB first, Big Endian
    *                            II = Intel, LSB first, Little Endian
    *
    * Returns:      output - the packed binary string of the data
    *
    ******************************************************************************/
    
    function put_IFD_Data_Type( $input_data, $data_type, $Byte_Align )
    {
            // Process according to the datatype
            switch ( $data_type )
            {
                    case 1: // Unsigned Byte - return character as is
                            return chr($input_data);
                            break;
    
                    case 2: // ASCII String
                            // Return the string with terminating null
                            return $input_data . "\x00";
                            break;
    
                    case 3: // Unsigned Short
                            // Check byte alignment
                            if ( $Byte_Align == "II" )
                            {
                                    // Intel/Little Endian - pack the short and return
                                    return pack( "v", $input_data );
                            }
                            else
                            {
                                    // Motorola/Big Endian - pack the short and return
                                    return pack( "n", $input_data );
                            }
                            break;
    
                    case 4: // Unsigned Long
                            // Check byte alignment
                            if ( $Byte_Align == "II" )
                            {
                                    // Intel/Little Endian - pack the long and return
                                    return pack( "V", $input_data );
                            }
                            else
                            {
                                    // Motorola/Big Endian - pack the long and return
                                    return pack( "N", $input_data );
                            }
                            break;
    
                    case 5: // Unsigned Rational
                            // Check byte alignment
                            if ( $Byte_Align == "II" )
                            {
                                    // Intel/Little Endian - pack the two longs and return
                                    return pack( "VV", $input_data['Numerator'], $input_data['Denominator'] );
                            }
                            else
                            {
                                    // Motorola/Big Endian - pack the two longs and return
                                    return pack( "NN", $input_data['Numerator'], $input_data['Denominator'] );
                            }
                            break;
    
                    case 6: // Signed Byte
                            // Check if number is negative
                            if ( $input_data < 0 )
                            {
                                    // Number is negative - return signed character
                                    return chr( $input_data + 256 );
                            }
                            else
                            {
                                    // Number is positive - return character
                                    return chr( $input_data );
                            }
                            break;
    
                    case 7: // Unknown - return as is
                            return $input_data;
                            break;
    
                    case 8: // Signed Short
                            // Check if number is negative
                            if (  $input_data < 0 )
                            {
                                    // Number is negative - make signed value
                                    $input_data = $input_data + 65536;
                            }
                            // Check byte alignment
                            if ( $Byte_Align == "II" )
                            {
                                    // Intel/Little Endian - pack the short and return
                                    return pack( "v", $input_data );
                            }
                            else
                            {
                                    // Motorola/Big Endian - pack the short and return
                                    return pack( "n", $input_data );
                            }
                            break;
    
                    case 9: // Signed Long
                            // Check if number is negative
                            if (  $input_data < 0 )
                            {
                                    // Number is negative - make signed value
                                    $input_data = $input_data + 4294967296;
                            }
                            // Check byte alignment
                            if ( $Byte_Align == "II" )
                            {
                                    // Intel/Little Endian - pack the long and return
                                    return pack( "v", $input_data );
                            }
                            else
                            {
                                    // Motorola/Big Endian - pack the long and return
                                    return pack( "n", $input_data );
                            }
                            break;
    
                    case 10: // Signed Rational
                            // Check if numerator is negative
                            if (  $input_data['Numerator'] < 0 )
                            {
                                    // Number is numerator - make signed value
                                    $input_data['Numerator'] = $input_data['Numerator'] + 4294967296;
                            }
                            // Check if denominator is negative
                            if (  $input_data['Denominator'] < 0 )
                            {
                                    // Number is denominator - make signed value
                                    $input_data['Denominator'] = $input_data['Denominator'] + 4294967296;
                            }
                            // Check byte alignment
                            if ( $Byte_Align == "II" )
                            {
                                    // Intel/Little Endian - pack the two longs and return
                                    return pack( "VV", $input_data['Numerator'], $input_data['Denominator'] );
                            }
                            else
                            {
                                    // Motorola/Big Endian - pack the two longs and return
                                    return pack( "NN", $input_data['Numerator'], $input_data['Denominator'] );
                            }
                            break;
    
                    case 11: // Float
                            // IEEE 754 Float
                            // TODO - EXIF - IFD datatype Float not implemented yet
                            return "FLOAT NOT IMPLEMENTED YET";
                            break;
    
                    case 12: // Double
                            // IEEE 754 Double
                            // TODO - EXIF - IFD datatype Double not implemented yet
                            return "DOUBLE NOT IMPLEMENTED YET";
                            break;
    
                    default:
                            // Error - Invalid Datatype
                            return "Invalid Datatype $data_type";
                            break;
    
            }
    
            // Shouldn't get here
            return FALSE;
    }
    
    /******************************************************************************
    * End of Function:     put_IFD_Data_Type
    ******************************************************************************/
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     get_IFD_value_as_text
    *
    * Description:  Decodes an IFD field value from a binary data string, using
    *               information supplied about the data type and byte alignment of
    *               the stored data.
    *               This function should be used for all datatypes except ASCII strings
    *
    * Parameters:   input_data - a binary data string containing the IFD value,
    *                            must be exact length of the value
    *               data_type - a number representing the IFD datatype as per the
    *                           TIFF 6.0 specification:
    *                               1 = Unsigned 8-bit Byte
    *                               2 = ASCII String
    *                               3 = Unsigned 16-bit Short
    *                               4 = Unsigned 32-bit Long
    *                               5 = Unsigned 2x32-bit Rational
    *                               6 = Signed 8-bit Byte
    *                               7 = Undefined
    *                               8 = Signed 16-bit Short
    *                               9 = Signed 32-bit Long
    *                               10 = Signed 2x32-bit Rational
    *                               11 = 32-bit Float
    *                               12 = 64-bit Double
    *               Byte_Align - Indicates the byte alignment of the data.
    *                            MM = Motorola, MSB first, Big Endian
    *                            II = Intel, LSB first, Little Endian
    *
    * Returns:      output - the value of the data (string or numeric)
    *
    ******************************************************************************/
    
    function get_IFD_value_as_text( $Exif_Tag )
    {
            // Create a string to receive the output text
            $output_str = "";
    
            // Select Processing method according to the datatype
            switch  ($Exif_Tag['Data Type'])
            {
                    case 1 : // Unsigned Byte
                    case 3 : // Unsigned Short
                    case 4 : // Unsigned Long
                    case 6 : // Signed Byte
                    case 8 : // Signed Short
                    case 9 : // Signed Long
    
                            // Cycle through each of the values for this tag
                            foreach ( $Exif_Tag['Data'] as $val )
                            {
                                    // Check that this isn't the first value,
                                    if ( $output_str != "" )
                                    {
                                            // This isn't the first value, Add a Comma and Newline to the output
                                            $output_str .= ",\n";
                                    }
                                    // Add the Value to the output
                                    $output_str .= $val;
                            }
                            break;
    
                    case 2 : // ASCII
                            // Append all the strings together, separated by Newlines
                            $output_str .= implode ( "\n", $Exif_Tag['Data']);
                            break;
    
                    case 5 : // Unsigned Rational
                    case 10: // Signed Rational
    
                            // Cycle through each of the values for this tag
                            foreach ( $Exif_Tag['Data'] as $val )
                            {
                                    // Check that this isn't the first value,
                                    if ( $output_str != "" )
                                    {
                                            // This isn't the first value, Add a Comma and Newline to the output
                                            $output_str .= ",\n";
                                    }
    
                                    // Add the Full Value to the output
                                    $output_str .= $val['Numerator'] ."/" . $val['Denominator'];
    
                                    // Check if division by zero might be a problem
                                    if ( $val['Denominator'] != 0 )
                                    {
                                            // Denominator is not zero, Add the Decimal Value to the output text
                                            $output_str .= " (" . ($val['Numerator'] / $val['Denominator']) . ")";
                                    }
                            }
                            break;
    
                    case 11: // Float
                    case 12: // Double
                            // TODO - EXIF - IFD datatype Double and Float not implemented yet
                            $output_str .= "Float and Double not implemented yet";
                            break;
    
                    case 7 : // Undefined
                            // Unless the User has asked to see the raw binary data, this
                            // type should not be displayed
    
                            // Check if the user has requested to see the binary data in hex
                            if ( $GLOBALS['SHOW_BINARY_DATA_HEX'] == TRUE)
                            {
                                    // User has requested to see the binary data in hex
                                    // Add the value in hex
                                    $output_str .= "( " . strlen( $Exif_Tag['Data'] ) . " bytes of binary data ): " . bin2hex( $Exif_Tag['Data'] )  ;
                            }
                                    // Check if the user has requested to see the binary data as is
                            else if ( $GLOBALS['SHOW_BINARY_DATA_TEXT'] == TRUE)
                            {
                                    // User has requested to see the binary data as is
                                    // Add the value as is
                                    $output_str .= "( " . strlen( $Exif_Tag['Data'] ) . " bytes of binary data ): " . $Exif_Tag['Data']  ;
                            }
                            else
                            {
                                    // User has NOT requested to see binary data,
                                    // Add a message indicating the number of bytes to the output
                                    $output_str .= "( " . strlen( $Exif_Tag['Data'] ) . " bytes of binary data ) "  ;
                            }
                            break;
    
                    default :
                            // Error - Unknown IFD datatype
                            $output_str .= "Error - Exif tag data type (" . $Exif_Tag['Data Type'] .") is invalid";
                            break;
            }
    
            // Return the resulting text string
            return $output_str;
    }
    
    function get_jpeg_header_data( $filename )
    {
    
            // prevent refresh from aborting file operations and hosing file
            ignore_user_abort(true);
    
    
            // Attempt to open the jpeg file - the at symbol supresses the error message about
            // not being able to open files. The file_exists would have been used, but it
            // does not work with files fetched over http or ftp.
            $filehnd = @fopen($filename, 'rb');
    
            // Check if the file opened successfully
            if ( ! $filehnd  )
            {
                    // Could't open the file - exit
                    echo "<p>Could not open file $filename</p>\n";
                    return FALSE;
            }
    
    
            // Read the first two characters
            $data = $this->network_safe_fread( $filehnd, 2 );
    
            // Check that the first two characters are 0xFF 0xDA  (SOI - Start of image)
            if ( $data != "\xFF\xD8" )
            {
                    // No SOI (FF D8) at start of file - This probably isn't a JPEG file - close file and return;
                    echo "<p>This probably is not a JPEG file</p>\n";
                    fclose($filehnd);
                    return FALSE;
            }
    
    
            // Read the third character
            $data = $this->network_safe_fread( $filehnd, 2 );
    
            // Check that the third character is 0xFF (Start of first segment header)
            if ( $data{0} != "\xFF" )
            {
                    // NO FF found - close file and return - JPEG is probably corrupted
                    fclose($filehnd);
                    return FALSE;
            }
    
            // Flag that we havent yet hit the compressed image data
            $hit_compressed_image_data = FALSE;
    
    
            // Cycle through the file until, one of: 1) an EOI (End of image) marker is hit,
            //                                       2) we have hit the compressed image data (no more headers are allowed after data)
            //                                       3) or end of file is hit
    
            while ( ( $data{1} != "\xD9" ) && (! $hit_compressed_image_data) && ( ! feof( $filehnd ) ))
            {
                    // Found a segment to look at.
                    // Check that the segment marker is not a Restart marker - restart markers don't have size or data after them
                    if (  ( ord($data{1}) < 0xD0 ) || ( ord($data{1}) > 0xD7 ) )
                    {
                            // Segment isn't a Restart marker
                            // Read the next two bytes (size)
                            $sizestr = $this->network_safe_fread( $filehnd, 2 );
    
                            // convert the size bytes to an integer
                            $decodedsize = unpack ("nsize", $sizestr);
    
                            // Save the start position of the data
                            $segdatastart = ftell( $filehnd );
    
                            // Read the segment data with length indicated by the previously read size
                            $segdata = $this->network_safe_fread( $filehnd, $decodedsize['size'] - 2 );
    
    
                            // Store the segment information in the output array
                            $headerdata[] = array(  "SegType" => ord($data{1}),
                                                    "SegName" => $GLOBALS[ "JPEG_Segment_Names" ][ ord($data{1}) ],
                                                    "SegDesc" => $GLOBALS[ "JPEG_Segment_Descriptions" ][ ord($data{1}) ],
                                                    "SegDataStart" => $segdatastart,
                                                    "SegData" => $segdata );
                    }
    
                    // If this is a SOS (Start Of Scan) segment, then there is no more header data - the compressed image data follows
                    if ( $data{1} == "\xDA" )
                    {
                            // Flag that we have hit the compressed image data - exit loop as no more headers available.
                            $hit_compressed_image_data = TRUE;
                    }
                    else
                    {
                            // Not an SOS - Read the next two bytes - should be the segment marker for the next segment
                            $data = $this->network_safe_fread( $filehnd, 2 );
    
                            // Check that the first byte of the two is 0xFF as it should be for a marker
                            if ( $data{0} != "\xFF" )
                            {
                                    // NO FF found - close file and return - JPEG is probably corrupted
                                    fclose($filehnd);
                                    return FALSE;
                            }
                    }
            }
    
            // Close File
            fclose($filehnd);
            // Alow the user to abort from now on
            ignore_user_abort(false);
    
            // Return the header data retrieved
            return $headerdata;
    }
    
    
    /******************************************************************************
    * End of Function:     get_jpeg_header_data
    ******************************************************************************/
    
    
    
    
    /******************************************************************************
    *
    * Function:     put_jpeg_header_data
    *
    * Description:  Writes JPEG header data into a JPEG file. Takes an array in the
    *               same format as from get_jpeg_header_data, and combines it with
    *               the image data of an existing JPEG file, to create a new JPEG file
    *               WARNING: As this function will replace all JPEG headers,
    *                        including SOF etc, it is best to read the jpeg headers
    *                        from a file, alter them, then put them back on the same
    *                        file. If a SOF segment wer to be transfered from one
    *                        file to another, the image could become unreadable unless
    *                        the images were idenical size and configuration
    *
    *
    * Parameters:   old_filename - the JPEG file from which the image data will be retrieved
    *               new_filename - the name of the new JPEG to create (can be same as old_filename)
    *               jpeg_header_data - a JPEG header data array in the same format
    *                                  as from get_jpeg_header_data
    *
    * Returns:      TRUE - on Success
    *               FALSE - on Failure
    *
    ******************************************************************************/
    
    function put_jpeg_header_data( $old_filename, $new_filename, $jpeg_header_data )
    {
    
            // Change: added check to ensure data exists, as of revision 1.10
            // Check if the data to be written exists
            if ( $jpeg_header_data == FALSE )
            {
                    // Data to be written not valid - abort
                    return FALSE;
            }
    
            // extract the compressed image data from the old file
            $compressed_image_data = $this->get_jpeg_image_data( $old_filename );
    
            // Check if the extraction worked
            if ( ( $compressed_image_data === FALSE ) || ( $compressed_image_data === NULL ) )
            {
                    // Couldn't get image data from old file
                    return FALSE;
            }
    
    
            // Cycle through new headers
            foreach ($jpeg_header_data as $segno => $segment)
            {
                    // Check that this header is smaller than the maximum size
                    if ( strlen($segment['SegData']) > 0xfffd )
                    {
                            // Could't open the file - exit
                            echo "<p>A Header is too large to fit in JPEG segment</p>\n";
                            return FALSE;
                    }
            }
    
            ignore_user_abort(true);    ## prevent refresh from aborting file operations and hosing file
    
    
            // Attempt to open the new jpeg file
            $newfilehnd = @fopen($new_filename, 'wb');
            // Check if the file opened successfully
            if ( ! $newfilehnd  )
            {
                    // Could't open the file - exit
                    echo "<p>Could not open file $new_filename</p>\n";
                    return FALSE;
            }
    
            // Write SOI
            fwrite( $newfilehnd, "\xFF\xD8" );
    
            // Cycle through new headers, writing them to the new file
            foreach ($jpeg_header_data as $segno => $segment)
            {
    
                    // Write segment marker
                    fwrite( $newfilehnd, sprintf( "\xFF%c", $segment['SegType'] ) );
    
                    // Write segment size
                    fwrite( $newfilehnd, pack( "n", strlen($segment['SegData']) + 2 ) );
    
                    // Write segment data
                    fwrite( $newfilehnd, $segment['SegData'] );
            }
    
            // Write the compressed image data
            fwrite( $newfilehnd, $compressed_image_data );
    
            // Write EOI
            fwrite( $newfilehnd, "\xFF\xD9" );
    
            // Close File
            fclose($newfilehnd);
    
            // Alow the user to abort from now on
            ignore_user_abort(false);
    
    
            return TRUE;
    
    }
    
    /******************************************************************************
    * End of Function:     put_jpeg_header_data
    ******************************************************************************/
    
    
    
    /******************************************************************************
    *
    * Function:     get_jpeg_Comment
    *
    * Description:  Retreives the contents of the JPEG Comment (COM = 0xFFFE) segment if one
    *               exists
    *
    * Parameters:   jpeg_header_data - the JPEG header data, as retrieved
    *                                  from the get_jpeg_header_data function
    *
    * Returns:      string - Contents of the Comment segement
    *               FALSE - if the comment segment couldnt be found
    *
    ******************************************************************************/
    
    function get_jpeg_Comment( $jpeg_header_data )
    {
            //Cycle through the header segments until COM is found or we run out of segments
            $i = 0;
            while ( ( $i < count( $jpeg_header_data) )  && ( $jpeg_header_data[$i]['SegName'] != "COM" ) )
            {
                    $i++;
            }
    
            // Check if a COM segment has been found
            if (  $i < count( $jpeg_header_data) )
            {
                    // A COM segment was found, return it's contents
                    return $jpeg_header_data[$i]['SegData'];
            }
            else
            {
                    // No COM segment found
                    return FALSE;
            }
    }
    
    /******************************************************************************
    * End of Function:     get_jpeg_Comment
    ******************************************************************************/
    
    
    /******************************************************************************
    *
    * Function:     put_jpeg_Comment
    *
    * Description:  Creates a new JPEG Comment segment from a string, and inserts
    *               this segment into the supplied JPEG header array
    *
    * Parameters:   jpeg_header_data - a JPEG header data array in the same format
    *                                  as from get_jpeg_header_data, into which the
    *                                  new Comment segment will be put
    *               $new_Comment - a string containing the new Comment
    *
    * Returns:      jpeg_header_data - the JPEG header data array with the new
    *                                  JPEG Comment segment added
    *
    ******************************************************************************/
    
    function put_jpeg_Comment( $jpeg_header_data, $new_Comment )
    {
            //Cycle through the header segments
            for( $i = 0; $i < count( $jpeg_header_data ); $i++ )
            {
                    // If we find an COM header,
                    if ( strcmp ( $jpeg_header_data[$i]['SegName'], "COM" ) == 0 )
                    {
                            // Found a preexisting Comment block - Replace it with the new one and return.
                            $jpeg_header_data[$i]['SegData'] = $new_Comment;
                            return $jpeg_header_data;
                    }
            }
    
    
    
            // No preexisting Comment block found, find where to put it by searching for the highest app segment
            $i = 0;
            while ( ( $i < count( $jpeg_header_data ) ) && ( $jpeg_header_data[$i]["SegType"] >= 0xE0 ) )
            {
                    $i++;
            }
    
    
            // insert a Comment segment new at the position found of the header data.
            array_splice($jpeg_header_data, $i , 0, array( array(   "SegType" => 0xFE,
                                                                    "SegName" => $GLOBALS[ "JPEG_Segment_Names" ][ 0xFE ],
                                                                    "SegDesc" => $GLOBALS[ "JPEG_Segment_Descriptions" ][ 0xFE ],
                                                                    "SegData" => $new_Comment ) ) );
            return $jpeg_header_data;
    }
    
    /******************************************************************************
    * End of Function:     put_jpeg_Comment
    ******************************************************************************/
    
    
    
    
    /******************************************************************************
    *
    * Function:     Interpret_Comment_to_HTML
    *
    * Description:  Generates html showing the contents of any JPEG Comment segment
    *
    * Parameters:   jpeg_header_data - the JPEG header data, as retrieved
    *                                  from the get_jpeg_header_data function
    *
    * Returns:      output - the HTML
    *
    ******************************************************************************/
    
    function Interpret_Comment_to_HTML( $jpeg_header_data )
    {
            // Create a string to receive the output
            $output = "";
    
            // read the comment segment
            $comment = get_jpeg_Comment( $jpeg_header_data );
    
            // Check if the comment segment was valid
            if ( $comment !== FALSE )
            {
                    // Comment exists - add it to the output
                    $output .= "<h2 class=\"JPEG_Comment_Main_Heading\">JPEG Comment</h2>\n";
                    $output .= "<p class=\"JPEG_Comment_Text\">$comment</p>\n";
            }
    
            // Return the result
            return $output;
    }
    
    /******************************************************************************
    * End of Function:     Interpret_Comment_to_HTML
    ******************************************************************************/
    
    
    
    
    /******************************************************************************
    *
    * Function:     get_jpeg_intrinsic_values
    *
    * Description:  Retreives information about the intrinsic characteristics of the
    *               jpeg image, such as Bits per Component, Height and Width.
    *
    * Parameters:   jpeg_header_data - the JPEG header data, as retrieved
    *                                  from the get_jpeg_header_data function
    *
    * Returns:      array - An array containing the intrinsic JPEG values
    *               FALSE - if the comment segment couldnt be found
    *
    ******************************************************************************/
    
    function get_jpeg_intrinsic_values( $jpeg_header_data )
    {
            // Create a blank array for the output
            $Outputarray = array( );
    
            //Cycle through the header segments until Start Of Frame (SOF) is found or we run out of segments
            $i = 0;
            while ( ( $i < count( $jpeg_header_data) )  && ( substr( $jpeg_header_data[$i]['SegName'], 0, 3 ) != "SOF" ) )
            {
                    $i++;
            }
    
            // Check if a SOF segment has been found
            if ( substr( $jpeg_header_data[$i]['SegName'], 0, 3 ) == "SOF" )
            {
                    // SOF segment was found, extract the information
    
                    $data = $jpeg_header_data[$i]['SegData'];
    
                    // First byte is Bits per component
                    $Outputarray['Bits per Component'] = ord( $data{0} );
    
                    // Second and third bytes are Image Height
                    $Outputarray['Image Height'] = ord( $data{ 1 } ) * 256 + ord( $data{ 2 } );
    
                    // Forth and fifth bytes are Image Width
                    $Outputarray['Image Width'] = ord( $data{ 3 } ) * 256 + ord( $data{ 4 } );
    
                    // Sixth byte is number of components
                    $numcomponents = ord( $data{ 5 } );
    
                    // Following this is a table containing information about the components
                    for( $i = 0; $i < $numcomponents; $i++ )
                    {
                            $Outputarray['Components'][] = array (  'Component Identifier' => ord( $data{ 6 + $i * 3 } ),
                                                                    'Horizontal Sampling Factor' => ( ord( $data{ 7 + $i * 3 } ) & 0xF0 ) / 16,
                                                                    'Vertical Sampling Factor' => ( ord( $data{ 7 + $i * 3 } ) & 0x0F ),
                                                                    'Quantization table destination selector' => ord( $data{ 8 + $i * 3 } ) );
                    }
            }
            else
            {
                    // Couldn't find Start Of Frame segment, hence can't retrieve info
                    return FALSE;
            }
    
            return $Outputarray;
    }
    
    
    /******************************************************************************
    * End of Function:     get_jpeg_intrinsic_values
    ******************************************************************************/
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     Interpret_intrinsic_values_to_HTML
    *
    * Description:  Generates html showing some of the intrinsic JPEG values which
    *               were retrieved with the get_jpeg_intrinsic_values function
    *
    * Parameters:   values - the JPEG intrinsic values, as read from get_jpeg_intrinsic_values
    *
    * Returns:      OutputStr - A string containing the HTML
    *
    ******************************************************************************/
    
    function Interpret_intrinsic_values_to_HTML( $values )
    {
            // Check values are valid
            if ( $values != FALSE )
            {
                    // Write Heading
                    $OutputStr = "<h2 class=\"JPEG_Intrinsic_Main_Heading\">Intrinsic JPEG Information</h2>\n";
    
                    // Create Table
                    $OutputStr .= "<table class=\"JPEG_Intrinsic_Table\" border=1>\n";
    
                    // Put image height and width into table
                    $OutputStr .= "<tr class=\"JPEG_Intrinsic_Table_Row\"><td class=\"JPEG_Intrinsic_Caption_Cell\">Image Height</td><td class=\"JPEG_Intrinsic_Value_Cell\">" . $values['Image Height'] . " pixels</td></tr>\n";
                    $OutputStr .= "<tr class=\"JPEG_Intrinsic_Table_Row\"><td class=\"JPEG_Intrinsic_Caption_Cell\">Image Width</td><td class=\"JPEG_Intrinsic_Value_Cell\">" . $values['Image Width'] . " pixels</td></tr>\n";
    
                    // Put colour depth into table
                    if ( count( $values['Components'] ) == 1 )
                    {
                            $OutputStr .= "<tr class=\"JPEG_Intrinsic_Table_Row\"><td class=\"JPEG_Intrinsic_Caption_Cell\">Colour Depth</td><td class=\"JPEG_Intrinsic_Value_Cell\">" . $values['Bits per Component'] . " bit Monochrome</td></tr>\n";
                    }
                    else
                    {
                            $OutputStr .= "<tr class=\"JPEG_Intrinsic_Table_Row\"><td class=\"JPEG_Intrinsic_Caption_Cell\">Colour Depth</td><td class=\"JPEG_Intrinsic_Value_Cell\">" . ($values['Bits per Component'] * count( $values['Components'] ) ) . " bit</td></tr>\n";
                    }
    
                    // Close Table
                    $OutputStr .= "</table>\n";
    
                    // Return html
                    return $OutputStr;
            }
    }
    
    /******************************************************************************
    * End of Function:     Interpret_intrinsic_values_to_HTML
    ******************************************************************************/
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     get_jpeg_image_data
    *
    * Description:  Retrieves the compressed image data part of the JPEG file
    *
    * Parameters:   filename - the filename of the JPEG file to read
    *
    * Returns:      compressed_data - A string containing the compressed data
    *               FALSE - if retrieval failed
    *
    ******************************************************************************/
    
    function get_jpeg_image_data( $filename )
    {
    
            // prevent refresh from aborting file operations and hosing file
            ignore_user_abort(true);
    
            // Attempt to open the jpeg file
            $filehnd = @fopen($filename, 'rb');
    
            // Check if the file opened successfully
            if ( ! $filehnd  )
            {
                    // Could't open the file - exit
                    return FALSE;
            }
    
    
            // Read the first two characters
            $data = $this->network_safe_fread( $filehnd, 2 );
    
            // Check that the first two characters are 0xFF 0xDA  (SOI - Start of image)
            if ( $data != "\xFF\xD8" )
            {
                    // No SOI (FF D8) at start of file - close file and return;
                    fclose($filehnd);
                    return FALSE;
            }
    
    
    
            // Read the third character
            $data = $this->network_safe_fread( $filehnd, 2 );
    
            // Check that the third character is 0xFF (Start of first segment header)
            if ( $data{0} != "\xFF" )
            {
                    // NO FF found - close file and return
                    fclose($filehnd);
                    return;
            }
    
            // Flag that we havent yet hit the compressed image data
            $hit_compressed_image_data = FALSE;
    
    
            // Cycle through the file until, one of: 1) an EOI (End of image) marker is hit,
            //                                       2) we have hit the compressed image data (no more headers are allowed after data)
            //                                       3) or end of file is hit
    
            while ( ( $data{1} != "\xD9" ) && (! $hit_compressed_image_data) && ( ! feof( $filehnd ) ))
            {
                    // Found a segment to look at.
                    // Check that the segment marker is not a Restart marker - restart markers don't have size or data after them
                    if (  ( ord($data{1}) < 0xD0 ) || ( ord($data{1}) > 0xD7 ) )
                    {
                            // Segment isn't a Restart marker
                            // Read the next two bytes (size)
                            $sizestr = $this->network_safe_fread( $filehnd, 2 );
    
                            // convert the size bytes to an integer
                            $decodedsize = unpack ("nsize", $sizestr);
    
                             // Read the segment data with length indicated by the previously read size
                            $segdata = $this->network_safe_fread( $filehnd, $decodedsize['size'] - 2 );
                    }
    
                    // If this is a SOS (Start Of Scan) segment, then there is no more header data - the compressed image data follows
                    if ( $data{1} == "\xDA" )
                    {
                            // Flag that we have hit the compressed image data - exit loop after reading the data
                            $hit_compressed_image_data = TRUE;
    
                            // read the rest of the file in
                            // Can't use the filesize function to work out
                            // how much to read, as it won't work for files being read by http or ftp
                            // So instead read 1Mb at a time till EOF
    
                            $compressed_data = "";
                            do
                            {
                                    $compressed_data .= $this->network_safe_fread( $filehnd, 1048576 );
                            } while( ! feof( $filehnd ) );
    
                            // Strip off EOI and anything after
                            $EOI_pos = strpos( $compressed_data, "\xFF\xD9" );
                            $compressed_data = substr( $compressed_data, 0, $EOI_pos );
                    }
                    else
                    {
                            // Not an SOS - Read the next two bytes - should be the segment marker for the next segment
                            $data = $this->network_safe_fread( $filehnd, 2 );
    
                            // Check that the first byte of the two is 0xFF as it should be for a marker
                            if ( $data{0} != "\xFF" )
                            {
                                    // Problem - NO FF foundclose file and return";
                                    fclose($filehnd);
                                    return;
                            }
                    }
            }
    
            // Close File
            fclose($filehnd);
    
            // Alow the user to abort from now on
            ignore_user_abort(false);
    
    
            // Return the compressed data if it was found
            if ( $hit_compressed_image_data )
            {
                    return $compressed_data;
            }
            else
            {
                    return FALSE;
            }
    }
    
    
    /******************************************************************************
    * End of Function:     get_jpeg_image_data
    ******************************************************************************/
    
    
    
    
    
    
    
    /******************************************************************************
    *
    * Function:     Generate_JPEG_APP_Segment_HTML
    *
    * Description:  Generates html showing information about the Application (APP)
    *               segments which are present in the JPEG file
    *
    * Parameters:   jpeg_header_data - the JPEG header data, as retrieved
    *                                  from the get_jpeg_header_data function
    *
    * Returns:      output - A string containing the HTML
    *
    ******************************************************************************/
    
    function Generate_JPEG_APP_Segment_HTML( $jpeg_header_data )
    {
            if ( $jpeg_header_data == FALSE )
            {
                    return "";
            }
    
    
            // Write Heading
            $output = "<h2 class=\"JPEG_APP_Segments_Main_Heading\">Application Metadata Segments</h2>\n";
    
            // Create table
            $output .= "<table class=\"JPEG_APP_Segments_Table\" border=1>\n";
    
    
            // Cycle through each segment in the array
    
            foreach( $jpeg_header_data as $jpeg_header )
            {
    
                    // Check if the segment is a APP segment
    
                    if ( ( $jpeg_header['SegType'] >= 0xE0 ) && ( $jpeg_header['SegType'] <= 0xEF ) )
                    {
                            // This is an APP segment
    
                            // Read APP Segment Name - a Null terminated string at the start of the segment
                            $seg_name = strtok($jpeg_header['SegData'], "\x00");
    
                            // Some Segment names are either too long or not meaningfull, so
                            // we should clean them up
    
                            if ( $seg_name == "http://ns.adobe.com/xap/1.0/" )
                            {
                                    $seg_name = "XAP/RDF (\"http://ns.adobe.com/xap/1.0/\")";
                            }
                            elseif ( $seg_name == "Photoshop 3.0" )
                            {
                                    $seg_name = "Photoshop IRB (\"Photoshop 3.0\")";
                            }
                            elseif ( ( strncmp ( $seg_name, "[picture info]", 14) == 0 ) ||
                                     ( strncmp ( $seg_name, "\x0a\x09\x09\x09\x09[picture info]", 19) == 0 ) )
                            {
                                    $seg_name = "[picture info]";
                            }
                            elseif (  strncmp ( $seg_name, "Type=", 5) == 0 )
                            {
                                    $seg_name = "Epson Info";
                            }
                            elseif ( ( strncmp ( $seg_name, "HHHHHHHHHHHHHHH", 15) == 0 ) ||
                                     ( strncmp ( $seg_name, "@s33", 5) == 0 ) )
                            {
                                    $seg_name = "HP segment full of \"HHHHH\"";
                            }
    
    
                            // Clean the segment name so it doesn't cause problems with HTML
                            $seg_name = htmlentities( $seg_name );
    
                            // Output a Table row containing this APP segment
                            $output .= "<tr class=\"JPEG_APP_Segments_Table_Row\"><td class=\"JPEG_APP_Segments_Caption_Cell\">$seg_name</td><td class=\"JPEG_APP_Segments_Type_Cell\">" . $jpeg_header['SegName'] . "</td><td  class=\"JPEG_APP_Segments_Size_Cell\" align=\"right\">" . strlen( $jpeg_header['SegData']). " bytes</td></tr>\n";
                    }
            }
    
            // Close the table
            $output .= "</table>\n";
    
            // Return the HTML
            return $output;
    }
    
    
    /******************************************************************************
    * End of Function:     Generate_JPEG_APP_Segment_HTML
    ******************************************************************************/
    
    
    
    
    /******************************************************************************
    *
    * Function:     network_safe_fread
    *
    * Description:  Retrieves data from a file. This function is required since
    *               the fread function will not always return the requested number
    *               of characters when reading from a network stream or pipe
    *
    * Parameters:   file_handle - the handle of a file to read from
    *               length - the number of bytes requested
    *
    * Returns:      data - the data read from the file. may be less than the number
    *                      requested if EOF was hit
    *
    ******************************************************************************/
    
    function network_safe_fread( $file_handle, $length )
    {
            // Create blank string to receive data
            $data = "";
    
            // Keep reading data from the file until either EOF occurs or we have
            // retrieved the requested number of bytes
    
            while ( ( !feof( $file_handle ) ) && ( strlen($data) < $length ) )
            {
                    $data .= fread( $file_handle, $length-strlen($data) );
            }
    
            // return the data read
            return $data;
    }
    
    /******************************************************************************
    * End of Function:     network_safe_fread
    ******************************************************************************/







	protected function debug_to_console( $data ) {
		
		$output = '';
		
		if ( is_array( $data ) ) {
			$output .= "<script>console.warn( 'Debug Objects with Array.' ); console.log( '" . implode( ',', $data) . "' );</script>";
		} else if ( is_object( $data ) ) {
			$data    = var_export( $data, TRUE );
			$data    = explode( "\n", $data );
			foreach( $data as $line ) {
				if ( trim( $line ) ) {
					$line    = addslashes( $line );
					$output .= "console.log( '{$line}' );";
				}
			}
			$output = "<script>console.warn( 'Debug Objects with Object.' ); $output</script>";
		} else {
			$output .= "<script>console.log( 'Debug Objects: {$data}' );</script>";
		}
		
		echo $output;
	}

}
