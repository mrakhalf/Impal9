/*==============================================================*/
/* Table: ANTRIAN                                               */
/*==============================================================*/
create table ANTRIAN 
(
   NO_ANTRIAN           VARCHAR2(15)         not null,
   ID_PASIEN            VARCHAR2(15),
   RUANG_PERIKSA        VARCHAR2(10),
   NAMA_RS_ANT          VARCHAR2(25),
   NM_DOKTER_ANT        VARCHAR2(50),
   constraint PK_ANTRIAN primary key (NO_ANTRIAN)
);

/*==============================================================*/
/* Table: DATA_REGIST                                           */
/*==============================================================*/
create table DATA_REGIST 
(
   USERNAME             VARCHAR2(20)         not null,
   PASSWORD             VARCHAR2(20),
   constraint PK_DATA_REGIST primary key (USERNAME)
);

/*==============================================================*/
/* Table: DOKTER                                                */
/*==============================================================*/
create table DOKTER 
(
   ID_DOKTER            VARCHAR2(20)         not null,
   NAMA_DOKTER          VARCHAR2(40),
   SPESIALIS            VARCHAR2(30),
   JADWAL_PRAKTIK       VARCHAR2(30),
   constraint PK_DOKTER primary key (ID_DOKTER)
);

/*==============================================================*/
/* Table: KARTU_BPJS                                            */
/*==============================================================*/
create table KARTU_BPJS 
(
   NO_BPJS              VARCHAR2(15)         not null,
   KELAS                VARCHAR2(10),
   constraint PK_KARTU_BPJS primary key (NO_BPJS)
);

/*==============================================================*/
/* Table: KLINIK                                                */
/*==============================================================*/
create table KLINIK 
(
   ID_KLINIK            VARCHAR2(15)         not null,
   NAMA_KLINIK          VARCHAR2(20),
   constraint PK_KLINIK primary key (ID_KLINIK)
);

/*==============================================================*/
/* Table: MEMBERI                                               */
/*==============================================================*/
create table MEMBERI 
(
   ID_RS                VARCHAR2(15)         not null,
   NO_ANTRIAN           VARCHAR2(15)         not null,
   constraint PK_MEMBERI primary key (ID_RS, NO_ANTRIAN)
);

/*==============================================================*/
/* Table: PASIEN                                                */
/*==============================================================*/
create table PASIEN 
(
   ID_PASIEN            VARCHAR2(15)         not null,
   NO_BPJS              VARCHAR2(15),
   NO_SURAT             VARCHAR2(15),
   USERNAME             VARCHAR2(20),
   NO_PENDAFTARAN       VARCHAR2(10),
   NAMA                 VARCHAR2(50),
   ALAMAT               VARCHAR2(70),
   JNS_KELAMIN          CHAR(3),
   USIA                 INTEGER,
   constraint PK_PASIEN primary key (ID_PASIEN)
);

/*==============================================================*/
/* Table: PENDAFTARAN_PERIKSA                                   */
/*==============================================================*/
create table PENDAFTARAN_PERIKSA 
(
   NO_PENDAFTARAN       VARCHAR2(10)         not null,
   TGL_PERIKSA          DATE,
   JAM_PERIKSA          DATE,
   NM_RS_PP             VARCHAR2(25),
   NM_DOKTER_PP         VARCHAR2(40),
   constraint PK_PENDAFTARAN_PERIKSA primary key (NO_PENDAFTARAN)
);

/*==============================================================*/
/* Table: RUMAH_SAKIT                                           */
/*==============================================================*/
create table RUMAH_SAKIT 
(
   ID_RS                VARCHAR2(15)         not null,
   ID_DOKTER            VARCHAR2(20),
   NAMA_RS              VARCHAR2(25),
   ALAMAT_RS            VARCHAR2(50),
   constraint PK_RUMAH_SAKIT primary key (ID_RS)
);

/*==============================================================*/
/* Table: SURAT_RUJUK                                           */
/*==============================================================*/
create table SURAT_RUJUK 
(
   NO_SURAT             VARCHAR2(15)         not null,
   ID_KLINIK            VARCHAR2(15),
   NO_PENDAFTARAN       VARCHAR2(10),
   TGL_BUAT             DATE,
   TGL_VALID            DATE,
   constraint PK_SURAT_RUJUK primary key (NO_SURAT)
);

alter table ANTRIAN
   add constraint FK_ANTRIAN_MENDAPAT_PASIEN foreign key (ID_PASIEN)
      references PASIEN (ID_PASIEN);

