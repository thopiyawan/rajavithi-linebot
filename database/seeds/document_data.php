<?php

use Illuminate\Database\Seeder;

class document_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sequents')->delete();
         //insert some dummy records
         DB::table('sequents')->insert(array(
             array('seqcode'=>'0001','question'=>'ยินดีครับ/ค่ะ กรุณาอย่าพิมพ์หรือส่งรูปภาพที่ไม่มีข้อความแจ้งบอกนะครับ/ค่ะ','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0002'),
             array('seqcode'=>'0002','question'=>'ผู้ป่วยเป็นผู้ชายหรือผู้หญิงวัยหมดประจำเดือนหรือได้คุมกำเนิดด้วยวิธีทำหมัน, ฉีดยาคุม, ฝังยาคุมหรือใส่ห่วงอนามัยแล้วใช่หรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0003'),
             array('seqcode'=>'0003','question'=>'กรุณาส่งผู้ป่วยปรึกษาวางแผนครอบครัวเพื่อได้รับการคุมกำเนิดที่มีประสิทธิภาพอย่างใดอย่างหนึ่ง ได้แก่ การทำหมัน,ฉีดยาคุม,ฝังยาคุมหรือใส่ห่วงอนามัย เนื่องจากผู้ป่วยจำเป็นต้องคุมกำเนิดก่อนได้รับรักษาด้วยการกลืนแร่และคุมกำเนิดต่อเนื่องอีกอย่างน้อย 6 เดือนหลังการรักษา','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0004'),
             array('seqcode'=>'0004','question'=>'ขอบคุณครับ/ค่ะ เมื่อผู้ป่วยได้รับการคุมกำเนิดเรียบร้อยแล้วกรุณาส่งมานัดใหม่อีกครั้งนะครับ/ค่ะ โดยเริ่มต้นพิมพ์ข้อความว่า “ขอนัดกลืนแร่” ','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0005'),
             array('seqcode'=>'0005','question'=>'กรุณารอพยาบาลโรงพยาบาลราชวิถีติดต่อกลับสักครู่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0006'),
             array('seqcode'=>'0006','question'=>'กรุณาส่งรูปใบส่งตัวที่กรอกรายละเอียดชัดเจน โดยเฉพาะตำแหน่งที่ 1, 2, 3 ตามตัวอย่างรูปด้านล่าง','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0007'),
             array('seqcode'=>'0007','question'=>'ท่านส่งรูปใบส่งตัวที่ชัดเจนเรียบร้อยแล้วใช่หรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0008'),
             array('seqcode'=>'0008','question'=>'ผู้ป่วยใช้สิทธิการรักษาเป็นประกันสังคมหรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0009'),
             array('seqcode'=>'0009','question'=>'กรุณาส่งรูปใบส่งตัวประกันสังคมที่ชัดเจน โดยเฉพาะตำแหน่งที่ 1, 2, 3, 4 พร้อมประทับตราครุฑ ตามรูปตัวอย่างด้านล่างนี้','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0010'),
             array('seqcode'=>'0010','question'=>'ท่านส่งรูปใบส่งตัวประกันสังคมชัดเจนเรียบร้อยแล้วใช่หรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0011'),
             array('seqcode'=>'0011','question'=>'กรุณาส่งรูปเอกสารหมายเลข 1 ที่กรอกรายละเอียดชัดเจนโดยเฉพาะตำแหน่งที่ 1, 2  (กรุณากรอกหรือติดสติ๊กเกอร์ ชื่อ-สกุลด้วย) ตามรูปตัวอย่างด้านล่างนี้','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0012'),
             array('seqcode'=>'0012','question'=>'ท่านส่งรูปเอกสารหมายเลข 1 ที่ชัดเจนเรียบร้อยแล้วใช่หรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0013'),
             array('seqcode'=>'0013','question'=>'ผู้ป่วยเคยมารักษาที่โรงพยาบาลราชวิถีหรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0014'),
             array('seqcode'=>'0014','question'=>'กรุณาส่งรูปบัตรประจำตัวประชาชนของผู้ป่วยที่ชัดเจนตามรูปตัวอย่างด้านล่างนี้','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0015'),
             array('seqcode'=>'0015','question'=>'ท่านส่งรูปบัตรประจำตัวประชาชนที่ชัดเจนเรียบร้อยแล้วหรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0016'),
             array('seqcode'=>'0016','question'=>'กรุณาส่งรูปใบกรอกประวัติผู้ป่วยใหม่ของโรงพยาบาลราชวิถีที่ชัดเจนโดยเฉพาะตำแหน่งที่ 1,2,....    จากแบบฟอร์มตามรูปด้านล่างนี้ (กรุณาระบุเบอร์โทรศัพท์ที่สามารถติดต่อผู้ป่วยได้ให้ชัดเจน)','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0017'),
             array('seqcode'=>'0017','question'=>'ท่านส่งรูปใบกรอกประวัติผู้ป่วยใหม่ที่ชัดเจนเรียบร้อยแล้วใช่หรือไม่','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0018'),
             array('seqcode'=>'0018','question'=>'กรุณารอพยาบาลโรงพยาบาลราชวิถีตรวจสอบข้อมูลและติดต่อกลับเพื่อแจ้งวันนัดตรวจรักษาสักครู่นะครับ/ค่ะ','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0019'),
             // array('seqcode'=>'0019','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0020'),
             // array('seqcode'=>'0020','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0021'),
             // array('seqcode'=>'0021','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0022'),
             // array('seqcode'=>'0022','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0023'),
             // array('seqcode'=>'0023','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0024'),
             // array('seqcode'=>'0024','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0025'),
             // array('seqcode'=>'0025','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0026'),
             // array('seqcode'=>'0026','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0027'),
             // array('seqcode'=>'0027','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0028'),
             // array('seqcode'=>'0028','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'1001'),
             // array('seqcode'=>'0029','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0030'),
             // array('seqcode'=>'1001','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'1002'),
             // array('seqcode'=>'1002','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'NULL'),
         ));

         DB::table('document_type')->delete();
         //insert some dummy records
         DB::table('document_type')->insert(array(
             array('document_type'=>'1','document_descript'=>'ใบส่งตัว'),
             array('document_type'=>'2','document_descript'=>'ใบส่งตัวประกันสังคม1'),
             array('document_type'=>'3','document_descript'=>'ใบส่งตัวประกันสังคม2'),
             array('document_type'=>'4','document_descript'=>'เอกสารหมายเลข 1'),
             array('document_type'=>'5','document_descript'=>'บัตรประจำตัวประชาชนของผู้ป่วย'),
             array('document_type'=>'6','document_descript'=>'ใบกรอกประวัติผู้ป่วยใหม่ของโรงพยาบาลราชวิถี'),
             // array('seqcode'=>'0025','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0026'),
             // array('seqcode'=>'0026','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0027'),
             // array('seqcode'=>'0027','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0028'),
             // array('seqcode'=>'0028','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'1001'),
             // array('seqcode'=>'0029','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'0030'),
             // array('seqcode'=>'1001','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'1002'),
             // array('seqcode'=>'1002','question'=>'','answer'=>'NULL','nexttype'=>'1','nextseqcode'=>'NULL'),
         ));


    }
}
