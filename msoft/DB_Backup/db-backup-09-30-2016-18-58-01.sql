DROP TABLE IF EXISTS khachhang;

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL AUTO_INCREMENT,
  `congty` text NOT NULL,
  `tel` varchar(15) NOT NULL,
  `donvi` varchar(100) NOT NULL,
  `id_nv` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8;

INSERT INTO khachhang VALUES("1","Công ty TNHH SX TM DV Khách sạn Lộc Phát","84944742425","LOC PHAT","11");
INSERT INTO khachhang VALUES("2","Công ty TNHH TM và DV Rau Củ Quả Phúc Nguyên","84905132533","PHUC NGUYEN","11");
INSERT INTO khachhang VALUES("3","Công ty TNHH Thương mại KTV","84989194979","KTV","11");
INSERT INTO khachhang VALUES("4","Công ty TNHH SX XD Tâm Việt","84905180414","TAM VIET","11");
INSERT INTO khachhang VALUES("5","Công ty TNHH Thiết kế XD Phú Bảo","84906556168","PHU BAO","11");
INSERT INTO khachhang VALUES("6","CÔNG TY TNHH HÀNG HẢI HẢI PHONG","84935540236","HAI PHONG","11");
INSERT INTO khachhang VALUES("7","CÔNG TY TNHH IN ẤN QUẢNG CÁO NON NON","84914147767","NON NON","11");
INSERT INTO khachhang VALUES("8","CÔNG TY TNHH ÁNH SAO SÁNG","84935773004","ANH SAO SANG","11");
INSERT INTO khachhang VALUES("9","Cty TNHH Nguyên Hoàng KABAPAH","84977151231","KABAPAH","11");
INSERT INTO khachhang VALUES("10","Công ty tnhh TM-DV Minh Châu","84989158819","MINH CHAU","11");
INSERT INTO khachhang VALUES("11","Công ty tnhh Tý Hưng","84913431357","TY HUNG","11");
INSERT INTO khachhang VALUES("12","Cty TNHH Lợi Vinh","84905178406","LOI VINH","11");
INSERT INTO khachhang VALUES("13","Cty TNHH XD Nhật Dinh","84975971111","NHAT DINH","11");
INSERT INTO khachhang VALUES("14","DNTN VÀNG BẠC HÒA TRANG","84905166348","HOA TRANG","11");
INSERT INTO khachhang VALUES("15","DNTN Vàng Bạc Đá Quý Mỹ Nghệ Kim Ngọc","84905650979","KIM NGOC","11");
INSERT INTO khachhang VALUES("16","DNTN Hiệu Vàng Kim Liên Nha Trang","84905184650","KIM LIEN","11");
INSERT INTO khachhang VALUES("17","DNTN Kim Thanh Lịch","84907742702","THANH LICH","11");
INSERT INTO khachhang VALUES("18","Công ty TNHH TM Vải Minh Hà","84909996366","MINH HA","19");
INSERT INTO khachhang VALUES("19","Công ty tnhh Hồng Lộc NT","84905119789","HONG LOC","19");
INSERT INTO khachhang VALUES("20","Công ty TNHH MTV Thương Mại Dịch vụ Trí Thúy","84914311700","TRI THUY","19");
INSERT INTO khachhang VALUES("21","CÔNG TY TNHH CƯỜNG ĐÁ","84906203358","CUONG DA","19");
INSERT INTO khachhang VALUES("22","DNTN Vàng Đá Quý Kim Khoa","84978810910","KIM KHOA","20");
INSERT INTO khachhang VALUES("23","Công ty TNHH Quỳnh ANh Vạn Ninh","84935450471","QUYNH ANH","20");
INSERT INTO khachhang VALUES("24","CÔNG TY TNHH HẠNH MẾN","84986704949","HANH MEN","20");
INSERT INTO khachhang VALUES("25","CÔNG TY TNHH THIẾT KẾ VÀ XÂY DỰNG PHÚC CHÂU","84908508640","PHUC CHAU","20");
INSERT INTO khachhang VALUES("26","Công ty TNHH Xuân Minh-Cam Ranh","84986361368","XUAN MINH","20");
INSERT INTO khachhang VALUES("27","Công ty cổ phần thương mại và dịch vụ V.C.L","84989548546","V.C.L","20");
INSERT INTO khachhang VALUES("28","Công ty TNHH TM và DV Agrilife","84913182948","AGRILIFE","20");
INSERT INTO khachhang VALUES("29","DNTN Vàng Bạc Đá Quý Kim Khoa","841276232779","KIM KHOA","20");
INSERT INTO khachhang VALUES("30","DNTN Vàng Bạc Kim Phúc Lai Liên","84948976506","KIM PHUC LAI LIEN","20");
INSERT INTO khachhang VALUES("31","DNTN Vàng Bạc Kim Huệ Thảo","84982857375","KIM HUE THAO","20");
INSERT INTO khachhang VALUES("32","DNTN Vàng Bạc Kim Trí Hòa","84914085941","KIM TRI HOA","20");
INSERT INTO khachhang VALUES("33","DNTN Vàng Bạc Kim Anh Diệp","84903599270","KIM ANH DIEP","20");
INSERT INTO khachhang VALUES("34","DNTN Vàng Bạc Thiện Khiêm Ánh","84919428657","THIEN KHIEM ANH","20");
INSERT INTO khachhang VALUES("35","DNTN Vàng Bạc Ngọc Phúc","84993473828","NGOC PHUC","20");
INSERT INTO khachhang VALUES("36","DNTN Vàng Bạc Đức Kim Dung","84942191921","KIM DUNG","20");
INSERT INTO khachhang VALUES("37","DNTN Vàng Bạc Phú Cường Vy","84937568068","PHU CUONG VY","20");
INSERT INTO khachhang VALUES("38","DNTN Vàng Bạc Kim Oanh","84935063193","KIM OANH","20");
INSERT INTO khachhang VALUES("39","DNTN Vàng Bạc Kim Huệ","84948186186","KIM HUE","20");
INSERT INTO khachhang VALUES("40","DNTN Vàng Bạc Đá quý Kim Giang","84978595598","KIM GIANG","20");
INSERT INTO khachhang VALUES("41","DNTN Vàng Bạc Kim Khoa","84979793696","KIM KHOA","20");
INSERT INTO khachhang VALUES("42","Công ty TNHH Thiện Long Nha Trang","84971128081","THIEN LONG","5");
INSERT INTO khachhang VALUES("43","ông ty TNHH Khai Thác Điểm Đỗ Nha Trang","84944990568","DIEM DO NHA TRANG","5");
INSERT INTO khachhang VALUES("44","Công ty TNHH Phúc Lộc Nha Trang","84916139779","PHUC LOC","5");
INSERT INTO khachhang VALUES("45","Công ty TNHH SX TM DV Thiên Phú Lộc","84934000609","THIEN PHU LOC","5");
INSERT INTO khachhang VALUES("46","Công ty TNHH Big M Hoàng Minh","84961000168","MIG M HOANG MINH","5");
INSERT INTO khachhang VALUES("47","Công ty CP BĐS Việt Đức","84935888411","VIET DUC","5");
INSERT INTO khachhang VALUES("48","DNTN An Trang TP","84914152116","AN TRANG","5");
INSERT INTO khachhang VALUES("49","Công ty TNHH Quốc hảo","84986885079","QUOC HAO","5");
INSERT INTO khachhang VALUES("50","CÔNG TY TNHH TM DV ITS NHA TRANG","84905448988","ITS","5");
INSERT INTO khachhang VALUES("51","Công ty TNHH Du Lịch Trần Gia Bảo","84989682968","TRAN GIA BAO","5");
INSERT INTO khachhang VALUES("52","Công ty TNHH chế biến Thủy sản Hoàng Phát","84915333706","HOANG PHAT","5");
INSERT INTO khachhang VALUES("53","Doanh Nghiệp Tư Nhân Vàng Ngọc Mai Nha Trang","841263663979","NGOC MAI","5");
INSERT INTO khachhang VALUES("54","Doanh Nghiệp Tư Nhân Dịch Vụ Khách Sạn Quỳnh Trang","84989447907","QUYNH TRANG","5");
INSERT INTO khachhang VALUES("55","Công Ty TNHH Một Thành Viên Trung Hiếu Khánh Hòa","84903593239","TRUNG HIEU","5");
INSERT INTO khachhang VALUES("56","DNTN Phước Chương","84913463538","PHUOC CHUONG","5");
INSERT INTO khachhang VALUES("57","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Thắng","841285355240","NGOC THANG","5");
INSERT INTO khachhang VALUES("58","Doanh Nghiệp Tư Nhân Hiệu Vàng Kim Phương","84583883667","KIM PHUONG","5");
INSERT INTO khachhang VALUES("59","Công ty TNHH Hoàn Thiên An","84938021383","HOAN THIEN AN","18");
INSERT INTO khachhang VALUES("60","Công ty tnhh TMDV Vĩnh Gia","84914030172","VINH GIA","18");
INSERT INTO khachhang VALUES("61","Công ty TNHH Đại lý Vé số Vân Sơn","84935411732","VAN SON","18");
INSERT INTO khachhang VALUES("62","CÔNG TY TNHH TM & DV THÁI QUYÊN","84932528582","THAI QUYEN","18");
INSERT INTO khachhang VALUES("63","DNTN Hiệu Vàng Bảo Ngân","84913444492","BAO NGAN","22");
INSERT INTO khachhang VALUES("64","Doanh Nghiệp Tư Nhân Kim Tùng Chi","84914199831","KIM TUNG CHI","22");
INSERT INTO khachhang VALUES("65","DOANH NGHIỆP TƯ NHÂN SÁNG KH","84903959726","SANG KH","22");
INSERT INTO khachhang VALUES("66","Công ty TNHH Sản xuất Và Thương Mại ATP","84942035733","ATP","22");
INSERT INTO khachhang VALUES("67","Công ty TNHH Tư vấn Giải pháp Công Nghệ Thông tin","84978595499","GIAI PHAP CNTT","22");
INSERT INTO khachhang VALUES("68","Công ty TNHH TM&DV TDP Khánh Hòa","84911449497","TDP","22");
INSERT INTO khachhang VALUES("69","DNTN Trường Phát","84913461777","TRUONG PHAT","22");
INSERT INTO khachhang VALUES("70","Công ty TNHH Thiên Phú Nha Trang","84905685353","THIEN PHU","22");
INSERT INTO khachhang VALUES("71","Công ty TNHH Fiero Việt Nam","84917879338","FIERO","22");
INSERT INTO khachhang VALUES("72","Công ty TNHH Thương Mại và Dịch Vụ Thiên Sơn","84993699677","THIEN SON","22");
INSERT INTO khachhang VALUES("73","Công ty TNHH Thương Mại dịch vụ QC Tấn Phú Sang","84919946876","TAN PHU SANG","22");
INSERT INTO khachhang VALUES("74","Cty TNHH Vàng, Bạc , Đá quý Dũng Ninh Hòa KH","84913482719","DUNG NINH HOA","22");
INSERT INTO khachhang VALUES("75","Công ty TNHH MTV Du Lịch Thương mại Hòa Bình","84988699797","HOA BINH","22");
INSERT INTO khachhang VALUES("76","DNTN Vàng Ngọc Thơ","84989496726","NGOC THO","22");
INSERT INTO khachhang VALUES("77","DNTN Vàng Bạc Hàn Tín","84905550652","HAN TIN","22");
INSERT INTO khachhang VALUES("78","CÔNG TY TNHH NGỌC BÍCH NB","84993699677","NGOC BICH","22");
INSERT INTO khachhang VALUES("79","DNTN Vàng Bạc Ngọc Bính","84982299557","NGOC BINH","22");
INSERT INTO khachhang VALUES("80","DNTN TM Vàng bạc Kim Hương","841663316329","KIM HUONG","22");
INSERT INTO khachhang VALUES("81","DNTN HIỆU VÀNG VĂN DIỀN","841694450965","VAN DIEN","22");
INSERT INTO khachhang VALUES("82","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Hoa","84975714660","NGOC HOA","22");
INSERT INTO khachhang VALUES("83","DNTN Phương Thông Khánh Hòa","841237935774","PHUONG THONG","22");
INSERT INTO khachhang VALUES("84","DNTN VÀNG NGỌC QUỐC KHANG","84913444067","NGOC QUOC KHANG","22");
INSERT INTO khachhang VALUES("85","DNTN TM vàng Thành Tín","84968010323","THANH TIN","22");
INSERT INTO khachhang VALUES("86","DNTN Hiệu vàng Võ Dũng","84932699768","VO DUNG","22");
INSERT INTO khachhang VALUES("87","DNTN Ngọc Minh khánh hòa","84963692065","NGOC MINH","22");
INSERT INTO khachhang VALUES("88","Công ty TNHH TM DV Blooming Việt Nam","84983111326","BLOOMING","4");
INSERT INTO khachhang VALUES("89","DNTN Du lịch Cát Lộc","84989035457","CAT LOC","4");
INSERT INTO khachhang VALUES("90","Công ty TNHH TM& DV Hải Tâm","84969507125","HAI TAM","4");
INSERT INTO khachhang VALUES("91","Công ty TNHH Beach City","84905789229","BEACH CITY","4");
INSERT INTO khachhang VALUES("92","Công ty TNHH TM & DV Gia Bách","84903295880","GIA BACH","4");
INSERT INTO khachhang VALUES("93","Công ty TNHH XD Tân Minh Nha Trang","84902858271","TAN MINH","4");
INSERT INTO khachhang VALUES("94","Công ty TNHH Tư vấn Xây dựng Tân Khánh","84901935468","TAN KHANH","4");
INSERT INTO khachhang VALUES("95","Công ty TNHH TM DV Trần Chương","84934815019","TRAN CHUONG","4");
INSERT INTO khachhang VALUES("96","Công ty TNHH Du Lịch Mây Ngũ Sắc","84903229568","MAY NGU SAC","4");
INSERT INTO khachhang VALUES("97","Công ty TNHH DL & TM Thịnh Vượng","84967904959","THINH VUONG","4");
INSERT INTO khachhang VALUES("98","Công ty TNHH AISHA V.X","84977369448","AISHA V.X","4");
INSERT INTO khachhang VALUES("99","Công ty TNHH Du lịch Phát triển Fashion Việt Nam","84983991404","FASHION","4");
INSERT INTO khachhang VALUES("100","Công ty TNHH Khang Thái Vietnam Travel","84947138819","KHANG THAI","4");
INSERT INTO khachhang VALUES("101","Tô Quang Sáng- Công ty TNHH Xây Dựng Sao Sáng","84933135479","SAO SANG","4");
INSERT INTO khachhang VALUES("102","CÔNG TY TNHH DV TM CẢNH QUAN AN BÌNH","84917369911","CQ AN BINH","4");
INSERT INTO khachhang VALUES("103","DNTN SX TM & DV Toàn Hưng","84913606489","TOAN HUNG","4");
INSERT INTO khachhang VALUES("104","Công ty TNHHXD - Điện - TM Hòa Khánh","84905007797","HOA KHANH","4");
INSERT INTO khachhang VALUES("105","Công ty CP Dịch vụ Thuê xe Phú Gia","84971128081","PHU GIA","4");
INSERT INTO khachhang VALUES("106","Công ty TNHH Du Lịch Hoa Nhài","84919150475","HOA NHAI","4");
INSERT INTO khachhang VALUES("107","Công ty TNHH Quảng cáo Trường Thiên Phát","84915218008","TRUONG THIEN PHAT","16");
INSERT INTO khachhang VALUES("108","Công ty TNHH Đầu tư XD và KD BĐS Điền Lộc Phát","84909069416","DIEN LOC PHAT","16");
INSERT INTO khachhang VALUES("109","Công ty TNHH Việt Trí Quang","84905222202","VIET TRI QUANG","16");
INSERT INTO khachhang VALUES("110","Công ty TNHH Thuốc Y Học Cổ truyền Vạn Lộc","84939613771","VAN LOC","16");
INSERT INTO khachhang VALUES("111","Công ty TNHH Đầu tư Tri Thức Việt","84913947077","TRI THUC VIET","16");
INSERT INTO khachhang VALUES("112","Công ty TNHH Trường Ý","84914050879","TRUONG Y","16");
INSERT INTO khachhang VALUES("113","Công ty TNHH TM HQ Nha Trang","84993248439","HQ","16");
INSERT INTO khachhang VALUES("114","Công ty TNHH TM và DV Bạn Của Tôi","84915624235","BAN CUA TOI","16");
INSERT INTO khachhang VALUES("115","CÔNG TY TNHH SEN SPA","84908258121","SEN SPA","16");
INSERT INTO khachhang VALUES("116","CÔNG TY TNHH THƯƠNG MẠI BẢO TÍN PHÁT","84903520778","BAO TIN PHAT","16");
INSERT INTO khachhang VALUES("117","Công ty TNHH Vận tải Minh Vũ","841202380347","MINH VU","16");
INSERT INTO khachhang VALUES("118","Cty TNHH Trúc Nguyễn","84905474247","TRUC NGUYEN","16");
INSERT INTO khachhang VALUES("119","Công ty tnhh Phúc Studio","84935774242","PHUC STUDIO","16");
INSERT INTO khachhang VALUES("120","CÔNG TY TNHH BILLIARDS HẢI ÂU","84903540444","HAI AU","16");
INSERT INTO khachhang VALUES("121","Công ty tnhh thủy sản An Bình","84917369911","AN BINH","16");
INSERT INTO khachhang VALUES("122","DNTN AN Tín Nha Trang","84905110130","AN TIN","16");
INSERT INTO khachhang VALUES("123","DNTN Vàng Oanh Thắng","84933455558","OANH THANG","16");
INSERT INTO khachhang VALUES("124","DNTN Thân thiết","841648025555","THAN THIET","16");
INSERT INTO khachhang VALUES("125","DNTN Hiệu Vàng Khánh Dũng","841225515016","KHANH DUNG","16");
INSERT INTO khachhang VALUES("126","DNTN Hiệu Vàng Huỳnh Mai","84983307454","HUYNH MAI","16");
INSERT INTO khachhang VALUES("127","DNTN Hiệu Vàng Ngọc Duy","84984390899","NGOC DUY","16");
INSERT INTO khachhang VALUES("128","Công ty TNHH MTV Thuận Thành","84905203784","THUAN THANH","16");
INSERT INTO khachhang VALUES("129","Cty GD Thanh Thảo","84933860479","THANH THAO","16");
INSERT INTO khachhang VALUES("130","Công ty TNHH TM và XD Sky","84933988368","SKY","21");
INSERT INTO khachhang VALUES("131","DNTN Vàng Phát Đạt","84935151280","PHAT DAT","21");
INSERT INTO khachhang VALUES("132","Công ty TNHH DV TM và SX Nam Đồng","84918259515","NAM DONG","21");
INSERT INTO khachhang VALUES("133","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ VIỄN THÔNG TUẤN HÙNG","84913433456","TUAN HUNG","21");
INSERT INTO khachhang VALUES("134","CÔNG TY TNHH DẦU NHỚT AN KHANG","84919712374","AN KHANG","21");
INSERT INTO khachhang VALUES("135","Công ty TNHH Dịch vụ In Ấn - Photocopy Sao Mai Diên Khánh","841688117468","SAO MAI","21");
INSERT INTO khachhang VALUES("136","Công ty TNHH Mỹ Tâm NT","84915802160","MY TAM","21");
INSERT INTO khachhang VALUES("137","Công ty TNHH Hoàng Yến NT","84989079672","HOANG YEN","21");
INSERT INTO khachhang VALUES("138","Công ty TNHH Công nghệ Sinh học Biozyme","84986011756","BIOZYME","21");
INSERT INTO khachhang VALUES("139","Công Ty TNHH Cơ Khí Đại Hoàng Phát","84987916330","DAI HOANG PHAT","21");
INSERT INTO khachhang VALUES("140","Công Ty TNHH Bảo Gia An NT","84988335339","BAO GIA AN","21");
INSERT INTO khachhang VALUES("141","Công ty TNHH Hồng Trung NT","841229847873","HONG TRUNG","21");
INSERT INTO khachhang VALUES("142","DNTN Vàng Bạc Ngọc Huyền","841682555928","NGOC HUYEN","21");
INSERT INTO khachhang VALUES("143","DNTN Cơ khí Quỳnh Anh","841697071832","QUYNH ANH","21");
INSERT INTO khachhang VALUES("144","Doanh Nghiệp Tư Nhân Vàng Bạc Tân Mỹ","84905331227","TAN MY","21");
INSERT INTO khachhang VALUES("145","DNTN Vàng Bạc Ngọc Duy","84984390899","NGOC DUY","21");
INSERT INTO khachhang VALUES("146","DNTN Vàng Bạc Sơn Nữ","84989577242","SON NU","21");
INSERT INTO khachhang VALUES("147","DNTN Vàng Bạc Kim Tuấn","84905515378","KIM TUAN","21");
INSERT INTO khachhang VALUES("148","DNTN Vàng Bạc Kim Út","841696843514","KIM UT","21");
INSERT INTO khachhang VALUES("149","DNTN Kim Phát Khánh Hòa","84946062467","KIM PHAT","21");
INSERT INTO khachhang VALUES("150","DNTN Vàng Bạc Kim Linh","84935503249","KIM LINH","21");
INSERT INTO khachhang VALUES("151","DNTN Vàng Bạc Kim Tuấn Vũ","841228528344","KIM TUAN VU","21");
INSERT INTO khachhang VALUES("152","DNTN Kinh doanh Vàng bạc Anh Thế","84905107033","ANH THE","21");
INSERT INTO khachhang VALUES("153","DNTN Vàng Bạc Ngọc Hưng","84905065379","NGOC HUNG","21");
INSERT INTO khachhang VALUES("154","Công ty TNHH Đầu tư Phát Triển Thành Nhân","84914560822","THANH NHAN","15");
INSERT INTO khachhang VALUES("155","Công ty CP Sealife","841222958890","SEALIFE","15");
INSERT INTO khachhang VALUES("156","DNTN Nga","84915802125","DNTN NGA","15");
INSERT INTO khachhang VALUES("157","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ DU LỊCH BLUE VIỆT","84983111326","BLUE VIET","15");
INSERT INTO khachhang VALUES("158","Công ty TNHH TM ĐT Trương Gia Phát","84983218393","TRUONG GIA PHAT","15");
INSERT INTO khachhang VALUES("159","Công ty TM&DV IZT","84911392255","IZT","15");
INSERT INTO khachhang VALUES("160","Công ty tnhh Thiên Kim Phát","84914455881","THIEN KIM PHAT","15");
INSERT INTO khachhang VALUES("161","Công ty TNHH Căn Tin Bệnh Viện","841263627966","CAN TIN BENH VIEN","15");
INSERT INTO khachhang VALUES("162","Công ty tnhh Hiển Bình","84913433016","HIEN BINH","15");
INSERT INTO khachhang VALUES("163","Công Ty CP Green Life","84914811949","GREEN LIFE","15");
INSERT INTO khachhang VALUES("164","cty CP Tôn thép Minh Quang","84905142197","MINH QUANG","7");
INSERT INTO khachhang VALUES("165","Công ty TNHH Bắc Xiêm","84903359640","BAC XIEM","7");
INSERT INTO khachhang VALUES("166","Công ty TNHH Thế Giới Phụ Tùng","841282577799","THE GIOI PHU TUNG","7");
INSERT INTO khachhang VALUES("167","Công ty TNHH Sự Kiện Tour & Team","84944555197","TOUR&TEAM","7");
INSERT INTO khachhang VALUES("168","Công ty TNHH Dịch vụ Du Lịch B&B","841276066360","B&B","7");
INSERT INTO khachhang VALUES("169","CÔNG TY TNHH DỊCH VỤ DU LỊCH NHA TRANG","84934753879","DU LICH NHA TRANG","7");
INSERT INTO khachhang VALUES("170","Công ty TNHH Căn hộ Du Lịch Làng Sen Nha Trang","841222779778","LANG SEN","7");
INSERT INTO khachhang VALUES("171","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ DU LỊCH IHOME TEAM","84976400474","IHOME TEAM","7");
INSERT INTO khachhang VALUES("172","Công ty TNHH OPALUS H&T","84918250512","OPALUS H&T","7");
INSERT INTO khachhang VALUES("173","Công ty CP Tư vấn XD và DV Đô thị Nha Trang","84943689966","DO THI NHA TRANG","7");
INSERT INTO khachhang VALUES("174","Công ty TNHH Viễn Thông Tin Học VMS","84948002202","VMS","7");
INSERT INTO khachhang VALUES("175","Công ty TNHH Điện Lạnh Hòa Tam Phát","84969090146","HOA TAM PHAT","15");
INSERT INTO khachhang VALUES("176","Công ty TNHH Cheers","84905574490","CHEERS","15");
INSERT INTO khachhang VALUES("177","Công ty TNHH TM&DV Hoàng Phúc","84979275798","HOANG PHUC","15");
INSERT INTO khachhang VALUES("178","DNTN Vàng bạc Đá quý Ngọc Hoa","84905456599","NGOC HOA","23");
INSERT INTO khachhang VALUES("179","Doanh Nghiệp Tư Nhân Minh Tiến Nha Trang","84935188852","MINH TIEN","23");
INSERT INTO khachhang VALUES("180","DNTN Hiệu Vàng Ngọc Hương Anh","84905882898","NGOC HUONG ANH","23");
INSERT INTO khachhang VALUES("181","Doanh Nghiệp Tư Nhân Kim Vân 2 BT","84935663195","KIM VAN 2BT","23");
INSERT INTO khachhang VALUES("182","Doanh Nghiệp Tư Nhân Hiệu Vàng Xuân Thảo","84913410803","XUAN THAO","23");
INSERT INTO khachhang VALUES("183","Công ty TNHH Phần Mềm BG","84915780794","BG","13");
INSERT INTO khachhang VALUES("184","Công ty TNHH Dịch Vụ Du Lịch Phúc Gia","84913461922","PHUC GIA","13");
INSERT INTO khachhang VALUES("185","Công ty TNHH Thương Mại và Du Lịch Việt Úc","84903178664","VIET UC","13");
INSERT INTO khachhang VALUES("186","Công ty TNHH Khách sạn& Du lịch Hoa Tulip","84914521338","HOA TULIP","13");
INSERT INTO khachhang VALUES("187","DNTN HOÀNG TRINH","84905818015","HOANG TRINH","13");
INSERT INTO khachhang VALUES("188","Công ty TNHH Đầu tư Khách sạn Du lịch Hoàng Long","841682630668","HOANG LONG","13");
INSERT INTO khachhang VALUES("189","Công ty TNHH Khách Sạn Trăng Xanh","84987919196","TRANG XANH","13");
INSERT INTO khachhang VALUES("190","Công ty TNHH Trà My Khánh Hòa","84905714578","TRA MY","13");
INSERT INTO khachhang VALUES("191","Công ty TNHH Cát Minh Nha Trang","84905103793","CAT MINH","13");
INSERT INTO khachhang VALUES("192","CN Cty Trương Gia Phát (Grill Garden)","84903584058","GRILL GARDEN","13");
INSERT INTO khachhang VALUES("193","Công Ty TNHH Thiên Phước Hưng","84905119111","THIEN PHUOC HUNG","13");
INSERT INTO khachhang VALUES("194","Công ty TNHH TM DV Tấn Lợi","84913472339","TAN LOI","13");
INSERT INTO khachhang VALUES("195","Công ty TNHH M Lounge","84903584058","M LOUNGE","13");
INSERT INTO khachhang VALUES("196","Công ty TNHH Vườn Nướng","84903584058","VUON NUONG","13");
INSERT INTO khachhang VALUES("197","DNTN Vàng Bạc Năm Vĩnh Tường","841688322245","5 VINH TUONG","13");
INSERT INTO khachhang VALUES("198","Công Ty TNHH Một Thành Viên LaVu Residence","84989399695","LAVU","13");
INSERT INTO khachhang VALUES("199","DNTN Vàng Bạc Ngọc Hà","841224488440","NGOC HA","13");
INSERT INTO khachhang VALUES("200","DNTN Vàng Bạc Hồng Bích","84905380216","HONG BICH","13");
INSERT INTO khachhang VALUES("201","CÔNG TY TNHH MTV Tiếng Anh THÔNG THÁI IMEA","841224456890","THONG THAI","13");
INSERT INTO khachhang VALUES("202","DNTN Quang Kim Hưng","84935510060","QUANG KIM HUNG","13");
INSERT INTO khachhang VALUES("203","DNTN Ngọc Hạo","84903584058","NGOC HAO","13");
INSERT INTO khachhang VALUES("204","DNTN Hiệu Vàng Kim Minh NT","841657287234","KIM MINH","13");
INSERT INTO khachhang VALUES("205","DNTN Hoàng Tảo","84979731179","HOANG TAO","13");
INSERT INTO khachhang VALUES("206","Công ty TNHH Vietsea Hotel Inc","841662379152","VIETSEA","13");
INSERT INTO khachhang VALUES("207","Công ty TNHH Đắc Nhân Tâm 777 NT","84985099777","DAC NHAN TAM","13");
INSERT INTO khachhang VALUES("208","Công ty TNHH Golife","84964851027","GOLIFE","16");
INSERT INTO khachhang VALUES("209","DNTN ABM Nha Trang","84916810479","ABM","23");