alter table MEMBERI
   add constraint FK_MEMBERI_MEMBERI_RUMAH_SA foreign key (ID_RS)
      references RUMAH_SAKIT (ID_RS);

alter table MEMBERI
   add constraint FK_MEMBERI_MEMBERI2_ANTRIAN foreign key (NO_ANTRIAN)
      references ANTRIAN (NO_ANTRIAN);

alter table PASIEN
   add constraint FK_PASIEN_MELAKUKAN_PENDAFTA foreign key (NO_PENDAFTARAN)
      references PENDAFTARAN_PERIKSA (NO_PENDAFTARAN);

alter table PASIEN
   add constraint FK_PASIEN_MEMILIKI_DATA_REG foreign key (USERNAME)
      references DATA_REGIST (USERNAME);

alter table PASIEN
   add constraint FK_PASIEN_MENERIMA_SURAT_RU foreign key (NO_SURAT)
      references SURAT_RUJUK (NO_SURAT);

alter table PASIEN
   add constraint FK_PASIEN_PUNYA_KARTU_BP foreign key (NO_BPJS)
      references KARTU_BPJS (NO_BPJS);

alter table RUMAH_SAKIT
   add constraint FK_RUMAH_SA_PRAKTEK_DOKTER foreign key (ID_DOKTER)
      references DOKTER (ID_DOKTER);

alter table SURAT_RUJUK
   add constraint FK_SURAT_RU_DIGUNAKAN_PENDAFTA foreign key (NO_PENDAFTARAN)
      references PENDAFTARAN_PERIKSA (NO_PENDAFTARAN);

alter table SURAT_RUJUK
   add constraint FK_SURAT_RU_MEMBUAT_KLINIK foreign key (ID_KLINIK)
      references KLINIK (ID_KLINIK);
INSERT INTO DOKTER VALUES('DR001','ASEP','KANKER','SENIN,RABU,SABTU'),
INSERT INTO DOKTER VALUES('DR002','KODIR','PILEK','SELASA,JUMAT,SENIN'),
INSERT INTO DOKTER VALUES('DR003','BEBEN','BATUK','SENIN,SELASA,KAMIS'),
INSERT INTO DOKTER VALUES('DR004','CECEP','GIGI','RABU,JUMAT,SABTU'),
INSERT INTO DOKTER VALUES('DR005','UMAY','BEDAH SYARAF','SENIN,SELASA,RABU,KAMIS,JUMAT'),
INSERT INTO DOKTER VALUES('DR006','HACIM','MATA','SENIN,RABU,KAMIS')

INSERT INTO ANTRIAN VALUES('ANT001','P01','R01','HERMINA','ASEP'),
INSERT INTO ANTRIAN VALUES('ANT002','P02','R02','HASAN SADIKIN','KODIR'),
INSERT INTO ANTRIAN VALUES('ANT003','P03','R03','IMMANUEL BANDUNG','BEBEN),
INSERT INTO ANTRIAN VALUES('ANT004','P04','R04','AL ISLAM','CECEP'),
INSERT INTO ANTRIAN VALUES('ANT005','P05','R05','MUHAMMADDIYAH','UMAY'),
INSERT INTO ANTRIAN VALUES('ANT006','P06','R06','ADVENT BANDUNG','HACIM')

INSERT INTO DATA_REGIST VALUES('AGUS','AGUS12345'),
INSERT INTO DATA_REGIST VALUES('GUGUN','GUGUN13572'),
INSERT INTO DATA_REGIST VALUES('SAIPUL','SAIPUL123'),
INSERT INTO DATA_REGIST VALUES('IMRON','IMRON512'),
INSERT INTO DATA_REGIST VALUES('RYAN','RYAN212'),
INSERT INTO DATA_REGIST VALUES('ANDRE','ANDRE14045')


INSERT INTO KARTU_BPJS VALUES('BPJS001','VVIP'),
INSERT INTO KARTU_BPJS VALUES('BPJS002','VIP'),
INSERT INTO KARTU_BPJS VALUES('BPJS003','KELAS1'),
INSERT INTO KARTU_BPJS VALUES('BPJS004','KELAS2'),
INSERT INTO KARTU_BPJS VALUES('BPJS005','KELAS3'),
INSERT INTO KARTU_BPJS VALUES('BPJS006','KELAS4')

INSERT INTO KLINIK VALUES('KL001','INDAH MULYA KLINIK'),
INSERT INTO KLINIK VALUES('KL002','MUTIARA CIKUTRA KLINIK'),
INSERT INTO KLINIK VALUES('KL003','BRAWIJAYA KLINIK'),
INSERT INTO KLINIK VALUES('KL004','PERTAMINA BINA MEDIKA KLINIK'),
INSERT INTO KLINIK VALUES('KL005','NETRA KLINIK'),
INSERT INTO KLINIK VALUES('KL006','RAFA KLINIK')

INSERT INTO MEMBERI VALUES('RS001','ANT001'),
INSERT INTO MEMBERI VALUES('RS002','ANT002'),
INSERT INTO MEMBERI VALUES('RS003','ANT003'),
INSERT INTO MEMBERI VALUES('RS004','ANT004'),
INSERT INTO MEMBERI VALUES('RS005','ANT005'),
INSERT INTO MEMBERI VALUES('RS006','ANT006')

INSERT INTO PASIEN VALUES('P01','BPJS001','SRT0001','AGUS','PEND01','AGUS MANTUL','KOMPLEK UJUNG BERUNG NO 6 BLOK 1','L','50'),
INSERT INTO PASIEN VALUES('P02','BPJS002','SRT0002','GUGUN','PEND02','GUGUN JABRA','JALAN RUMAH SAKIT NO 150 BLOK 15','L','42'),
INSERT INTO PASIEN VALUES('P03','BPJS003','SRT0003','SAIPUL','PEND03','SAIPUL JAMUL','JALAN CIGENDING NO 100 BLOK 4','L','33'),
INSERT INTO PASIEN VALUES('P04','BPJS004','SRT0004','IMRON','PEND04','IMRON ZAENAL','JLALAN CICENDO NO 102 BLOK 20','L','22'),
INSERT INTO PASIEN VALUES('P05','BPJS005','SRT0005','RYAN','PEND05','RYAN AKBAR','JALAN PASTEUR NO 103','L','47'),
INSERT INTO PASIEN VALUES('P06','BPJS006','SRT0006','ANDRE','PEND06','ANDRE TAMIM','JALAN DAGO NO 20','L','13')

INSERT INTO PENDAFTARAN_PERIKSA VALUES('PEND001','09:00','HERMINA','ASEP'),
INSERT INTO PENDAFTARAN_PERIKSA VALUES('PEND002','10:00','HASAN SADIKIN','KODIR'),
INSERT INTO PENDAFTARAN_PERIKSA VALUES('PEND003','15:30','IMMANUEL BANDUNG','BEBEN'),
INSERT INTO PENDAFTARAN_PERIKSA VALUES('PEND004','11:00','AL ISLAM','CECEP'),
INSERT INTO PENDAFTARAN_PERIKSA VALUES('PEND005','08:00','MUHAMMADIYAH','UMAY'),
INSERT INTO PENDAFTARAN_PERIKSA VALUES('PEND006','07:00','ADVENT BANDUNG','HACIM')

INSERT INTO RUMAH_sAKIT VALUES('RS001','DR001','HERMINA','Jalan AH Nasution No.50 Antapani Wetan'),
INSERT INTO RUMAH_sAKIT VALUES('RS002','DR002','HASAN SADIKIN','Jalan Pasteur No. 38 Kota Bandung'),
INSERT INTO RUMAH_sAKIT VALUES('RS003','DR003','IMMANUEL BANDUNG','Jalan Kopo No. 161 Kota Bandung'),
INSERT INTO RUMAH_sAKIT VALUES('RS004','DR004','AL ISLAM','Jalan Soekarno Hatta No. 644 Bandung Kota Bandung '),
INSERT INTO RUMAH_sAKIT VALUES('RS005','DR005','MUHAMMADIYAH','Jalan KH Ahmad Dahlan No. 53 Kota Bandung'),
INSERT INTO RUMAH_sAKIT VALUES('RS006','DR006','ADVENT BANDUNG','Jalan Cihampelas No. 161 Cipaganti Kota Bandung')

INSERT INTO SURAT_RUJUK VALUES('SRT0001','KL001','PEND001','2018-01-13','2018-01-14'),
INSERT INTO SURAT_RUJUK VALUES('SRT0002','KL002','PEND002','2018-01-13','2018-01-14'),
INSERT INTO SURAT_RUJUK VALUES('SRT0003','KL003','PEND003','2018-01-13','2018-01-14'),
INSERT INTO SURAT_RUJUK VALUES('SRT0004','KL004','PEND004','2018-01-13','2018-01-14'),
INSERT INTO SURAT_RUJUK VALUES('SRT0005','KL005','PEND005','2018-01-13','2018-01-14'),
INSERT INTO SURAT_RUJUK VALUES('SRT0006','KL006','PEND006','2018-01-13','2018-01-14')