DROP TABLE IF EXISTS nhanvien;

CREATE TABLE `nhanvien` (
  `id_nv` int(11) NOT NULL AUTO_INCREMENT,
  `manv` varchar(100) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `pb` varchar(10) NOT NULL,
  `level` int(10) NOT NULL,
  PRIMARY KEY (`id_nv`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO nhanvien VALUES("1","admin","b4b727d34c2d4d4de1274899fccf3dd3","Administrator","1","1");
INSERT INTO nhanvien VALUES("2","EMC001","202cb962ac59075b964b07152d234b70","Lê Văn Viên","1","1");
INSERT INTO nhanvien VALUES("3","EMC002","123","Nguyễn Thị Kim Dung","5","3");
INSERT INTO nhanvien VALUES("4","EMC003","ce4ee57b7fbaaa333f14ec87bbc16cfa","Nguyễn Thị Nhung","3","3");
INSERT INTO nhanvien VALUES("5","EMC006","c080115f26ca9034b17591ca5174435b","Trần Thị Mai Hoa","3","3");
INSERT INTO nhanvien VALUES("6","EMC019","123","Võ Thị Lệ","2","3");
INSERT INTO nhanvien VALUES("7","EMC025","21cc16cad1354481fb7e89f36dbd1d83","Nguyễn Thị Thanh Thúy","3","3");
INSERT INTO nhanvien VALUES("8","EMC030","123","Nguyễn Thị Kim Dung","6","3");
INSERT INTO nhanvien VALUES("9","EMC035","123","Nguyễn Anh Huy","2","3");
INSERT INTO nhanvien VALUES("10","EMC036","123","Nguyễn Thị Hà","6","3");
INSERT INTO nhanvien VALUES("11","EMC037","7d3eea6286e4df00e2cc12ae77845edf","Nguyễn Thùy An","3","3");
INSERT INTO nhanvien VALUES("12","EMC043","123","Nguyễn Thị Mỹ Linh","5","3");
INSERT INTO nhanvien VALUES("13","EMC044","3117f07892c826f8a7d49bd9d0a2fe94","Nguyễn Thị Tú","3","3");
INSERT INTO nhanvien VALUES("14","EMC049","123","Nguyễn Thị Mỹ Anh","2","3");
INSERT INTO nhanvien VALUES("15","EMC053","5fc8c44f139d17efed2c7db9f9edafcc","Trần Ngọc Đan Thùy","3","3");
INSERT INTO nhanvien VALUES("16","EMC054","c867fc49b1efeba9c8c8fee3094a847f","Nguyễn Thị Quyên","3","3");
INSERT INTO nhanvien VALUES("17","EMC057","123","Nguyễn Thành Trung","4","3");
INSERT INTO nhanvien VALUES("18","EMC058","587b39752f2609b61dc9c3c9565a4ea3","Lã Thị Nga","3","3");
INSERT INTO nhanvien VALUES("19","EMC059","77e14822b95f7032b07a50f3381869c3","Hoàng Văn Cương","3","2");
INSERT INTO nhanvien VALUES("20","EMC060","95c67d5965abf92d3710e681fdf1a7b0","Bùi Thị Hoa","3","3");
INSERT INTO nhanvien VALUES("21","EMC061","4801ab2d469b048ebc27bfa19b0c91fd","Trương Ngọc Thảo","3","3");
INSERT INTO nhanvien VALUES("22","EMC062","3cd7711ce18b8e698f5056d4f353897d","Nguyễn Nhật Thùy Nguyên","3","3");
INSERT INTO nhanvien VALUES("23","EMC069","fd573588a4c88330049ec8488ba35199","Bạch Nữ Thùy Trang","3","3");


DROP TABLE IF EXISTS phongban;

CREATE TABLE `phongban` (
  `id_pb` int(11) NOT NULL AUTO_INCREMENT,
  `mapb` varchar(50) NOT NULL,
  `phongban` varchar(200) NOT NULL,
  PRIMARY KEY (`id_pb`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO phongban VALUES("1","admin","Administrator");
INSERT INTO phongban VALUES("2","kd","Kinh Doanh");
INSERT INTO phongban VALUES("3","kt","Kế Toán");
INSERT INTO phongban VALUES("4","it","IT(Infomations Technology)");
INSERT INTO phongban VALUES("5","pl","Pháp Lý");
INSERT INTO phongban VALUES("6","ns","Nhân Sự");


DROP TABLE IF EXISTS thutuvan;

CREATE TABLE `thutuvan` (
  `id_thutuvan` int(11) NOT NULL AUTO_INCREMENT,
  `congty` varchar(200) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `donvi` varchar(100) NOT NULL,
  `id_nv` varchar(50) NOT NULL,
  `tgian` varchar(100) NOT NULL,
  `dt` varchar(200) NOT NULL,
  `vat` varchar(200) NOT NULL,
  `ln` varchar(200) NOT NULL,
  `tndn` varchar(200) NOT NULL,
  `tuvan` text NOT NULL,
  `thang` int(2) NOT NULL,
  `nam` int(4) NOT NULL,
  PRIMARY KEY (`id_thutuvan`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8;

INSERT INTO thutuvan VALUES("21","Công ty TNHH Thiện Long Nha Trang","84971128081","THIEN LONG","5","T7/2016","3,3ty","253,5tr","","","Bo sung quyet toan cong trinh","8","2016");
INSERT INTO thutuvan VALUES("27","DNTN An Trang TP","84914152116","AN TRANG","5","T7/2016","155tr","6,85tr","","","","8","2016");
INSERT INTO thutuvan VALUES("28","Công ty TNHH Quốc hảo","84986885079","QUOC HAO","5","T7/2016","23tr","-4,7tr","-2,7tr","0","","8","2016");
INSERT INTO thutuvan VALUES("30","Công ty TNHH Du Lịch Trần Gia Bảo","84989682968","TRAN GIA BAO","5","T7/2016","","","","","bo sung chung tu ngan hang","8","2016");
INSERT INTO thutuvan VALUES("31","Công ty TNHH chế biến Thủy sản Hoàng Phát","84915333706","HOANG PHAT","5","T7/2016","953,5tr","91,5tr","-17,7","0","bo sung chung tu ngan hang","8","2016");
INSERT INTO thutuvan VALUES("32","Doanh Nghiệp Tư Nhân Vàng Ngọc Mai Nha Trang","841263663979","NGOC MAI","5","T7/2016","5,1ty","7,8tr","3,4tr","0,7tr","bo sung chung tu ngan hang","8","2016");
INSERT INTO thutuvan VALUES("33","Doanh Nghiệp Tư Nhân Dịch Vụ Khách Sạn Quỳnh Trang","84989447907","QUYNH TRANG","5","T7/2016","10tr","0,7tr","0,77tr","0,16tr","bo sung chung tu ngan hang","8","2016");
INSERT INTO thutuvan VALUES("34","Công Ty TNHH Một Thành Viên Trung Hiếu Khánh Hòa","84903593239","TRUNG HIEU","5","T7/2016","1,65ty","0","94tr","18,8tr","","8","2016");
INSERT INTO thutuvan VALUES("35","DNTN Vàng bạc Đá quý Ngọc Hoa","84905456599","NGOC HOA","23","T7/2016","177tr","1.3tr","-11tr","0","bo sung chung tu ngan hang","8","2016");
INSERT INTO thutuvan VALUES("36","DNTN Phước Chương","84913463538","PHUOC CHUONG","5","T7/2016","125,7tr","1,9tr","23","0,9tr","bo sung chung tu ngan hang","8","2016");
INSERT INTO thutuvan VALUES("37","Doanh Nghiệp Tư Nhân Minh Tiến Nha Trang","84935188852","MINH TIEN","23","T7/2016","225tr","2,5tr","-5tr","","B.sung chung tu, sao ke ngan hang tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("38","DNTN Hiệu Vàng Ngọc Hương Anh","84905882898","NGOC HUONG ANH","23","T7/2016","1,077tr","2,6tr","-809ng","","B.sung chung tu, sao ke NH tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("39","Doanh Nghiệp Tư Nhân Kim Vân 2 BT","84935663195","KIM VAN 2BT","23","T7/2016","401tr","1,5tr","-15tr","","B.sung chung tu, sao ke ngan hang tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("40","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Thắng","841285355240","NGOC THANG","5","T7/2016","248tr","1,73tr","0,87tr","0,2tr","B.sung chung tu, sao ke NH tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("41","Doanh Nghiệp Tư Nhân Hiệu Vàng Xuân Thảo","84913410803","XUAN THAO","23","T7/2016","1,118tr","1,4tr","-5tr","","B.sung chung tu, sao ke ngan hang tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("50","Công ty TNHH Điện Lạnh Hòa Tam Phát","84969090146","HOA TAM PHAT","15","T7/2016","8,6tr","864ng","-12tr","","","8","2016");
INSERT INTO thutuvan VALUES("52","Công ty TNHH Cheers","84905574490","CHEERS","15","T7/2016","31tr","935ng","-4,4tr","","BS chung tu, sao ke ngan hang T6 den T9","8","2016");
INSERT INTO thutuvan VALUES("58","Công ty TNHH Thương mại KTV","84989194979","KTV","11","T7/2016","","","","","Bo sung hop dong, bb nghiem thu, thanh ly hop dong, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("59","Công ty TNHH SX XD Tâm Việt","84905180414","TAM VIET","11","T7/2016","","","","","B.sung h.dong, bb nghiem thu, thanh ly h.dong, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("60","Công ty TNHH Thiết kế XD Phú Bảo","84906556168","PHU BAO","11","T7/2016","","","","","Bo sung CMND nhan cong, ty le pha tron b.tong, so phu NH T1-T9","8","2016");
INSERT INTO thutuvan VALUES("64","Cty TNHH Nguyên Hoàng KABAPAH","84977151231","KABAPAH","11","T7/2016","36,7tr","1,1tr","18,5tr","3,7tr","Bo sung CMND nhan vien phu bep, so phu NH","8","2016");
INSERT INTO thutuvan VALUES("65","Công ty tnhh TM-DV Minh Châu","84989158819","MINH CHAU","11","T7/2016","1173,9tr","-134tr","133tr","16,6tr","Bo sung hop dong thue van chuyen","8","2016");
INSERT INTO thutuvan VALUES("66","Công ty tnhh Tý Hưng","84913431357","TY HUNG","11","T7/2016","63,6tr","2tr","25tr","","Chu dong doi chieu kho de lay hoa don dau vao day du","8","2016");
INSERT INTO thutuvan VALUES("67","Cty TNHH Lợi Vinh","84905178406","LOI VINH","11","T7/2016","172tr","1,3tr","47tr","9,4tr","Nhac nho nha cung cap xuat hoa don day du","8","2016");
INSERT INTO thutuvan VALUES("68","Cty TNHH XD Nhật Dinh","84975971111","NHAT DINH","11","T7/2016","437tr","13,9tr","59,1tr","11,8tr","Lam hop dong,BB nghiem thu cho tung h.don","8","2016");
INSERT INTO thutuvan VALUES("69","DNTN VÀNG BẠC HÒA TRANG","84905166348","HOA TRANG","11","T7/2016","225,8tr","2,2tr","-7tr","","","8","2016");
INSERT INTO thutuvan VALUES("70","DNTN Vàng Bạc Đá Quý Mỹ Nghệ Kim Ngọc","84905650979","KIM NGOC","11","T7/2016","228tr","3,1tr","-4,8tr","","Bo sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("71","DNTN Hiệu Vàng Kim Liên Nha Trang","84905184650","KIM LIEN","11","T7/2016","168tr","2tr","-0,9tr","","","8","2016");
INSERT INTO thutuvan VALUES("72","DNTN Kim Thanh Lịch","84907742702","THANH LICH","11","T7/2016","2045,7tr","4tr","49tr","","Bo sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("74","Công ty TNHH Dịch Vụ Du Lịch Phúc Gia","84913461922","PHUC GIA","13","T7/2016","13,4tr","-35,9tr","-47tr","","Bo sung ctu, sao ke NH tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("75","Công ty TNHH Thương Mại và Du Lịch Việt Úc","84903178664","VIET UC","13","T7/2016","24,9tr","-29,6tr","-3,7tr","","B.sung Hop dong chi tiet tung Tour","8","2016");
INSERT INTO thutuvan VALUES("77","DNTN HOÀNG TRINH","84905818015","HOANG TRINH","13","T7/2016","758,6tr","-392,5tr","53,8tr","","","8","2016");
INSERT INTO thutuvan VALUES("79","Công ty TNHH Khách Sạn Trăng Xanh","84987919196","TRANG XANH","13","T7/2016","74,1tr","-5,9tr","38,9tr","","B.sung ctu, sao ke NH tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("80","Công ty TNHH Trà My Khánh Hòa","84905714578","TRA MY","13","T7/2016","198,2tr","38,1tr","-51tr","","","8","2016");
INSERT INTO thutuvan VALUES("81","Công ty TNHH Cát Minh Nha Trang","84905103793","CAT MINH","13","T7/2016","59,1tr","-348,3tr","-47,9tr","","B.sung ctu, sao ke NH tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("82","CN Cty Trương Gia Phát (Grill Garden)","84903584058","GRILL GARDEN","13","T7/2016","289,1tr","17,67tr","0,8tr","","K.tra su c.xac HĐ dau vao truoc khi nhan","8","2016");
INSERT INTO thutuvan VALUES("83","Công Ty TNHH Thiên Phước Hưng","84905119111","THIEN PHUOC HUNG","13","T7/2016","13,6tr","-6,01tr","-0,6tr","","B.sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("87","DNTN Vàng Bạc Năm Vĩnh Tường","841688322245","5 VINH TUONG","13","T7/2016","771,8tr","2,28tr","-5,2tr","","B.sung CMND nv THINH; TRUNG; NHA","8","2016");
INSERT INTO thutuvan VALUES("88","Công Ty TNHH Một Thành Viên LaVu Residence","84989399695","LAVU","13","T7/2016","67,6tr","3,38tr","11,8tr","2,36tr","B.sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("89","DNTN Vàng Bạc Ngọc Hà","841224488440","NGOC HA","13","T7/2016","33,9tr","0,457tr","-1,08tr","","","8","2016");
INSERT INTO thutuvan VALUES("90","DNTN Vàng Bạc Hồng Bích","84905380216","HONG BICH","13","T7/2016","106,1tr","1,84tr","0,2tr","","B.sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("91","CÔNG TY TNHH MTV Tiếng Anh THÔNG THÁI IMEA","84915585459","THONG THAI","13","T7/2016","64,1tr","","27,3tr","5,4tr","","8","2016");
INSERT INTO thutuvan VALUES("92","DNTN Quang Kim Hưng","84935510060","QUANG KIM HUNG","13","T7/2016","606,6tr","2,82tr","-4,33tr","","","8","2016");
INSERT INTO thutuvan VALUES("93","DNTN Ngọc Hạo","84903584058","NGOC HAO","13","T7/2016","1,008tr","2,91tr","-4,6tr","","B.sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("94","DNTN Hiệu Vàng Kim Minh NT","841657287234","KIM MINH","13","T7/2016","29,6tr","0,49tr","1,44tr","0,288tr","B.sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("95","DNTN Hoàng Tảo","84979731179","HOANG TAO","13","T7/2016","4,149tr","5,21tr","0,63tr","0,12tr","B.sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("96","Công ty TNHH Vietsea Hotel Inc","841662379152","VIETSEA","13","T7/2016","14,5tr","-175,3tr","-15tr","","Lap HĐ day du khi BH, doi chieu voi ĐK luu tru","8","2016");
INSERT INTO thutuvan VALUES("97","Công ty TNHH Đắc Nhân Tâm 777 NT","84985099777","DAC NHAN TAM","13","T7/2016","42,1tr","0,42tr","12,9tr","2,6tr","B.sung ctu, sao ke NH tu T1-T9","8","2016");
INSERT INTO thutuvan VALUES("99","Công ty CP Sealife","841222958890","SEALIFE","15","T7/2016","237tr","-137tr","-39tr","","B.sung ctừ, sao ke NH T7-T9, CMND nv theo b.luong","8","2016");
INSERT INTO thutuvan VALUES("100","DNTN Nga","84915802125","DNTN NGA","15","T7/2016","140TR","-8,2TR","9,5TR","","B.sung ctừ, sao ke NH T7-T9, CMND nv theo b.luong","8","2016");
INSERT INTO thutuvan VALUES("101","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ DU LỊCH BLUE VIỆT","84983111326","BLUE VIET","15","T7/2016","2 tỷ","-145tr","115tr","23tr","D.chieu no phai thu, phai tra va CMT n.vien","8","2016");
INSERT INTO thutuvan VALUES("102","Công ty TNHH TM ĐT Trương Gia Phát","84983218393","TRUONG GIA PHAT","15","T7/2016","291tr","27tr","-107tr","","B.sung sao ke TK gui, vay tu T4-T9","8","2016");
INSERT INTO thutuvan VALUES("103","Công ty TM&DV IZT","84911392255","IZT","15","T7/2016","158TR","9TR","","","B.sung c.tu NH T7 den T9 va doi chieu No phai thu, phai tra","8","2016");
INSERT INTO thutuvan VALUES("104","Công ty tnhh Thiên Kim Phát","84914455881","THIEN KIM PHAT","15","T7/2016","96tr","8.4tr","-3,6tr","0","","8","2016");
INSERT INTO thutuvan VALUES("105","Công ty TNHH Căn Tin Bệnh Viện","841263627966","CAN TIN BENH VIEN","15","T7/2016","750tr","16,5tr","","1,7tr","Bsung sao ke NH tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("106","Công ty tnhh Hiển Bình","84913433016","HIEN BINH","15","T7/2016","1,6tr","-282tr","-95tr","","Doi chieu kho t.te va so sach, CMT theo b.luong","8","2016");
INSERT INTO thutuvan VALUES("107","Công Ty CP Green Life","84914811949","GREEN LIFE","15","T7/2016","","-106tr","","","B.sung hop dong, du toan, quyet toan tung cong trinh","8","2016");
INSERT INTO thutuvan VALUES("108","Công ty TNHH Quảng cáo Trường Thiên Phát","84915218008","TRUONG THIEN PHAT","16","T7/2016","18tr","1,8tr","-8,7tr","","Xuat hoa don phu hop voi kho thuc te","8","2016");
INSERT INTO thutuvan VALUES("109","Công ty TNHH Đầu tư XD và KD BĐS Điền Lộc Phát","84909069416","DIEN LOC PHAT","16","T7/2016","0","-8,9tr","-21tr","0","Cung cap CMT-hop dong lao dong cua nhan vien","8","2016");
INSERT INTO thutuvan VALUES("110","Công ty TNHH Việt Trí Quang","84905222202","VIET TRI QUANG","16","T7/2016","","","","","Hhach hang xuat hoa don khi phat sinh doanh thu","8","2016");
INSERT INTO thutuvan VALUES("112","Công ty TNHH Thuốc Y Học Cổ truyền Vạn Lộc","84939613771","VAN LOC","16","T7/2016","3,9tr","-1,7tr","-6,4tr","0","Lay bang ke kem hoa don an uong, tiep khach","8","2016");
INSERT INTO thutuvan VALUES("114","Công ty TNHH Đầu tư Tri Thức Việt","84913947077","TRI THUC VIET","16","T7/2016","17,3tr","6tr","-5tr","0","Cung cap ctu, sao ke NH tu T6,7,8,9","8","2016");
INSERT INTO thutuvan VALUES("115","Công ty TNHH Trường Ý","84914050879","TRUONG Y","16","T7/2016","0","-4,6tr","-25tr","0","Hoa don tiep khach an uong phai co bang ke dinh kem","8","2016");
INSERT INTO thutuvan VALUES("117","Công ty TNHH TM HQ Nha Trang","84993248439","HQ","16","T7/2016","","","","","KH cung cap hoa don chung tu truoc ngay 10 hang thang","8","2016");
INSERT INTO thutuvan VALUES("118","Công ty TNHH TM và DV Bạn Của Tôi","84915624235","BAN CUA TOI","16","T7/2016","12,3tr","650ng","1,9tr","0,4tr","KH cung cap day du CMT nvien theo b/luong","8","2016");
INSERT INTO thutuvan VALUES("119","CÔNG TY TNHH SEN SPA","84908258121","SEN SPA","16","T7/2016","28,5TR","1,5tr","-2,8tr","0","KH cung cap day du CMT nvien theo b/luong","8","2016");
INSERT INTO thutuvan VALUES("120","CÔNG TY TNHH THƯƠNG MẠI BẢO TÍN PHÁT","84903520778","BAO TIN PHAT","16","T7/2016","118tr","-33tr","6tr","1,2tr","Lay hoa don dau vao mat hang dang bi am kho","8","2016");
INSERT INTO thutuvan VALUES("121","Công ty TNHH TM&Dv Hoàng Phúc","84979275798","HOANG PHUC","15","T7/2016","359TR","25TR","144TR","","BS nghiem thu h.dong so 13,15 theo hoa don so 2,3","8","2016");
INSERT INTO thutuvan VALUES("122","Công ty TNHH Vận tải Minh Vũ","841202380347","MINH VU","16","T7/2016","242tr","0","112tr","22,4tr","BS chung tu ngan hang T7,8,9","8","2016");
INSERT INTO thutuvan VALUES("123","Cty TNHH Trúc Nguyễn","84905474247","TRUC NGUYEN","16","T7/2016","209tr","11tr","78tr","15,6","KH cung cap day du hoa don nguyen vat lieu","8","2016");
INSERT INTO thutuvan VALUES("124","Công ty tnhh Phúc Studio","84935774242","PHUC STUDIO","16","T7/2016","29tr","1,5tr","15,2tr","3,1tr","Cung cap CMT n.vien Phuoc, Truc","8","2016");
INSERT INTO thutuvan VALUES("125","CÔNG TY TNHH BILLIARDS HẢI ÂU","84903540444","HAI AU","16","T7/2016","90tr","3,2tr","10tr","2tr","Cung cap CMND nv Chi","8","2016");
INSERT INTO thutuvan VALUES("126","Công ty tnhh thủy sản An Bình","84917369911","AN BINH","16","T7/2016","1,33ty","-373tr","217tr","43,4tr","","8","2016");
INSERT INTO thutuvan VALUES("127","DNTN AN Tín Nha Trang","84905110130","AN TIN","16","T7/2016","204tr","1,6tr","7,1tr","1,4tr","Cung cap CMND Trang, ctu, sao ke NH tu T1->T9","8","2016");
INSERT INTO thutuvan VALUES("128","DNTN Vàng Oanh Thắng","84933455558","OANH THANG","16","T7/2016","1ty","3,4tr","6,7tr","1,3tr","","8","2016");
INSERT INTO thutuvan VALUES("129","DNTN Thân thiết","841648025555","THAN THIET","16","T7/2016","5,7ty","3,1tr","-1,8tr","0","","8","2016");
INSERT INTO thutuvan VALUES("130","DNTN Hiệu Vàng Khánh Dũng","841225515016","KHANH DUNG","16","T7/2016","236tr","3,3tr","-619ng","0","","8","2016");
INSERT INTO thutuvan VALUES("131","DNTN Hiệu Vàng Huỳnh Mai","84983307454","HUYNH MAI","16","T7/2016","190,6tr","2,7tr","-5,8tr","0","","8","2016");
INSERT INTO thutuvan VALUES("132","DNTN Hiệu Vàng Ngọc Duy","84984390899","NGOC DUY","16","T7/2016","4,2ty","4,7tr","3,4tr","680ng","","8","2016");
INSERT INTO thutuvan VALUES("133","Công ty TNHH MTV Thuận Thành","84905203784","THUAN THANH","16","T7/2016","53,1tr","5,3tr","-14tr","0","Xuat hoa don day du khi ban hang","8","2016");
INSERT INTO thutuvan VALUES("134","Cty GD Thanh Thảo","84933860479","THANH THAO","16","T7/2016","53,3tr","0","-30tr","0","Hang thang gui day du bang luong giao vien","8","2016");
INSERT INTO thutuvan VALUES("135","Công ty TNHH Hoàn Thiên An","84938021383","HAON THIEN AN","18","T7/2016","","","","","Cung cap CMND cua LĐ, hop dong gia cong, hop dong mua ban","8","2016");
INSERT INTO thutuvan VALUES("136","Công ty tnhh TMDV Vĩnh Gia","84914030172","VINH GIA","18","T7/2016","","","","","Bsung h.dong, d.toan, b.ban n.thu c.trinh. Sao ke NH T1-T9.","8","2016");
INSERT INTO thutuvan VALUES("137","Công ty TNHH Đại lý Vé số Vân Sơn","84935411732","VAN SON","18","T7/2016","550,23tr","","16,2tr","3,5tr","B.sung so phu, sao ke NH tu T1-T9.","8","2016");
INSERT INTO thutuvan VALUES("138","CÔNG TY TNHH TM & DV THÁI QUYÊN","84932528582","THAI QUYEN","18","T7/2016","","","","","C.cap kip thoi h.dong, Bang tong hop quyet toan HĐ xuat T7.","8","2016");
INSERT INTO thutuvan VALUES("140","Công ty tnhh Hồng Lộc NT","84905119789","HONG LOC","19","T7/2016","955,3tr","93tr","0","0","B.sung so phu, sao ke NH tu T1-T9.","8","2016");
INSERT INTO thutuvan VALUES("141","Công ty TNHH MTV Thương Mại Dịch vụ Trí Thúy","84914311700","TRI THUY","19","T7/2016","644tr","0","26tr","5,2tr","","8","2016");
INSERT INTO thutuvan VALUES("142","CÔNG TY TNHH CƯỜNG ĐÁ","84906203358","CUONG DA","19","T7/2016","0","-7,38tr","22,4tr","2,2tr","B.sung so phu, sao ke NH tu T1-T9;","8","2016");
INSERT INTO thutuvan VALUES("144","Công ty TNHH Quỳnh ANh Vạn Ninh","84935450471","QUYNH ANH","20","T7/2016","95,5tr","-7,3tr","-49,5tr","0","","8","2016");
INSERT INTO thutuvan VALUES("145","CÔNG TY TNHH HẠNH MẾN","84986704949","HANH MEN","20","T7/2016","","","","","C.cap CMT cua nha cung cap Ga.","8","2016");
INSERT INTO thutuvan VALUES("146","CÔNG TY TNHH THIẾT KẾ VÀ XÂY DỰNG PHÚC CHÂU","84908508640","PHUC CHAU","20","T7/2016","","","","","C.cap kip thoi h.dong, d.toan, q.toan tung c.trinh; Bang luong.","8","2016");
INSERT INTO thutuvan VALUES("147","Công ty TNHH Xuân Minh-Cam Ranh","84986361368","XUAN MINH","20","T7/2016","120,3tr","9,9tr","30,8tr","0","","8","2016");
INSERT INTO thutuvan VALUES("148","Công ty cổ phần thương mại và dịch vụ V.C.L","84989548546","V.C.L","20","T7/2016","170,6tr","5,1tr","20,7tr","0","","8","2016");
INSERT INTO thutuvan VALUES("149","Công ty TNHH TM và DV Agrilife","84913182948","AGRILIFE","20","T7/2016","14,7tr","-133,9tr","-8tr","0","","8","2016");
INSERT INTO thutuvan VALUES("150","DNTN Vàng Bạc Đá Quý Kim Khoa","841276232779","KIM KHOA","20","T7/2016","304,3tr","1,9tr","0","0","Khach hang cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("151","DNTN Vàng Bạc Kim Phúc Lai Liên","84948976506","KIM PHUC LAI LIEN","20","T7/2016","3,1tr","0,2tr","-8,3tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("152","DNTN Vàng Bạc Kim Huệ Thảo","84982857375","KIM HUE THAO","20","T7/2016","534,8tr","2,5tr","1,5tr","0,3tr","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("153","DNTN Vàng Bạc Kim Trí Hòa","84914085941","KIM TRI HOA","20","T7/2016","194,1tr","1,3tr","5tr","1tr","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("154","DNTN Vàng Bạc Kim Anh Diệp","84903599270","KIM ANH DIEP","20","T7/2016","170,6tr","1,5tr","1tr","0,2tr","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("155","DNTN Vàng Bạc Thiện Khiêm Ánh","84919428657","THIEN KHIEM ANH","20","T7/2016","323,3tr","0,6tr","-3,2tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("156","DNTN Vàng Bạc Ngọc Phúc","84993473828","NGOC PHUC","20","T7/2016","76,3tr","0,5tr","-4,2tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("157","DNTN Vàng Bạc Đức Kim Dung","84942191921","KIM DUNG","20","T7/2016","790,8tr","2tr","2tr","0,4tr","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("158","DNTN Vàng Bạc Phú Cường Vy","84937568068","PHU CUONG VY","20","T7/2016","463tr","1tr","-0,8tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("159","DNTN Vàng Bạc Kim Oanh","84935063193","KIM OANH","20","T7/2016","432,7tr","2,5tr","1,5tr","0,3tr","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("160","DNTN Vàng Bạc Kim Huệ","84948186186","KIM HUE","20","T7/2016","461,6tr","2,5tr","2tr","0,4tr","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("161","DNTN Vàng Bạc Đá quý Kim Giang","84978595598","KIM GIANG","20","T7/2016","66tr","0,3tr","-1,5tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("162","DNTN Vàng Bạc Kim Khoa","84979793696","KIM KHOA","20","T7/2016","1,9ty","10tr","20tr","4tr","KH cung cap so phu ngan hang T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("163","Công ty TNHH TM và XD Sky","84933988368","SKY","21","T7/2016","0","0","0","0","Cung cap Hop dong va Du toan chi tiet tung cong trinh","8","2016");
INSERT INTO thutuvan VALUES("164","DNTN Vàng Phát Đạt","84935151280","PHAT DAT","21","T7/2016","10,9tr","114ng","-11,4tr","0","Cung cap CMND Huu Dat, chung tu NH tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("165","Công ty TNHH DV TM và SX Nam Đồng","84918259515","NAM DONG","21","T7/2016","1,15ty","-1,3ty","-290tr","0","KH cung cap so phu ngan hang T5 den T9","8","2016");
INSERT INTO thutuvan VALUES("166","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ VIỄN THÔNG TUẤN HÙNG","84913433456","TUAN HUNG","21","T7/2016","12ty","-2,7ty","34,4tr","6,8tr","","8","2016");
INSERT INTO thutuvan VALUES("167","CÔNG TY TNHH DẦU NHỚT AN KHANG","84919712374","AN KHANG","21","T7/2016","","","","","De nghi khach hang cung cap day du ho so chung tu theo tung thang.","8","2016");
INSERT INTO thutuvan VALUES("168","Công ty TNHH Dịch vụ In Ấn - Photocopy Sao Mai Diên Khánh","841688117468","SAO MAI","21","T7/2016","","","","","De nghi khach hang cung cap day du ho so chung tu theo tung thang.","8","2016");
INSERT INTO thutuvan VALUES("169","Công ty TNHH Mỹ Tâm NT","84915802160","MY TAM","22","T7/2016","1,18ty","-1,2ty","-6,8tr","0","Doi chieu cong no, ton kho","8","2016");
INSERT INTO thutuvan VALUES("170","Công ty TNHH Hoàng Yến NT","84989079672","HOANG YEN","21","T7/2016","22,5tr","-22,5tr","-288ng","0","","8","2016");
INSERT INTO thutuvan VALUES("171","Công ty TNHH Công nghệ Sinh học Biozyme","84986011756","BIOZYME","21","T7/2016","","","","","De nghi khach hang khi phat sinh ban hang phai xuat hoa don day du","8","2016");
INSERT INTO thutuvan VALUES("172","Công Ty TNHH Cơ Khí Đại Hoàng Phát","84987916330","DAI HOANG PHAT","21","T7/2016","","","","","De nghi KH cung cap du toan vat tu theo tung Hop dong","8","2016");
INSERT INTO thutuvan VALUES("173","Công Ty TNHH Bảo Gia An NT","84988335339","BAO GIA AN","21","T7/2016","","","","","KH lay hoa don dau vao kip thoi de ghi nhan gia von","8","2016");
INSERT INTO thutuvan VALUES("174","Công ty TNHH Hồng Trung NT","841229847873","HONG TRUNG","21","T7/2016","8tr","800ng","-153tr","0","De nghi cung cap CMND nv ban hang","8","2016");
INSERT INTO thutuvan VALUES("175","DNTN Vàng Bạc Ngọc Huyền","841682555928","NGOC HUYEN","21","T7/2016","125tr","352ng","-2,7tr","0","","8","2016");
INSERT INTO thutuvan VALUES("176","DNTN Cơ khí Quỳnh Anh","841697071832","QUYNH ANH","21","T7/2016","141,7tr","12,48tr","","","C.cap day du, kip thoi H.dong, D.toan cong trinh","8","2016");
INSERT INTO thutuvan VALUES("177","Doanh Nghiệp Tư Nhân Vàng Bạc Tân Mỹ","84905331227","TAN MY","21","T7/2016","202tr","1,65tr","1,7tr","340ng","C.cap CMND, chung tu NH tu T4 den T9","8","2016");
INSERT INTO thutuvan VALUES("178","DNTN Vàng Bạc Ngọc Duy","84984390899","NGOC DUY","21","T7/2016","117,6tr","156ng","730ng","146ng","","8","2016");
INSERT INTO thutuvan VALUES("179","DNTN Vàng Bạc Sơn Nữ","84989577242","SON NU","21","T7/2016","121,7tr","527ng","1,1tr","220ng","","8","2016");
INSERT INTO thutuvan VALUES("180","DNTN Vàng Bạc Kim Tuấn","84905515378","KIM TUAN","21","T7/2016","252tr","691ng","3,2tr","640ng","","8","2016");
INSERT INTO thutuvan VALUES("181","DNTN Vàng Bạc Kim Út","841696843514","KIM UT","21","T7/2016","753,9tr","2,58tr","3tr","600ng","","8","2016");
INSERT INTO thutuvan VALUES("182","DNTN Kim Phát Khánh Hòa","84946062467","KIM PHAT","21","T7/2016","352tr","888ng","-86ng","0","","8","2016");
INSERT INTO thutuvan VALUES("183","DNTN Vàng Bạc Kim Linh","84935503249","KIM LINH","21","T7/2016","292,7tr","2,66tr","2,4tr","480ng","","8","2016");
INSERT INTO thutuvan VALUES("184","DNTN Vàng Bạc Kim Tuấn Vũ","841228528344","KIM TUAN VU","21","T7/2016","395,6tr","1,8tr","5,3tr","1,06tr","","8","2016");
INSERT INTO thutuvan VALUES("185","DNTN Hiệu Vàng Bảo Ngân","84913444492","BAO NGAN","22","T7/2016","286,1tr","1,13tr","-29tr","0","","8","2016");
INSERT INTO thutuvan VALUES("186","Doanh Nghiệp Tư Nhân Kim Tùng Chi","84914199831","KIM TUNG CHI","22","T7/2016","708,4tr","2,6tr","1,2tr","240ng","","8","2016");
INSERT INTO thutuvan VALUES("187","DNTN Kinh doanh Vàng bạc Anh Thế","84905107033","ANH THE","21","T7/2016","1,8ty","1,3tr","1,6tr","320ng","","8","2016");
INSERT INTO thutuvan VALUES("188","DNTN Vàng Bạc Ngọc Hưng","84905065379","NGOC HUNG","21","T7/2016","0","0","0","0","","8","2016");
INSERT INTO thutuvan VALUES("189","DOANH NGHIỆP TƯ NHÂN SÁNG KH","84903959726","SANG KH","22","T7/2016","573,1tr","1,21tr","-1,1tr","0","C.cap so phu ngan hang tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("190","Công ty TNHH Sản xuất Và Thương Mại ATP","84942035733","ATP","22","T7/2016","1,3ty","132,9tr","140,3tr","28,06tr","C.cap h.dong, du toan, HS nghiem thu c.trinh","8","2016");
INSERT INTO thutuvan VALUES("191","Công ty TNHH Tư vấn Giải pháp Công Nghệ Thông tin","84978595499","GIAI PHAP CNTT","22","T7/2016","0","0","0","0","","8","2016");
INSERT INTO thutuvan VALUES("192","Công ty TNHH TM&DV TDP Khánh Hòa","84911449497","TDP","22","T7/2016","","","","","De nghi khach hang xuat hoa don day du cho tung lan ban hang.","8","2016");
INSERT INTO thutuvan VALUES("193","DNTN Trường Phát","84913461777","TRUONG PHAT","22","T7/2016","249,6tr","-363tr","-4ty","0","Lay bien ban thu hoi HD so 0000418","8","2016");
INSERT INTO thutuvan VALUES("194","Công ty TNHH Thiên Phú Nha Trang","84905685353","THIEN PHU","22","T7/2016","0","0","0","0","","8","2016");
INSERT INTO thutuvan VALUES("195","Công ty TNHH Fiero Việt Nam","84917879338","FIERO","22","T7/2016","0","0","0","0","B.sung HD xuat cho SUMO Bac Ninh","8","2016");
INSERT INTO thutuvan VALUES("196","Công ty TNHH Thương Mại và Dịch Vụ Thiên Sơn","84993699677","THIEN SON","22","T7/2016","6,2tr","230ng","-1,3tr","0","Cung cap so phu ngan hang tu T7 den T9","8","2016");
INSERT INTO thutuvan VALUES("197","Công ty TNHH Thương Mại dịch vụ QC Tấn Phú Sang","84919946876","TAN PHU SANG","22","T7/2016","12,8tr","-5,4tr","-28tr","0","Gui b.ke xuat v.tu, d.chieu cong no, ton kho","8","2016");
INSERT INTO thutuvan VALUES("198","Cty TNHH Vàng, Bạc , Đá quý Dũng Ninh Hòa KH","84913482719","DUNG NINH HOA","22","T7/2016","168,5tr","590ng","-787ng","0","Cung cap so phu ngan hang tu T1 den T9","8","2016");
INSERT INTO thutuvan VALUES("199","Công ty TNHH MTV Du Lịch Thương mại Hòa Bình","84988699797","HOA BINH","22","T7/2016","57,8tr","1,3tr","11,5tr","2,3tr","Cung cap so phu ngan hang tu T4 den T6","8","2016");
INSERT INTO thutuvan VALUES("200","DNTN Vàng Ngọc Thơ","84989496726","NGOC THO","22","T7/2016","63,6tr","590ng","2,2tr","440ng","C.cap so phu NH - T4 den T9; h.che lap sai HD","8","2016");
INSERT INTO thutuvan VALUES("201","DNTN Vàng Bạc Hàn Tín","84905550652","HAN TIN","22","T7/2016","121,5tr","293ng","-971ng","0","Cung cap chung tu, sao ke NH T1-T7","8","2016");
INSERT INTO thutuvan VALUES("202","CÔNG TY TNHH NGỌC BÍCH NB","84993699677","NGOC BICH","22","T7/2016","2ty","3,9tr","8,5tr","1,7tr","Cung cap chung tu, sao ke NH T4-T7","8","2016");
INSERT INTO thutuvan VALUES("203","DNTN Vàng Bạc Ngọc Bính","84982299557","NGOC BINH","22","T7/2016","1,8ty","2,3tr","-573ng","0","Cung cap chung tu, sao ke NH T4-T7","8","2016");
INSERT INTO thutuvan VALUES("204","DNTN TM Vàng bạc Kim Hương","841663316329","KIM HUONG","22","T7/2016","107,8tr","738ng","-4,8tr","0","Cung cap chung tu, sao ke NH T7-T9","8","2016");
INSERT INTO thutuvan VALUES("205","DNTN HIỆU VÀNG VĂN DIỀN","841694450965","VAN DIEN","22","T7/2016","147,3tr","348ng","1,7tr","340ng","Cung cap chung tu, sao ke NH T7-T9","8","2016");
INSERT INTO thutuvan VALUES("206","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Hoa","84975714660","NGOC HOA","22","T7/2016","29,7tr","165ng","863ng","172ng","Cung cap chung tu, sao ke NH T7-T9","8","2016");
INSERT INTO thutuvan VALUES("207","DNTN Phương Thông Khánh Hòa","841237935774","PHUONG THONG","22","T7/2016","687,5tr","1,01tr","-18,6tr","0","Cung cap chung tu, sao ke NH T7-T9","8","2016");
INSERT INTO thutuvan VALUES("208","DNTN VÀNG NGỌC QUỐC KHANG","84913444067","NGOC QUOC KHANG","22","T7/2016","2,3ty","3,09tr","7,6tr","1,5tr","Cung cap chung tu NH T4-T9","8","2016");
INSERT INTO thutuvan VALUES("209","DNTN TM vàng Thành Tín","84968010323","THANH TIN","22","T7/2016","112tr","290ng","-773ng","0","Cung cap CMND nv Phong","8","2016");
INSERT INTO thutuvan VALUES("210","DNTN Hiệu vàng Võ Dũng","84932699768","VO DUNG","22","T7/2016","844tr","2,5tr","-1,7tr","0","Cung cap chung tu NH T4-T9","8","2016");
INSERT INTO thutuvan VALUES("211","DNTN Ngọc Minh khánh hòa","84963692065","NGOC MINH","22","T7/2016","27tr","329ng","-4,3tr","0","Cung cap chung tu NH T4-T9","8","2016");
INSERT INTO thutuvan VALUES("219","Công ty TNHH SX TM DV Khách sạn Lộc Phát","84944742425","LOC PHAT","11","T8/2016","ưer","ưer","demo","ưer","ưer","9","2016");
INSERT INTO thutuvan VALUES("222","Công ty TNHH SX TM DV Khách sạn Lộc Phát","84944742425","LOC PHAT","11","T8/2016","","","","","","9","2016");


