DROP TABLE IF EXISTS kfs;

CREATE TABLE `kfs` (
  `id_kfs` int(11) NOT NULL AUTO_INCREMENT,
  `makfs` varchar(30) NOT NULL,
  `tenkfs` varchar(200) NOT NULL,
  `id_skgi` int(11) NOT NULL,
  PRIMARY KEY (`id_kfs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS khachhang;

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL AUTO_INCREMENT,
  `congty` text NOT NULL,
  `tel` varchar(15) NOT NULL,
  `donvi` varchar(100) NOT NULL,
  `id_nv` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=utf8;

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
INSERT INTO khachhang VALUES("17","DNTN Kim Thanh Lịch","84907742702","KIM THANH LICH","11");
INSERT INTO khachhang VALUES("18","Công ty TNHH TM Vải Minh Hà","84909996366","MINH HA","19");
INSERT INTO khachhang VALUES("19","Công ty tnhh Hồng Lộc NT","84905119789","HONG LOC","19");
INSERT INTO khachhang VALUES("20","Công ty TNHH MTV Thương Mại Dịch vụ Trí Thúy","84914311700","TRI THUY","19");
INSERT INTO khachhang VALUES("21","CÔNG TY TNHH CƯỜNG ĐÁ","84906203358","CUONG DA","19");
INSERT INTO khachhang VALUES("22","DNTN Vàng Đá Quý Kim Khoa","84978810910","KIM KHOA","20");
INSERT INTO khachhang VALUES("23","Công ty TNHH Quỳnh ANh Vạn Ninh","84935450471","QUYNH ANH","20");
INSERT INTO khachhang VALUES("24","CÔNG TY TNHH HẠNH MẾN","84986704949","HANH MEN","20");
INSERT INTO khachhang VALUES("25","CÔNG TY TNHH THIẾT KẾ VÀ XÂY DỰNG PHÚC CHÂU","84908508640","PHUC CHAU","20");
INSERT INTO khachhang VALUES("26","Công ty TNHH Xuân Minh-Cam Ranh","84986361368","XUAN MINH","20");
INSERT INTO khachhang VALUES("28","Công ty TNHH TM và DV Agrilife","84913182948","AGRILIFE","20");
INSERT INTO khachhang VALUES("29","DNTN Vàng Bạc Đá Quý Kim Khoa","841276232779","KIM KHOA","20");
INSERT INTO khachhang VALUES("30","DNTN Vàng Bạc Kim Phúc Lai Liên","84948976506","KIM PHUC LAI LIEN","20");
INSERT INTO khachhang VALUES("31","DNTN Vàng Bạc Kim Huệ Thảo","84982857375","KIM HUE THAO","20");
INSERT INTO khachhang VALUES("32","DNTN Vàng Bạc Kim Trí Hòa","84914085941","KIM TRI HOA","24");
INSERT INTO khachhang VALUES("33","DNTN Vàng Bạc Kim Anh Diệp","84903599270","KIM ANH DIEP","20");
INSERT INTO khachhang VALUES("34","DNTN Vàng Bạc Thiện Khiêm Ánh","84919428657","THIEN KHIEM ANH","20");
INSERT INTO khachhang VALUES("35","DNTN Vàng Bạc Ngọc Phúc","84993473828","NGOC PHUC","20");
INSERT INTO khachhang VALUES("36","DNTN Vàng Bạc Đức Kim Dung","84942191921","KIM DUNG","24");
INSERT INTO khachhang VALUES("37","DNTN Vàng Bạc Phú Cường Vy","84937568068","PHU CUONG VY","20");
INSERT INTO khachhang VALUES("38","DNTN Vàng Bạc Kim Oanh","84935063193","KIM OANH","24");
INSERT INTO khachhang VALUES("39","DNTN Vàng Bạc Kim Huệ","84948186186","KIM HUE","20");
INSERT INTO khachhang VALUES("40","DNTN Vàng Bạc Đá quý Kim Giang","84978595598","KIM GIANG","24");
INSERT INTO khachhang VALUES("41","DNTN Vàng Bạc Kim Khoa","84979793696","KIM KHOA","20");
INSERT INTO khachhang VALUES("42","Công ty TNHH Thiện Long Nha Trang","84971128081","THIEN LONG","5");
INSERT INTO khachhang VALUES("43","Công ty TNHH Khai Thác Điểm Đỗ Nha Trang","84944990568","DIEM DO NHA TRANG","5");
INSERT INTO khachhang VALUES("44","Công ty TNHH Phúc Lộc Nha Trang","84916139779","PHUC LOC","5");
INSERT INTO khachhang VALUES("45","Công ty TNHH SX TM DV Thiên Phú Lộc","84934000609","THIEN PHU LOC","5");
INSERT INTO khachhang VALUES("46","Công ty TNHH Big M Hoàng Minh","84961000168","MIG M HOANG MINH","5");
INSERT INTO khachhang VALUES("47","Công ty CP BĐS Việt Đức","84935888411","VIET DUC","5");
INSERT INTO khachhang VALUES("48","DNTN An Trang TP","84914152116","AN TRANG","23");
INSERT INTO khachhang VALUES("49","Công ty TNHH Quốc hảo","84986885079","QUOC HAO","23");
INSERT INTO khachhang VALUES("50","CÔNG TY TNHH TM DV ITS NHA TRANG","84905448988","ITS","5");
INSERT INTO khachhang VALUES("51","Công ty TNHH Du Lịch Trần Gia Bảo","84989682968","TRAN GIA BAO","23");
INSERT INTO khachhang VALUES("52","Công ty TNHH chế biến Thủy sản Hoàng Phát","84915333706","HOANG PHAT","5");
INSERT INTO khachhang VALUES("53","Doanh Nghiệp Tư Nhân Vàng Ngọc Mai Nha Trang","841263663979","NGOC MAI","5");
INSERT INTO khachhang VALUES("54","Doanh Nghiệp Tư Nhân Dịch Vụ Khách Sạn Quỳnh Trang","84989447907","QUYNH TRANG","23");
INSERT INTO khachhang VALUES("55","Công Ty TNHH Một Thành Viên Trung Hiếu Khánh Hòa","84903593239","TRUNG HIEU","5");
INSERT INTO khachhang VALUES("56","DNTN Phước Chương","84913463538","PHUOC CHUONG","5");
INSERT INTO khachhang VALUES("57","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Thắng","841285355240","NGOC THANG","23");
INSERT INTO khachhang VALUES("58","Doanh Nghiệp Tư Nhân Hiệu Vàng Kim Phương","84972110020","KIM PHUONG","5");
INSERT INTO khachhang VALUES("59","Công ty TNHH Hoàn Thiên An","84938021383","HOAN THIEN AN","18");
INSERT INTO khachhang VALUES("60","Công ty tnhh TMDV Vĩnh Gia","84914030172","VINH GIA","18");
INSERT INTO khachhang VALUES("61","Công ty TNHH Đại lý Vé số Vân Sơn","84935411732","VAN SON","24");
INSERT INTO khachhang VALUES("62","CÔNG TY TNHH TM & DV THÁI QUYÊN","84932528582","THAI QUYEN","20");
INSERT INTO khachhang VALUES("63","DNTN Hiệu Vàng Bảo Ngân","84913444492","BAO NGAN","21");
INSERT INTO khachhang VALUES("64","Doanh Nghiệp Tư Nhân Kim Tùng Chi","84914199831","KIM TUNG CHI","21");
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
INSERT INTO khachhang VALUES("89","DNTN Du lịch Cát Lộc","84989035457","CAT LOC","25");
INSERT INTO khachhang VALUES("90","Công ty TNHH TM& DV Hải Tâm","841673130679","HAI TAM","24");
INSERT INTO khachhang VALUES("91","Công ty TNHH Beach City","841689943267","BEACH CITY","4");
INSERT INTO khachhang VALUES("92","Công ty TNHH TM & DV Gia Bách","84903295880","GIA BACH","4");
INSERT INTO khachhang VALUES("93","Công ty TNHH XD Tân Minh Nha Trang","84902858271","TAN MINH","4");
INSERT INTO khachhang VALUES("94","Công ty TNHH Tư vấn Xây dựng Tân Khánh","84901935468","TAN KHANH","4");
INSERT INTO khachhang VALUES("95","Công ty TNHH TM DV Trần Chương","84934815019","TRAN CHUONG","25");
INSERT INTO khachhang VALUES("96","Công ty TNHH Du Lịch Mây Ngũ Sắc","84903229568","MAY NGU SAC","4");
INSERT INTO khachhang VALUES("97","Công ty TNHH DL & TM Thịnh Vượng","84967904959","THINH VUONG","25");
INSERT INTO khachhang VALUES("98","Công ty TNHH AISHA V.X","84977369448","AISHA V.X","4");
INSERT INTO khachhang VALUES("99","Công ty TNHH Du lịch Phát triển Fashion Việt Nam","84983991404","FASHION","4");
INSERT INTO khachhang VALUES("100","Công ty TNHH Khang Thái Vietnam Travel","841236926999","KHANG THAI","4");
INSERT INTO khachhang VALUES("101","Tô Quang Sáng- Công ty TNHH Xây Dựng Sao Sáng","84933135479","SAO SANG","4");
INSERT INTO khachhang VALUES("102","CÔNG TY TNHH DV TM CẢNH QUAN AN BÌNH","84917369911","CQ AN BINH","4");
INSERT INTO khachhang VALUES("103","DNTN SX TM & DV Toàn Hưng","84905082226","TOAN HUNG","25");
INSERT INTO khachhang VALUES("104","Công ty TNHHXD - Điện - TM Hòa Khánh","84905007797","HOA KHANH","4");
INSERT INTO khachhang VALUES("105","Công ty CP Dịch vụ Thuê xe Phú Gia","84971128081","PHU GIA","4");
INSERT INTO khachhang VALUES("106","Công ty TNHH Du Lịch Hoa Nhài","84919150475","HOA NHAI","4");
INSERT INTO khachhang VALUES("107","Công ty TNHH Quảng cáo Trường Thiên Phát","84915218008","TRUONG THIEN PHAT","16");
INSERT INTO khachhang VALUES("108","Công ty TNHH Đầu tư XD và KD BĐS Điền Lộc Phát","84909069416","DIEN LOC PHAT","16");
INSERT INTO khachhang VALUES("109","Công ty TNHH Việt Trí Quang","84905222202","VIET TRI QUANG","16");
INSERT INTO khachhang VALUES("110","Công ty TNHH Thuốc Y Học Cổ truyền Vạn Lộc","84935814839","VAN LOC","16");
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
INSERT INTO khachhang VALUES("125","DNTN Hiệu Vàng Khánh Dũng","841217555580","KHANH DUNG","24");
INSERT INTO khachhang VALUES("126","DNTN Hiệu Vàng Huỳnh Mai","84983307454","HUYNH MAI","16");
INSERT INTO khachhang VALUES("127","DNTN Hiệu Vàng Ngọc Duy","84905015010","NGOC DUY","24");
INSERT INTO khachhang VALUES("128","Công ty TNHH MTV Thuận Thành","84905203784","THUAN THANH","16");
INSERT INTO khachhang VALUES("129","Cty GD Thanh Thảo","84933860479","THANH THAO","16");
INSERT INTO khachhang VALUES("130","Công ty TNHH TM và XD Sky","84933988368","SKY","21");
INSERT INTO khachhang VALUES("131","DNTN Vàng Phát Đạt","84935151280","PHAT DAT","21");
INSERT INTO khachhang VALUES("132","Công ty TNHH DV TM và SX Nam Đồng","84918259515","NAM DONG","21");
INSERT INTO khachhang VALUES("133","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ VIỄN THÔNG TUẤN HÙNG","84913433456","TUAN HUNG","21");
INSERT INTO khachhang VALUES("134","CÔNG TY TNHH DẦU NHỚT AN KHANG","84919712374","AN KHANG","21");
INSERT INTO khachhang VALUES("135","Công ty TNHH Dịch vụ In Ấn - Photocopy Sao Mai Diên Khánh","841688117468","SAO MAI","24");
INSERT INTO khachhang VALUES("136","Công ty TNHH Mỹ Tâm NT","84915802160","MY TAM","22");
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
INSERT INTO khachhang VALUES("152","DNTN Kinh doanh Vàng bạc Anh Thế","84905107033","ANH THE","24");
INSERT INTO khachhang VALUES("153","DNTN Vàng Bạc Ngọc Hưng","84905065379","NGOC HUNG","21");
INSERT INTO khachhang VALUES("154","Công ty TNHH Đầu tư Phát Triển Thành Nhân","84914560822","THANH NHAN","18");
INSERT INTO khachhang VALUES("155","Công ty CP Sealife","841222958890","SEALIFE","20");
INSERT INTO khachhang VALUES("156","DNTN Nga","84915802125","DNTN NGA","23");
INSERT INTO khachhang VALUES("157","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ DU LỊCH BLUE VIỆT","84983111326","BLUE VIET","24");
INSERT INTO khachhang VALUES("158","Công ty TNHH TM ĐT Trương Gia Phát","84983218393","TRUONG GIA PHAT","24");
INSERT INTO khachhang VALUES("159","Công ty TM&DV IZT","84911392255","IZT","25");
INSERT INTO khachhang VALUES("160","Công ty tnhh Thiên Kim Phát","84914455881","THIEN KIM PHAT","23");
INSERT INTO khachhang VALUES("161","Công ty TNHH Căn Tin Bệnh Viện","841263627966","CAN TIN BENH VIEN","15");
INSERT INTO khachhang VALUES("162","Công ty tnhh Hiển Bình","84906474738","HIEN BINH","24");
INSERT INTO khachhang VALUES("163","Công Ty CP Green Life","84914811949","GREEN LIFE","24");
INSERT INTO khachhang VALUES("164","cty CP Tôn thép Minh Quang","84905142197","MINH QUANG","24");
INSERT INTO khachhang VALUES("165","Công ty TNHH Bắc Xiêm","84903359640","BAC XIEM","7");
INSERT INTO khachhang VALUES("167","Công ty TNHH Sự Kiện Tour & Team","84944555197","TOUR&TEAM","25");
INSERT INTO khachhang VALUES("168","Công ty TNHH Dịch vụ Du Lịch B&B","841276066360","B&B","7");
INSERT INTO khachhang VALUES("169","CÔNG TY TNHH DỊCH VỤ DU LỊCH NHA TRANG","84934753879","DU LICH NHA TRANG","7");
INSERT INTO khachhang VALUES("170","Công ty TNHH Căn hộ Du Lịch Làng Sen Nha Trang","841222779778","LANG SEN","25");
INSERT INTO khachhang VALUES("171","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ DU LỊCH IHOME TEAM","84976400474","IHOME TEAM","25");
INSERT INTO khachhang VALUES("172","Công ty TNHH OPALUS H&T","84918250512","OPALUS H&T","25");
INSERT INTO khachhang VALUES("173","Công ty CP Tư vấn XD và DV Đô thị Nha Trang","84943689966","DO THI NHA TRANG","7");
INSERT INTO khachhang VALUES("174","Công ty TNHH Viễn Thông Tin Học VMS","84948002202","VMS","25");
INSERT INTO khachhang VALUES("175","Công ty TNHH Điện Lạnh Hòa Tam Phát","84969090146","HOA TAM PHAT","24");
INSERT INTO khachhang VALUES("176","Công ty TNHH Cheers","84905574490","CHEERS","23");
INSERT INTO khachhang VALUES("177","Công ty TNHH TM&DV Hoàng Phúc","84979275798","HOANG PHUC","24");
INSERT INTO khachhang VALUES("178","DNTN Vàng bạc Đá quý Ngọc Hoa","84905456599","NGOC HOA","23");
INSERT INTO khachhang VALUES("179","Doanh Nghiệp Tư Nhân Minh Tiến Nha Trang","84935188852","MINH TIEN","23");
INSERT INTO khachhang VALUES("180","DNTN Hiệu Vàng Ngọc Hương Anh","84905882898","NGOC HUONG ANH","23");
INSERT INTO khachhang VALUES("181","Doanh Nghiệp Tư Nhân Kim Vân 2 BT","84935663195","KIM VAN 2BT","23");
INSERT INTO khachhang VALUES("182","Doanh Nghiệp Tư Nhân Hiệu Vàng Xuân Thảo","84913410803","XUAN THAO","23");
INSERT INTO khachhang VALUES("183","Công ty TNHH Phần Mềm BG","84915780794","BG","13");
INSERT INTO khachhang VALUES("184","Công ty TNHH Dịch Vụ Du Lịch Phúc Gia","84913461922","PHUC GIA","13");
INSERT INTO khachhang VALUES("185","Công ty TNHH Thương Mại và Du Lịch Việt Úc","84903178664","VIET UC","13");
INSERT INTO khachhang VALUES("186","Công ty TNHH Khách sạn& Du lịch Hoa Tulip","84903049097","HOA TULIP","13");
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
INSERT INTO khachhang VALUES("206","Công ty TNHH Vietsea Hotel Inc","84924155789","VIETSEA","13");
INSERT INTO khachhang VALUES("207","Công ty TNHH Đắc Nhân Tâm 777 NT","84985099777","DAC NHAN TAM","13");
INSERT INTO khachhang VALUES("208","Công ty TNHH Golife","84964851027","GOLIFE","16");
INSERT INTO khachhang VALUES("209","DNTN ABM Nha Trang","84916810479","ABM","23");
INSERT INTO khachhang VALUES("210","Công ty TNHH Hoa Đăng Nha Trang","84902038459","HOA DANG","11");
INSERT INTO khachhang VALUES("211","Công ty TNHH FNANO","84949040599","FNANO","18");
INSERT INTO khachhang VALUES("212","Công ty TNHH ROYALSTONE","84935583486","ROYALSTONE","23");
INSERT INTO khachhang VALUES("213","Công ty TNHH FOLLOW ME","841206198854","FOLLOW ME","23");
INSERT INTO khachhang VALUES("214","Công ty TNHH TM-DV KHANG DŨNG","841686752086","KHANG DUNG","23");
INSERT INTO khachhang VALUES("215","Công ty TNHH NA PLAN VN","841269701550","NAPLAN VN","5");
INSERT INTO khachhang VALUES("216","Công ty TNHH TMDV NGUYỆT HOA","84936698928","NGUYET HOA","23");
INSERT INTO khachhang VALUES("217","Công ty TNHH TRE XANH SPA","841657984363","TRE XANH SPA","5");
INSERT INTO khachhang VALUES("218","Công ty TNHH ACCELERATION VIỆT NAM","84935917906","ACCELERATION","5");
INSERT INTO khachhang VALUES("219","Công ty TNHH TƯ VẤN ĐẦU TƯ XÂY DỰNG HÀI HÒA","84962746746","HAI HOA","5");
INSERT INTO khachhang VALUES("220","Công ty TNHH TMXD AN HƯNG","84938791368","AN HUNG","5");
INSERT INTO khachhang VALUES("221","Công ty TNHH TMDV KHẢ ÚY","84913462417","KHA UY","5");
INSERT INTO khachhang VALUES("222","Công ty CP Đầu Tư XD HỒNG PHÚC","84905819689","HONG PHUC","5");
INSERT INTO khachhang VALUES("223","Công ty TNHH Bá Phát","84935931339","BA PHAT","11");
INSERT INTO khachhang VALUES("224","Công ty TNHH TC Nam Đồng","84918259515","TC NAM DONG","18");
INSERT INTO khachhang VALUES("225","Công ty CP TMDV XD Minh Đức","84913951370","MINH DUC_CP","18");
INSERT INTO khachhang VALUES("226","Công ty TNHH XD Minh Đức","84913951370","MINH DUC_TNHH","18");
INSERT INTO khachhang VALUES("227","Công ty TNHH DV&CN ISB","84938511948","ISB","4");
INSERT INTO khachhang VALUES("228","Công ty TNHH Minh Nguyệt","84913461589","MINH NGUYET","4");
INSERT INTO khachhang VALUES("229","Công Ty TNHH Thế Giới Phụ Tùng","841282577799","THE GIOI PHU TUNG","7");
INSERT INTO khachhang VALUES("230","Công Ty TNHH Sushi Sakura","841233772398","SUSHI SAKURA","7");
INSERT INTO khachhang VALUES("231","Công Ty TNHH Dịch Vụ Tư Vấn Tài Chính Nhân Trung","84898377567","NHAN TRUNG","7");
INSERT INTO khachhang VALUES("232","Công Ty Cổ Phần Peacock Marina Complex","84918338845","PEACOCK","7");
INSERT INTO khachhang VALUES("233","Công Ty TNHH TM -DV Khánh An","84905454854","KHANH AN","7");
INSERT INTO khachhang VALUES("234","Công Ty TNHH Minato Steell VN","841677566094","MINATO","7");
INSERT INTO khachhang VALUES("235","DNTN Sản xuất Dịch vụ Tài Linh","84935227933","TAI LINH","4");
INSERT INTO khachhang VALUES("236","Công ty TNHH TM-DV Hoà Thịnh","84973247104","HOA THINH","5");
INSERT INTO khachhang VALUES("237","Công ty TNHH Quảng Cáo & Xúc tiến TM Song Giao 24","84916811878","SONG GIAO","5");
INSERT INTO khachhang VALUES("238","Công ty TNHH Trí Đông","84904478309","TRI DONG","5");
INSERT INTO khachhang VALUES("239","Công ty TNHH DM Nha Trang","84908487769","DM NHA TRANG","4");
INSERT INTO khachhang VALUES("240","Công ty TNHH Sơn Phú Nha Trang","84905790203","SON PHU","4");
INSERT INTO khachhang VALUES("241","Công ty TNHH Chuyện Nhỏ","84904493057","CHUYEN NHO","4");
INSERT INTO khachhang VALUES("243","Công ty TNHH Việt Nguyên Nha Trang","84962995399","VIET NGUYEN","5");
INSERT INTO khachhang VALUES("244","Công ty TNHH Du lịch Quả Lành","841644626062","QUA LANH","4");


DROP TABLE IF EXISTS level;

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(150) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO level VALUES("1","Administrator");
INSERT INTO level VALUES("2","Phụ trách");
INSERT INTO level VALUES("3","Nhân viên");
INSERT INTO level VALUES("4","Kiểm soát");
INSERT INTO level VALUES("5","Trợ lý");


DROP TABLE IF EXISTS nhanvien;

CREATE TABLE `nhanvien` (
  `id_nv` int(11) NOT NULL AUTO_INCREMENT,
  `manv` varchar(100) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `pb` varchar(10) NOT NULL,
  `id_nh` int(11) NOT NULL,
  `level` int(10) NOT NULL,
  PRIMARY KEY (`id_nv`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO nhanvien VALUES("1","admin","b4b727d34c2d4d4de1274899fccf3dd3","Administrator","1","0","1");
INSERT INTO nhanvien VALUES("2","EMC001","b4b727d34c2d4d4de1274899fccf3dd3","Lê Văn Viên","1","0","1");
INSERT INTO nhanvien VALUES("3","EMC002","123","Nguyễn Thị Kim Dung","5","0","3");
INSERT INTO nhanvien VALUES("4","EMC003","ce4ee57b7fbaaa333f14ec87bbc16cfa","Nguyễn Thị Nhung","3","0","1");
INSERT INTO nhanvien VALUES("5","EMC006","c080115f26ca9034b17591ca5174435b","Trần Thị Mai Hoa","3","0","4");
INSERT INTO nhanvien VALUES("6","EMC019","123","Võ Thị Lệ","2","0","3");
INSERT INTO nhanvien VALUES("7","EMC025","21cc16cad1354481fb7e89f36dbd1d83","Nguyễn Thị Thanh Thúy","3","0","3");
INSERT INTO nhanvien VALUES("8","EMC030","123","Nguyễn Thị Kim Dung","6","0","3");
INSERT INTO nhanvien VALUES("9","EMC035","123","Nguyễn Anh Huy","2","0","3");
INSERT INTO nhanvien VALUES("10","EMC036","123","Nguyễn Thị Hà","6","0","3");
INSERT INTO nhanvien VALUES("11","EMC037","7d3eea6286e4df00e2cc12ae77845edf","Nguyễn Thùy An","3","0","3");
INSERT INTO nhanvien VALUES("12","EMC043","123","Nguyễn Thị Mỹ Linh","6","0","3");
INSERT INTO nhanvien VALUES("13","EMC044","3117f07892c826f8a7d49bd9d0a2fe94","Nguyễn Thị Tú","3","0","3");
INSERT INTO nhanvien VALUES("14","EMC049","123","Nguyễn Thị Mỹ Anh","2","0","3");
INSERT INTO nhanvien VALUES("15","EMC053","5fc8c44f139d17efed2c7db9f9edafcc","Trần Ngọc Đan Thùy","3","0","3");
INSERT INTO nhanvien VALUES("16","EMC054","c867fc49b1efeba9c8c8fee3094a847f","Nguyễn Thị Quyên","3","0","3");
INSERT INTO nhanvien VALUES("17","EMC057","4de80efc6236ca8af8e6dad43f27fb48","Nguyễn Thành Trung","4","0","4");
INSERT INTO nhanvien VALUES("18","EMC058","587b39752f2609b61dc9c3c9565a4ea3","Lã Thị Nga","3","0","3");
INSERT INTO nhanvien VALUES("19","EMC059","77e14822b95f7032b07a50f3381869c3","Hoàng Văn Cương","3","0","2");
INSERT INTO nhanvien VALUES("20","EMC060","95c67d5965abf92d3710e681fdf1a7b0","Bùi Thị Hoa","3","0","3");
INSERT INTO nhanvien VALUES("21","EMC061","4801ab2d469b048ebc27bfa19b0c91fd","Trương Ngọc Thảo","3","0","3");
INSERT INTO nhanvien VALUES("22","EMC062","3cd7711ce18b8e698f5056d4f353897d","Nguyễn Nhật Thùy Nguyên","3","0","3");
INSERT INTO nhanvien VALUES("23","EMC069","fd573588a4c88330049ec8488ba35199","Bạch Nữ Thùy Trang","3","0","3");
INSERT INTO nhanvien VALUES("24","EMC071","a8497b0bb9bb9e3d35ccfe285b74152b","Phạm Thị Hương","3","0","3");
INSERT INTO nhanvien VALUES("25","EMC073","1434daa3558068a1db4f4e6a9a22fd66","Tạ Thị Mỹ Hòa","3","0","3");


DROP TABLE IF EXISTS nhom;

CREATE TABLE `nhom` (
  `id_nh` int(11) NOT NULL AUTO_INCREMENT,
  `tennhom` varchar(200) NOT NULL,
  `id_pb` int(11) NOT NULL,
  PRIMARY KEY (`id_nh`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO nhom VALUES("1","Nhóm 01","3");
INSERT INTO nhom VALUES("2","Nhóm 02","3");
INSERT INTO nhom VALUES("3","Nhóm Sales","2");
INSERT INTO nhom VALUES("4","Nhóm CSKH","2");


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


DROP TABLE IF EXISTS skgi;

CREATE TABLE `skgi` (
  `id_skgi` int(11) NOT NULL AUTO_INCREMENT,
  `maskgi` varchar(50) NOT NULL,
  `tenskgi` varchar(200) NOT NULL,
  `id_vc` int(11) NOT NULL,
  PRIMARY KEY (`id_skgi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
  `duyet` int(5) NOT NULL,
  PRIMARY KEY (`id_thutuvan`)
) ENGINE=InnoDB AUTO_INCREMENT=597 DEFAULT CHARSET=utf8;

INSERT INTO thutuvan VALUES("21","Công ty TNHH Thiện Long Nha Trang","84971128081","THIEN LONG","5","T7/2016","3,3ty","253,5tr","","","Bo sung quyet toan cong trinh","8","2016","1");
INSERT INTO thutuvan VALUES("27","DNTN An Trang TP","84914152116","AN TRANG","5","T7/2016","155tr","6,85tr","","","","8","2016","1");
INSERT INTO thutuvan VALUES("28","Công ty TNHH Quốc hảo","84986885079","QUOC HAO","5","T7/2016","23tr","-4,7tr","-2,7tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("30","Công ty TNHH Du Lịch Trần Gia Bảo","84989682968","TRAN GIA BAO","5","T7/2016","","","","","bo sung chung tu ngan hang","8","2016","1");
INSERT INTO thutuvan VALUES("31","Công ty TNHH chế biến Thủy sản Hoàng Phát","84915333706","HOANG PHAT","5","T7/2016","953,5tr","91,5tr","-17,7","0","bo sung chung tu ngan hang","8","2016","1");
INSERT INTO thutuvan VALUES("32","Doanh Nghiệp Tư Nhân Vàng Ngọc Mai Nha Trang","841263663979","NGOC MAI","5","T7/2016","5,1ty","7,8tr","3,4tr","0,7tr","bo sung chung tu ngan hang","8","2016","1");
INSERT INTO thutuvan VALUES("33","Doanh Nghiệp Tư Nhân Dịch Vụ Khách Sạn Quỳnh Trang","84989447907","QUYNH TRANG","5","T7/2016","10tr","0,7tr","0,77tr","0,16tr","bo sung chung tu ngan hang","8","2016","1");
INSERT INTO thutuvan VALUES("34","Công Ty TNHH Một Thành Viên Trung Hiếu Khánh Hòa","84903593239","TRUNG HIEU","5","T7/2016","1,65ty","0","94tr","18,8tr","","8","2016","1");
INSERT INTO thutuvan VALUES("35","DNTN Vàng bạc Đá quý Ngọc Hoa","84905456599","NGOC HOA","23","T7/2016","177tr","1.3tr","-11tr","0","bo sung chung tu ngan hang","8","2016","1");
INSERT INTO thutuvan VALUES("36","DNTN Phước Chương","84913463538","PHUOC CHUONG","5","T7/2016","125,7tr","1,9tr","23","0,9tr","bo sung chung tu ngan hang","8","2016","1");
INSERT INTO thutuvan VALUES("37","Doanh Nghiệp Tư Nhân Minh Tiến Nha Trang","84935188852","MINH TIEN","23","T7/2016","225tr","2,5tr","-5tr","","B.sung chung tu, sao ke ngan hang tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("38","DNTN Hiệu Vàng Ngọc Hương Anh","84905882898","NGOC HUONG ANH","23","T7/2016","1,077tr","2,6tr","-809ng","","B.sung chung tu, sao ke NH tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("39","Doanh Nghiệp Tư Nhân Kim Vân 2 BT","84935663195","KIM VAN 2BT","23","T7/2016","401tr","1,5tr","-15tr","","B.sung chung tu, sao ke ngan hang tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("40","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Thắng","841285355240","NGOC THANG","5","T7/2016","248tr","1,73tr","0,87tr","0,2tr","B.sung chung tu, sao ke NH tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("41","Doanh Nghiệp Tư Nhân Hiệu Vàng Xuân Thảo","84913410803","XUAN THAO","23","T7/2016","1,118tr","1,4tr","-5tr","","B.sung chung tu, sao ke ngan hang tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("50","Công ty TNHH Điện Lạnh Hòa Tam Phát","84969090146","HOA TAM PHAT","15","T7/2016","8,6tr","864ng","-12tr","","","8","2016","1");
INSERT INTO thutuvan VALUES("52","Công ty TNHH Cheers","84905574490","CHEERS","15","T7/2016","31tr","935ng","-4,4tr","","BS chung tu, sao ke ngan hang T6 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("58","Công ty TNHH Thương mại KTV","84989194979","KTV","11","T7/2016","","","","","Bo sung hop dong, bb nghiem thu, thanh ly hop dong, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("59","Công ty TNHH SX XD Tâm Việt","84905180414","TAM VIET","11","T7/2016","","","","","B.sung h.dong, bb nghiem thu, thanh ly h.dong, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("60","Công ty TNHH Thiết kế XD Phú Bảo","84906556168","PHU BAO","11","T7/2016","","","","","Bo sung CMND nhan cong, ty le pha tron b.tong, so phu NH T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("64","Cty TNHH Nguyên Hoàng KABAPAH","84977151231","KABAPAH","11","T7/2016","36,7tr","1,1tr","18,5tr","3,7tr","Bo sung CMND nhan vien phu bep, so phu NH","8","2016","1");
INSERT INTO thutuvan VALUES("65","Công ty tnhh TM-DV Minh Châu","84989158819","MINH CHAU","11","T7/2016","1173,9tr","-134tr","133tr","16,6tr","Bo sung hop dong thue van chuyen","8","2016","1");
INSERT INTO thutuvan VALUES("66","Công ty tnhh Tý Hưng","84913431357","TY HUNG","11","T7/2016","63,6tr","2tr","25tr","","Chu dong doi chieu kho de lay hoa don dau vao day du","8","2016","1");
INSERT INTO thutuvan VALUES("67","Cty TNHH Lợi Vinh","84905178406","LOI VINH","11","T7/2016","172tr","1,3tr","47tr","9,4tr","Nhac nho nha cung cap xuat hoa don day du","8","2016","1");
INSERT INTO thutuvan VALUES("68","Cty TNHH XD Nhật Dinh","84975971111","NHAT DINH","11","T7/2016","437tr","13,9tr","59,1tr","11,8tr","Lam hop dong,BB nghiem thu cho tung h.don","8","2016","1");
INSERT INTO thutuvan VALUES("69","DNTN VÀNG BẠC HÒA TRANG","84905166348","HOA TRANG","11","T7/2016","225,8tr","2,2tr","-7tr","","","8","2016","1");
INSERT INTO thutuvan VALUES("70","DNTN Vàng Bạc Đá Quý Mỹ Nghệ Kim Ngọc","84905650979","KIM NGOC","11","T7/2016","228tr","3,1tr","-4,8tr","","Bo sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("71","DNTN Hiệu Vàng Kim Liên Nha Trang","84905184650","KIM LIEN","11","T7/2016","168tr","2tr","-0,9tr","","","8","2016","1");
INSERT INTO thutuvan VALUES("72","DNTN Kim Thanh Lịch","84907742702","THANH LICH","11","T7/2016","2045,7tr","4tr","49tr","","Bo sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("74","Công ty TNHH Dịch Vụ Du Lịch Phúc Gia","84913461922","PHUC GIA","13","T7/2016","13,4tr","-35,9tr","-47tr","","Bo sung ctu, sao ke NH tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("75","Công ty TNHH Thương Mại và Du Lịch Việt Úc","84903178664","VIET UC","13","T7/2016","24,9tr","-29,6tr","-3,7tr","","B.sung Hop dong chi tiet tung Tour","8","2016","1");
INSERT INTO thutuvan VALUES("77","DNTN HOÀNG TRINH","84905818015","HOANG TRINH","13","T7/2016","758,6tr","-392,5tr","53,8tr","","","8","2016","1");
INSERT INTO thutuvan VALUES("79","Công ty TNHH Khách Sạn Trăng Xanh","84987919196","TRANG XANH","13","T7/2016","74,1tr","-5,9tr","38,9tr","","B.sung ctu, sao ke NH tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("80","Công ty TNHH Trà My Khánh Hòa","84905714578","TRA MY","13","T7/2016","198,2tr","38,1tr","-51tr","","","8","2016","1");
INSERT INTO thutuvan VALUES("81","Công ty TNHH Cát Minh Nha Trang","84905103793","CAT MINH","13","T7/2016","59,1tr","-348,3tr","-47,9tr","","B.sung ctu, sao ke NH tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("82","CN Cty Trương Gia Phát (Grill Garden)","84903584058","GRILL GARDEN","13","T7/2016","289,1tr","17,67tr","0,8tr","","K.tra su c.xac HĐ dau vao truoc khi nhan","8","2016","1");
INSERT INTO thutuvan VALUES("83","Công Ty TNHH Thiên Phước Hưng","84905119111","THIEN PHUOC HUNG","13","T7/2016","13,6tr","-6,01tr","-0,6tr","","B.sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("87","DNTN Vàng Bạc Năm Vĩnh Tường","841688322245","5 VINH TUONG","13","T7/2016","771,8tr","2,28tr","-5,2tr","","B.sung CMND nv THINH; TRUNG; NHA","8","2016","1");
INSERT INTO thutuvan VALUES("88","Công Ty TNHH Một Thành Viên LaVu Residence","84989399695","LAVU","13","T7/2016","67,6tr","3,38tr","11,8tr","2,36tr","B.sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("89","DNTN Vàng Bạc Ngọc Hà","841224488440","NGOC HA","13","T7/2016","33,9tr","0,457tr","-1,08tr","","","8","2016","1");
INSERT INTO thutuvan VALUES("90","DNTN Vàng Bạc Hồng Bích","84905380216","HONG BICH","13","T7/2016","106,1tr","1,84tr","0,2tr","","B.sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("91","CÔNG TY TNHH MTV Tiếng Anh THÔNG THÁI IMEA","84915585459","THONG THAI","13","T7/2016","64,1tr","","27,3tr","5,4tr","","8","2016","1");
INSERT INTO thutuvan VALUES("92","DNTN Quang Kim Hưng","84935510060","QUANG KIM HUNG","13","T7/2016","606,6tr","2,82tr","-4,33tr","","","8","2016","1");
INSERT INTO thutuvan VALUES("93","DNTN Ngọc Hạo","84903584058","NGOC HAO","13","T7/2016","1,008tr","2,91tr","-4,6tr","","B.sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("94","DNTN Hiệu Vàng Kim Minh NT","841657287234","KIM MINH","13","T7/2016","29,6tr","0,49tr","1,44tr","0,288tr","B.sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("95","DNTN Hoàng Tảo","84979731179","HOANG TAO","13","T7/2016","4,149tr","5,21tr","0,63tr","0,12tr","B.sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("96","Công ty TNHH Vietsea Hotel Inc","841662379152","VIETSEA","13","T7/2016","14,5tr","-175,3tr","-15tr","","Lap HĐ day du khi BH, doi chieu voi ĐK luu tru","8","2016","1");
INSERT INTO thutuvan VALUES("97","Công ty TNHH Đắc Nhân Tâm 777 NT","84985099777","DAC NHAN TAM","13","T7/2016","42,1tr","0,42tr","12,9tr","2,58tr","B.sung ctu, sao ke NH tu T1-T9","8","2016","1");
INSERT INTO thutuvan VALUES("99","Công ty CP Sealife","841222958890","SEALIFE","15","T7/2016","237tr","-137tr","-39tr","","B.sung ctừ, sao ke NH T7-T9, CMND nv theo b.luong","8","2016","1");
INSERT INTO thutuvan VALUES("100","DNTN Nga","84915802125","DNTN NGA","15","T7/2016","140TR","-8,2TR","9,5TR","","B.sung ctừ, sao ke NH T7-T9, CMND nv theo b.luong","8","2016","1");
INSERT INTO thutuvan VALUES("101","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ DU LỊCH BLUE VIỆT","84983111326","BLUE VIET","15","T7/2016","2 tỷ","-145tr","115tr","23tr","D.chieu no phai thu, phai tra va CMT n.vien","8","2016","1");
INSERT INTO thutuvan VALUES("102","Công ty TNHH TM ĐT Trương Gia Phát","84983218393","TRUONG GIA PHAT","15","T7/2016","291tr","27tr","-107tr","","B.sung sao ke TK gui, vay tu T4-T9","8","2016","1");
INSERT INTO thutuvan VALUES("103","Công ty TM&DV IZT","84911392255","IZT","15","T7/2016","158TR","9TR","","","B.sung c.tu NH T7 den T9 va doi chieu No phai thu, phai tra","8","2016","1");
INSERT INTO thutuvan VALUES("104","Công ty tnhh Thiên Kim Phát","84914455881","THIEN KIM PHAT","15","T7/2016","96tr","8.4tr","-3,6tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("105","Công ty TNHH Căn Tin Bệnh Viện","841263627966","CAN TIN BENH VIEN","15","T7/2016","750tr","16,5tr","","1,7tr","Bsung sao ke NH tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("106","Công ty tnhh Hiển Bình","84913433016","HIEN BINH","15","T7/2016","1,6tr","-282tr","-95tr","","Doi chieu kho t.te va so sach, CMT theo b.luong","8","2016","1");
INSERT INTO thutuvan VALUES("107","Công Ty CP Green Life","84914811949","GREEN LIFE","15","T7/2016","","-106tr","","","B.sung hop dong, du toan, quyet toan tung cong trinh","8","2016","1");
INSERT INTO thutuvan VALUES("108","Công ty TNHH Quảng cáo Trường Thiên Phát","84915218008","TRUONG THIEN PHAT","16","T7/2016","18tr","1,8tr","-8,7tr","","Xuat hoa don phu hop voi kho thuc te","8","2016","1");
INSERT INTO thutuvan VALUES("109","Công ty TNHH Đầu tư XD và KD BĐS Điền Lộc Phát","84909069416","DIEN LOC PHAT","16","T7/2016","0","-8,9tr","-21tr","0","Cung cap CMT-hop dong lao dong cua nhan vien","8","2016","1");
INSERT INTO thutuvan VALUES("110","Công ty TNHH Việt Trí Quang","84905222202","VIET TRI QUANG","16","T7/2016","","","","","Hhach hang xuat hoa don khi phat sinh doanh thu","8","2016","1");
INSERT INTO thutuvan VALUES("112","Công ty TNHH Thuốc Y Học Cổ truyền Vạn Lộc","84939613771","VAN LOC","16","T7/2016","3,9tr","-1,7tr","-6,4tr","0","Lay bang ke kem hoa don an uong, tiep khach","8","2016","1");
INSERT INTO thutuvan VALUES("114","Công ty TNHH Đầu tư Tri Thức Việt","84913947077","TRI THUC VIET","16","T7/2016","17,3tr","6tr","-5tr","0","Cung cap ctu, sao ke NH tu T6,7,8,9","8","2016","1");
INSERT INTO thutuvan VALUES("115","Công ty TNHH Trường Ý","84914050879","TRUONG Y","16","T7/2016","0","-4,6tr","-25tr","0","Hoa don tiep khach an uong phai co bang ke dinh kem","8","2016","1");
INSERT INTO thutuvan VALUES("117","Công ty TNHH TM HQ Nha Trang","84993248439","HQ","16","T7/2016","","","","","KH cung cap hoa don chung tu truoc ngay 10 hang thang","8","2016","1");
INSERT INTO thutuvan VALUES("118","Công ty TNHH TM và DV Bạn Của Tôi","84915624235","BAN CUA TOI","16","T7/2016","12,3tr","650ng","1,9tr","0,4tr","KH cung cap day du CMT nvien theo b/luong","8","2016","1");
INSERT INTO thutuvan VALUES("119","CÔNG TY TNHH SEN SPA","84908258121","SEN SPA","16","T7/2016","28,5TR","1,5tr","-2,8tr","0","KH cung cap day du CMT nvien theo b/luong","8","2016","1");
INSERT INTO thutuvan VALUES("120","CÔNG TY TNHH THƯƠNG MẠI BẢO TÍN PHÁT","84903520778","BAO TIN PHAT","16","T7/2016","118tr","-33tr","6tr","1,2tr","Lay hoa don dau vao mat hang dang bi am kho","8","2016","1");
INSERT INTO thutuvan VALUES("121","Công ty TNHH TM&Dv Hoàng Phúc","84979275798","HOANG PHUC","15","T7/2016","359TR","25TR","144TR","","BS nghiem thu h.dong so 13,15 theo hoa don so 2,3","8","2016","1");
INSERT INTO thutuvan VALUES("122","Công ty TNHH Vận tải Minh Vũ","841202380347","MINH VU","16","T7/2016","242tr","0","112tr","22,4tr","BS chung tu ngan hang T7,8,9","8","2016","1");
INSERT INTO thutuvan VALUES("123","Cty TNHH Trúc Nguyễn","84905474247","TRUC NGUYEN","16","T7/2016","209tr","11tr","78tr","15,6","KH cung cap day du hoa don nguyen vat lieu","8","2016","1");
INSERT INTO thutuvan VALUES("124","Công ty tnhh Phúc Studio","84935774242","PHUC STUDIO","16","T7/2016","29tr","1,5tr","15,2tr","3,1tr","Cung cap CMT n.vien Phuoc, Truc","8","2016","1");
INSERT INTO thutuvan VALUES("125","CÔNG TY TNHH BILLIARDS HẢI ÂU","84903540444","HAI AU","16","T7/2016","90tr","3,2tr","10tr","2tr","Cung cap CMND nv Chi","8","2016","1");
INSERT INTO thutuvan VALUES("126","Công ty tnhh thủy sản An Bình","84917369911","AN BINH","16","T7/2016","1,33ty","-373tr","217tr","43,4tr","","8","2016","1");
INSERT INTO thutuvan VALUES("127","DNTN AN Tín Nha Trang","84905110130","AN TIN","16","T7/2016","204tr","1,6tr","7,1tr","1,4tr","Cung cap CMND Trang, ctu, sao ke NH tu T1->T9","8","2016","1");
INSERT INTO thutuvan VALUES("128","DNTN Vàng Oanh Thắng","84933455558","OANH THANG","16","T7/2016","1ty","3,4tr","6,7tr","1,3tr","","8","2016","1");
INSERT INTO thutuvan VALUES("129","DNTN Thân thiết","841648025555","THAN THIET","16","T7/2016","5,7ty","3,1tr","-1,8tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("130","DNTN Hiệu Vàng Khánh Dũng","841225515016","KHANH DUNG","16","T7/2016","236tr","3,3tr","-619ng","0","","8","2016","1");
INSERT INTO thutuvan VALUES("131","DNTN Hiệu Vàng Huỳnh Mai","84983307454","HUYNH MAI","16","T7/2016","190,6tr","2,7tr","-5,8tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("132","DNTN Hiệu Vàng Ngọc Duy","84984390899","NGOC DUY","16","T7/2016","4,2ty","4,7tr","3,4tr","680ng","","8","2016","1");
INSERT INTO thutuvan VALUES("133","Công ty TNHH MTV Thuận Thành","84905203784","THUAN THANH","16","T7/2016","53,1tr","5,3tr","-14tr","0","Xuat hoa don day du khi ban hang","8","2016","1");
INSERT INTO thutuvan VALUES("134","Cty GD Thanh Thảo","84933860479","THANH THAO","16","T7/2016","53,3tr","0","-30tr","0","Hang thang gui day du bang luong giao vien","8","2016","1");
INSERT INTO thutuvan VALUES("135","Công ty TNHH Hoàn Thiên An","84938021383","HAON THIEN AN","18","T7/2016","","","","","Cung cap CMND cua LĐ, hop dong gia cong, hop dong mua ban","8","2016","1");
INSERT INTO thutuvan VALUES("136","Công ty tnhh TMDV Vĩnh Gia","84914030172","VINH GIA","18","T7/2016","","","","","Bsung h.dong, d.toan, b.ban n.thu c.trinh. Sao ke NH T1-T9.","8","2016","1");
INSERT INTO thutuvan VALUES("137","Công ty TNHH Đại lý Vé số Vân Sơn","84935411732","VAN SON","18","T7/2016","550,23tr","","16,2tr","3,5tr","B.sung so phu, sao ke NH tu T1-T9.","8","2016","1");
INSERT INTO thutuvan VALUES("138","CÔNG TY TNHH TM & DV THÁI QUYÊN","84932528582","THAI QUYEN","18","T7/2016","","","","","C.cap kip thoi h.dong, Bang tong hop quyet toan HĐ xuat T7.","8","2016","1");
INSERT INTO thutuvan VALUES("140","Công ty tnhh Hồng Lộc NT","84905119789","HONG LOC","19","T7/2016","955,3tr","93tr","0","0","B.sung so phu, sao ke NH tu T1-T9.","8","2016","1");
INSERT INTO thutuvan VALUES("141","Công ty TNHH MTV Thương Mại Dịch vụ Trí Thúy","84914311700","TRI THUY","19","T7/2016","644tr","0","26tr","5,2tr","","8","2016","1");
INSERT INTO thutuvan VALUES("142","CÔNG TY TNHH CƯỜNG ĐÁ","84906203358","CUONG DA","19","T7/2016","0","-7,38tr","22,4tr","2,2tr","B.sung so phu, sao ke NH tu T1-T9;","8","2016","1");
INSERT INTO thutuvan VALUES("144","Công ty TNHH Quỳnh ANh Vạn Ninh","84935450471","QUYNH ANH","20","T7/2016","95,5tr","-7,3tr","-49,5tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("145","CÔNG TY TNHH HẠNH MẾN","84986704949","HANH MEN","20","T7/2016","","","","","C.cap CMT cua nha cung cap Ga.","8","2016","1");
INSERT INTO thutuvan VALUES("146","CÔNG TY TNHH THIẾT KẾ VÀ XÂY DỰNG PHÚC CHÂU","84908508640","PHUC CHAU","20","T7/2016","","","","","C.cap kip thoi h.dong, d.toan, q.toan tung c.trinh; Bang luong.","8","2016","1");
INSERT INTO thutuvan VALUES("147","Công ty TNHH Xuân Minh-Cam Ranh","84986361368","XUAN MINH","20","T7/2016","120,3tr","9,9tr","30,8tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("148","Công ty cổ phần thương mại và dịch vụ V.C.L","84989548546","V.C.L","20","T7/2016","170,6tr","5,1tr","20,7tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("149","Công ty TNHH TM và DV Agrilife","84913182948","AGRILIFE","20","T7/2016","14,7tr","-133,9tr","-8tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("150","DNTN Vàng Bạc Đá Quý Kim Khoa","841276232779","KIM KHOA","20","T7/2016","304,3tr","1,9tr","0","0","Khach hang cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("151","DNTN Vàng Bạc Kim Phúc Lai Liên","84948976506","KIM PHUC LAI LIEN","20","T7/2016","3,1tr","0,2tr","-8,3tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("152","DNTN Vàng Bạc Kim Huệ Thảo","84982857375","KIM HUE THAO","20","T7/2016","534,8tr","2,5tr","1,5tr","0,3tr","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("153","DNTN Vàng Bạc Kim Trí Hòa","84914085941","KIM TRI HOA","20","T7/2016","194,1tr","1,3tr","5tr","1tr","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("154","DNTN Vàng Bạc Kim Anh Diệp","84903599270","KIM ANH DIEP","20","T7/2016","170,6tr","1,5tr","1tr","0,2tr","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("155","DNTN Vàng Bạc Thiện Khiêm Ánh","84919428657","THIEN KHIEM ANH","20","T7/2016","323,3tr","0,6tr","-3,2tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("156","DNTN Vàng Bạc Ngọc Phúc","84993473828","NGOC PHUC","20","T7/2016","76,3tr","0,5tr","-4,2tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("157","DNTN Vàng Bạc Đức Kim Dung","84942191921","KIM DUNG","20","T7/2016","790,8tr","2tr","2tr","0,4tr","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("158","DNTN Vàng Bạc Phú Cường Vy","84937568068","PHU CUONG VY","20","T7/2016","463tr","1tr","-0,8tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("159","DNTN Vàng Bạc Kim Oanh","84935063193","KIM OANH","20","T7/2016","432,7tr","2,5tr","1,5tr","0,3tr","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("160","DNTN Vàng Bạc Kim Huệ","84948186186","KIM HUE","20","T7/2016","461,6tr","2,5tr","2tr","0,4tr","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("161","DNTN Vàng Bạc Đá quý Kim Giang","84978595598","KIM GIANG","20","T7/2016","66tr","0,3tr","-1,5tr","0","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("162","DNTN Vàng Bạc Kim Khoa","84979793696","KIM KHOA","20","T7/2016","1,9ty","10tr","20tr","4tr","KH cung cap so phu ngan hang T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("163","Công ty TNHH TM và XD Sky","84933988368","SKY","21","T7/2016","0","0","0","0","Cung cap Hop dong va Du toan chi tiet tung cong trinh","8","2016","1");
INSERT INTO thutuvan VALUES("164","DNTN Vàng Phát Đạt","84935151280","PHAT DAT","21","T7/2016","10,9tr","114ng","-11,4tr","0","Cung cap CMND Huu Dat, chung tu NH tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("165","Công ty TNHH DV TM và SX Nam Đồng","84918259515","NAM DONG","21","T7/2016","1,15ty","-1,3ty","-290tr","0","KH cung cap so phu ngan hang T5 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("166","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ VIỄN THÔNG TUẤN HÙNG","84913433456","TUAN HUNG","21","T7/2016","12ty","-2,7ty","34,4tr","6,8tr","","8","2016","1");
INSERT INTO thutuvan VALUES("167","CÔNG TY TNHH DẦU NHỚT AN KHANG","84919712374","AN KHANG","21","T7/2016","","","","","De nghi khach hang cung cap day du ho so chung tu theo tung thang.","8","2016","1");
INSERT INTO thutuvan VALUES("168","Công ty TNHH Dịch vụ In Ấn - Photocopy Sao Mai Diên Khánh","841688117468","SAO MAI","21","T7/2016","","","","","De nghi khach hang cung cap day du ho so chung tu theo tung thang.","8","2016","1");
INSERT INTO thutuvan VALUES("169","Công ty TNHH Mỹ Tâm NT","84915802160","MY TAM","22","T7/2016","1,18ty","-1,2ty","-6,8tr","0","Doi chieu cong no, ton kho","8","2016","1");
INSERT INTO thutuvan VALUES("170","Công ty TNHH Hoàng Yến NT","84989079672","HOANG YEN","21","T7/2016","22,5tr","-22,5tr","-288ng","0","","8","2016","1");
INSERT INTO thutuvan VALUES("171","Công ty TNHH Công nghệ Sinh học Biozyme","84986011756","BIOZYME","21","T7/2016","","","","","De nghi khach hang khi phat sinh ban hang phai xuat hoa don day du","8","2016","1");
INSERT INTO thutuvan VALUES("172","Công Ty TNHH Cơ Khí Đại Hoàng Phát","84987916330","DAI HOANG PHAT","21","T7/2016","","","","","De nghi KH cung cap du toan vat tu theo tung Hop dong","8","2016","1");
INSERT INTO thutuvan VALUES("173","Công Ty TNHH Bảo Gia An NT","84988335339","BAO GIA AN","21","T7/2016","","","","","KH lay hoa don dau vao kip thoi de ghi nhan gia von","8","2016","1");
INSERT INTO thutuvan VALUES("174","Công ty TNHH Hồng Trung NT","841229847873","HONG TRUNG","21","T7/2016","8tr","800ng","-153tr","0","De nghi cung cap CMND nv ban hang","8","2016","1");
INSERT INTO thutuvan VALUES("175","DNTN Vàng Bạc Ngọc Huyền","841682555928","NGOC HUYEN","21","T7/2016","125tr","352ng","-2,7tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("176","DNTN Cơ khí Quỳnh Anh","841697071832","QUYNH ANH","21","T7/2016","141,7tr","12,48tr","","","C.cap day du, kip thoi H.dong, D.toan cong trinh","8","2016","1");
INSERT INTO thutuvan VALUES("177","Doanh Nghiệp Tư Nhân Vàng Bạc Tân Mỹ","84905331227","TAN MY","21","T7/2016","202tr","1,65tr","1,7tr","340ng","C.cap CMND, chung tu NH tu T4 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("178","DNTN Vàng Bạc Ngọc Duy","84984390899","NGOC DUY","21","T7/2016","117,6tr","156ng","730ng","146ng","","8","2016","1");
INSERT INTO thutuvan VALUES("179","DNTN Vàng Bạc Sơn Nữ","84989577242","SON NU","21","T7/2016","121,7tr","527ng","1,1tr","220ng","","8","2016","1");
INSERT INTO thutuvan VALUES("180","DNTN Vàng Bạc Kim Tuấn","84905515378","KIM TUAN","21","T7/2016","252tr","691ng","3,2tr","640ng","","8","2016","1");
INSERT INTO thutuvan VALUES("181","DNTN Vàng Bạc Kim Út","841696843514","KIM UT","21","T7/2016","753,9tr","2,58tr","3tr","600ng","","8","2016","1");
INSERT INTO thutuvan VALUES("182","DNTN Kim Phát Khánh Hòa","84946062467","KIM PHAT","21","T7/2016","352tr","888ng","-86ng","0","","8","2016","1");
INSERT INTO thutuvan VALUES("183","DNTN Vàng Bạc Kim Linh","84935503249","KIM LINH","21","T7/2016","292,7tr","2,66tr","2,4tr","480ng","","8","2016","1");
INSERT INTO thutuvan VALUES("184","DNTN Vàng Bạc Kim Tuấn Vũ","841228528344","KIM TUAN VU","21","T7/2016","395,6tr","1,8tr","5,3tr","1,06tr","","8","2016","1");
INSERT INTO thutuvan VALUES("185","DNTN Hiệu Vàng Bảo Ngân","84913444492","BAO NGAN","22","T7/2016","286,1tr","1,13tr","-29tr","0","","8","2016","1");
INSERT INTO thutuvan VALUES("186","Doanh Nghiệp Tư Nhân Kim Tùng Chi","84914199831","KIM TUNG CHI","22","T7/2016","708,4tr","2,6tr","1,2tr","240ng","","8","2016","1");
INSERT INTO thutuvan VALUES("187","DNTN Kinh doanh Vàng bạc Anh Thế","84905107033","ANH THE","21","T7/2016","1,8ty","1,3tr","1,6tr","320ng","","8","2016","1");
INSERT INTO thutuvan VALUES("188","DNTN Vàng Bạc Ngọc Hưng","84905065379","NGOC HUNG","21","T7/2016","0","0","0","0","","8","2016","1");
INSERT INTO thutuvan VALUES("189","DOANH NGHIỆP TƯ NHÂN SÁNG KH","84903959726","SANG KH","22","T7/2016","573,1tr","1,21tr","-1,1tr","0","C.cap so phu ngan hang tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("190","Công ty TNHH Sản xuất Và Thương Mại ATP","84942035733","ATP","22","T7/2016","1,3ty","132,9tr","140,3tr","28,06tr","C.cap h.dong, du toan, HS nghiem thu c.trinh","8","2016","1");
INSERT INTO thutuvan VALUES("191","Công ty TNHH Tư vấn Giải pháp Công Nghệ Thông tin","84978595499","GIAI PHAP CNTT","22","T7/2016","0","0","0","0","","8","2016","1");
INSERT INTO thutuvan VALUES("192","Công ty TNHH TM&DV TDP Khánh Hòa","84911449497","TDP","22","T7/2016","","","","","De nghi khach hang xuat hoa don day du cho tung lan ban hang.","8","2016","1");
INSERT INTO thutuvan VALUES("193","DNTN Trường Phát","84913461777","TRUONG PHAT","22","T7/2016","249,6tr","-363tr","-4ty","0","Lay bien ban thu hoi HD so 0000418","8","2016","1");
INSERT INTO thutuvan VALUES("194","Công ty TNHH Thiên Phú Nha Trang","84905685353","THIEN PHU","22","T7/2016","0","0","0","0","","8","2016","1");
INSERT INTO thutuvan VALUES("195","Công ty TNHH Fiero Việt Nam","84917879338","FIERO","22","T7/2016","0","0","0","0","B.sung HD xuat cho SUMO Bac Ninh","8","2016","1");
INSERT INTO thutuvan VALUES("196","Công ty TNHH Thương Mại và Dịch Vụ Thiên Sơn","84993699677","THIEN SON","22","T7/2016","6,2tr","230ng","-1,3tr","0","Cung cap so phu ngan hang tu T7 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("197","Công ty TNHH Thương Mại dịch vụ QC Tấn Phú Sang","84919946876","TAN PHU SANG","22","T7/2016","12,8tr","-5,4tr","-28tr","0","Gui b.ke xuat v.tu, d.chieu cong no, ton kho","8","2016","1");
INSERT INTO thutuvan VALUES("198","Cty TNHH Vàng, Bạc , Đá quý Dũng Ninh Hòa KH","84913482719","DUNG NINH HOA","22","T7/2016","168,5tr","590ng","-787ng","0","Cung cap so phu ngan hang tu T1 den T9","8","2016","1");
INSERT INTO thutuvan VALUES("199","Công ty TNHH MTV Du Lịch Thương mại Hòa Bình","84988699797","HOA BINH","22","T7/2016","57,8tr","1,3tr","11,5tr","2,3tr","Cung cap so phu ngan hang tu T4 den T6","8","2016","1");
INSERT INTO thutuvan VALUES("200","DNTN Vàng Ngọc Thơ","84989496726","NGOC THO","22","T7/2016","63,6tr","590ng","2,2tr","440ng","C.cap so phu NH - T4 den T9; h.che lap sai HD","8","2016","1");
INSERT INTO thutuvan VALUES("201","DNTN Vàng Bạc Hàn Tín","84905550652","HAN TIN","22","T7/2016","121,5tr","293ng","-971ng","0","Cung cap chung tu, sao ke NH T1-T7","8","2016","1");
INSERT INTO thutuvan VALUES("202","CÔNG TY TNHH NGỌC BÍCH NB","84993699677","NGOC BICH","22","8/2016","2.07ty","3,3tr","10.2tr","0","lay so phu ngan hang t8 den nay","8","2016","1");
INSERT INTO thutuvan VALUES("203","DNTN Vàng Bạc Ngọc Bính","84982299557","NGOC BINH","22","T7/2016","1,8ty","2,3tr","-573ng","0","Cung cap chung tu, sao ke NH T4-T7","8","2016","1");
INSERT INTO thutuvan VALUES("204","DNTN TM Vàng bạc Kim Hương","841663316329","KIM HUONG","22","T7/2016","107,8tr","738ng","-4,8tr","0","Cung cap chung tu, sao ke NH T7-T9","8","2016","1");
INSERT INTO thutuvan VALUES("205","DNTN HIỆU VÀNG VĂN DIỀN","841694450965","VAN DIEN","22","T7/2016","147,3tr","348ng","1,7tr","340ng","Cung cap chung tu, sao ke NH T7-T9","8","2016","1");
INSERT INTO thutuvan VALUES("206","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Hoa","84975714660","NGOC HOA","22","T7/2016","29,7tr","165ng","863ng","172ng","Cung cap chung tu, sao ke NH T7-T9","8","2016","1");
INSERT INTO thutuvan VALUES("207","DNTN Phương Thông Khánh Hòa","841237935774","PHUONG THONG","22","T7/2016","687,5tr","1,01tr","-18,6tr","0","Cung cap chung tu, sao ke NH T7-T9","8","2016","1");
INSERT INTO thutuvan VALUES("208","DNTN VÀNG NGỌC QUỐC KHANG","84913444067","NGOC QUOC KHANG","22","T7/2016","2,3ty","3,09tr","7,6tr","1,5tr","Cung cap chung tu NH T4-T9","8","2016","1");
INSERT INTO thutuvan VALUES("209","DNTN TM vàng Thành Tín","84968010323","THANH TIN","22","T7/2016","112tr","290ng","-773ng","0","Cung cap CMND nv Phong","8","2016","1");
INSERT INTO thutuvan VALUES("210","DNTN Hiệu vàng Võ Dũng","84932699768","VO DUNG","22","T7/2016","844tr","2,5tr","-1,7tr","0","Cung cap chung tu NH T4-T9","8","2016","1");
INSERT INTO thutuvan VALUES("211","DNTN Ngọc Minh khánh hòa","84963692065","NGOC MINH","22","T7/2016","27tr","329ng","-4,3tr","0","Cung cap chung tu NH T4-T9","8","2016","1");
INSERT INTO thutuvan VALUES("221","Công ty TNHH Đại lý Vé số Vân Sơn","84935411732","VAN SON","18","T8/2016","534.9tr","","25tr","5tr","","9","2016","1");
INSERT INTO thutuvan VALUES("222","Công ty TNHH TM Vải Minh Hà","84909996366","MINH HA","19","T8/2016","","","","","","9","2016","0");
INSERT INTO thutuvan VALUES("224","Công ty tnhh Hồng Lộc NT","84905119789","HONG LOC","19","T8/2016","951,5tr","93,12tr","-114tr","0","- Bo sung hop dong muon xe;\n\n- Bo sung phieu giao nhan hang;\n\n- Bổ sung bảng lương nhân viên hàng tháng;\n\n- Bo sung chung tu ngan hang;\n\n- Bo sung bang ke Xang, Dau theo tung lan giao hang.\n\n","9","2016","1");
INSERT INTO thutuvan VALUES("225","Công ty TNHH Hoàn Thiên An","84938021383","HOAN THIEN AN","18","T8/2016","106.6tr","5.7tr","-6tr","0","- Bo sung chung tu ngan hang t8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("227","Công ty TNHH Căn hộ Du Lịch Làng Sen Nha Trang","841222779778","LANG SEN","7","T8/2016","","","","","Cung cap CMND nguoi lao dong tu T3/16. Xem lai muc luong tren 9tr de tranh nop thue TNCN. Lay sao ke ngan hang T8,9/16. Kiem tra doanh thu xuat hoa don phai khop voi he thong ke khai thue.","9","2016","1");
INSERT INTO thutuvan VALUES("228","CÔNG TY TNHH CƯỜNG ĐÁ","84906203358","CUONG DA","19","T8/2016","247,3tr","42,915tr","20tr","4tr","- Bo sung hop dong va bien ban nghiem thu","9","2016","1");
INSERT INTO thutuvan VALUES("229","DNTN Vàng Bạc Hàn Tín","84905550652","HAN TIN","22","T8/16","103.5TR","0.22TR","0.441TR","0","Lay so phu ngan hang T1 den T9","9","2016","1");
INSERT INTO thutuvan VALUES("230","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Hoa","84975714660","NGOC HOA","22","T8/16","11.3TR","0.060TR","(0.329TR)","0","- Can doi lai phan xuat doanh thu\n\n- Lay so phu ngan hang quy 3/2016","9","2016","1");
INSERT INTO thutuvan VALUES("231","DNTN TM Vàng bạc Kim Hương","841663316329","KIM HUONG","22","T8/16","149.8Tr","0.136Tr","(0.393Tr)","0","Lay so phu ngan hang quy 3","9","2016","1");
INSERT INTO thutuvan VALUES("232","CÔNG TY TNHH NGỌC BÍCH NB","84993699677","NGOC BICH","22","T8/16","2.07ty","3.3tr","10.2tr","0","Lay so phu ngan hang t8, t9","9","2016","1");
INSERT INTO thutuvan VALUES("233","DNTN Vàng Bạc Ngọc Bính","84982299557","NGOC BINH","22","T8/16","1.4ty","2.05tr","3.95tr","0.79tr","lay ngan hang thang quy 3/2016","9","2016","1");
INSERT INTO thutuvan VALUES("234","DNTN Ngọc Minh khánh hòa","84963692065","NGOC MINH","22","T8/16","33.4tr","0.25tr","0.909tr","0","- Han che huy hoa don\n\n- Can doi lai doanh thu ( doanh thu dang xuat chi = 1/3 DT binh thuong)\n\n- Lay so phu ngan hang quy 2 den nay","9","2016","1");
INSERT INTO thutuvan VALUES("235","DNTN Phương Thông Khánh Hòa","841237935774","PHUONG THONG","22","T8/16","393tr","0.95tr","5.4tr","0","- Han che sua hoa don ban ra\n\n- Lay so phu ngan hang t8, t9","9","2016","1");
INSERT INTO thutuvan VALUES("236","DNTN VÀNG NGỌC QUỐC KHANG","84913444067","NGOC QUOC KHANG","22","T8/16","2.4ty","2.3tr","7.8tr","1.6tr","- Lay so phu ngan hang quy 2, quy 3/2016\n\n- Han che xuat sai hoa don\n\n- Xuat bu doanh thu khi huy hoa don","9","2016","1");
INSERT INTO thutuvan VALUES("237","DNTN TM vàng Thành Tín","84968010323","THANH TIN","22","T8/16","139tr","0.331tr","0.093tr","0","- Lay CMND chi Truong Thi Phong\n\n- Lay so phu ngan hang t8, t9","9","2016","1");
INSERT INTO thutuvan VALUES("238","DNTN HIỆU VÀNG VĂN DIỀN","841694450965","VAN DIEN","22","T8/16","165tr","0.38tr","1.2tr","0","Lay ngan hang t8, t9","9","2016","1");
INSERT INTO thutuvan VALUES("239","DNTN Hiệu vàng Võ Dũng","84932699768","VO DUNG","22","T8/16","647tr","2.2tr","(2.8tr)","0","Lay so phu ngan hang quy 3/2016","9","2016","1");
INSERT INTO thutuvan VALUES("240","Công ty TNHH Thương Mại và Dịch Vụ Thiên Sơn","84993699677","THIEN SON","22","T8/16","7.06tr","0.459tr","0.346tr","1.08tr","- Xuat hop ly voi doanh thu thuc te\n\n- Lay so phu ngan hang t4, t5 và quy 3/2016","9","2016","1");
INSERT INTO thutuvan VALUES("241","DNTN Trường Phát","84913461777","TRUONG PHAT","22","T8/16","307tr","","71.75tr","0","Lay so phu ngan hang Agribank moi thang, han che xuat sai hoa don","9","2016","1");
INSERT INTO thutuvan VALUES("242","Công ty TNHH Thương Mại dịch vụ QC Tấn Phú Sang","84919946876","TAN PHU SANG","22","T8/16","21.1tr","7.2tr","(12.4tr)","0","- Lay hoa don Viettel ve dieu chinh D/chi\n\n- Doi chieu cong no, kho\n\n- Gui bang ke thanh toan tien mat, bang ke xuat NVL","9","2016","1");
INSERT INTO thutuvan VALUES("243","DOANH NGHIỆP TƯ NHÂN SÁNG KH","84903959726","SANG KH","22","T8/16","771tr","1.06tr","2.3tr","0.45tr","- Lay so phu ngan hang dau nam den nay\n\n- Lay CMND Nguyen Thi Bich Truc","9","2016","1");
INSERT INTO thutuvan VALUES("244","Công ty TNHH Đắc Nhân Tâm 777 NT","84985099777","DAC NHAN TAM","13","T8/2016","40.5tr","405ng","12.09tr","1.2tr","cung cap hoa don dau vao de xu li kho T9/2016","9","2016","1");
INSERT INTO thutuvan VALUES("245","DNTN Vàng Bạc Kim Khoa","84979793696","KIM KHOA","20","T8/16","2,02ty","8,7tr","2tr","0,4tr","cung cap so phu ng.hang tu T2 den T9, ds CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("246","DNTN Vàng Bạc Năm Vĩnh Tường","841688322245","5 VINH TUONG","13","T8/2016","1ty147.7tr","2.77tr","4.1tr","0.8tr","doi chieu kho den het T8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("247","DNTN Ngọc Hạo","84903584058","NGOC HAO","13","T8/2016","1ty323.4tr","3.84tr","6.14tr","1.3tr","doi chieu kho den het T8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("248","DNTN Vàng Bạc Kim Huệ","84948186186","KIM HUE","20","T8/16","397,6tr","2,1tr","1tr","0,2tr","cung cap so phu ngan hang T8-9. Cung cap ds CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("249","DNTN Vàng Bạc Phú Cường Vy","84937568068","PHU CUONG VY","20","T8/16","827,8tr","0,75tr","2tr","0,4tr","cung cap DS CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("250","DNTN Vàng Bạc Ngọc Phúc","84993473828","NGOC PHUC","20","T8/16","112,7tr","0,86tr","0","0","cung cap so phu ngan hang tu T4 den T9.\n\ncung cap ds CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("251","DNTN Quang Kim Hưng","84935510060","QUANG KIM HUNG","13","T8/2016","615tr","2.73tr","-0.22tr","0","doi chieu kho den het T8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("252","DNTN Vàng Bạc Thiện Khiêm Ánh","84919428657","THIEN KHIEM ANH","20","T8/16","258,8tr","0,57tr","0","0","cung cap so phu ngan hang tu T4-T9.\n\ncung cap DS CMND khach hang. ","9","2016","1");
INSERT INTO thutuvan VALUES("253","DNTN Hoàng Tảo","84979731179","HOANG TAO","13","T8/2016","4ty902tr","4.87tr","1.99tr","0.4tr","bo sung sao ke va chung tu ngan hang","9","2016","1");
INSERT INTO thutuvan VALUES("254","DNTN Vàng Bạc Kim Anh Diệp","84903599270","KIM ANH DIEP","20","T8/16","300,8tr","2,05tr","2,5tr","0,5tr","cung cap so phu ngan hang tu T4 den T9.\n\ncung cap ds CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("255","DNTN Vàng Bạc Hồng Bích","84905380216","HONG BICH","13","T8/2016","88.2tr","1.422tr","3.86tr","0.77tr","cung cap sao ke va so phu ngan hang den het T8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("256","DNTN Hiệu Vàng Kim Minh NT","841657287234","KIM MINH","13","T8/2016","55.14tr","0.636tr","5.73tr","1.15tr","bo sung chung tu ngan hang T1/2016 den T8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("257","DNTN Vàng Bạc Kim Huệ Thảo","84982857375","KIM HUE THAO","20","T8/16","366,6tr","2,2tr","500ng","100ng","Cung cap so phu ngan hang T8-T9.\n\ncung cap ds CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("258","DNTN Vàng Bạc Kim Phúc Lai Liên","84948976506","KIM PHUC LAI LIEN","20","T8/16","2tr","200ng","0","0","cung cap so phu ngan hang tu T2 den T9.","9","2016","1");
INSERT INTO thutuvan VALUES("259","DNTN Vàng Bạc Đá Quý Kim Khoa","841276232779","KIM KHOA","20","T8/16","447tr","2,2tr","1,7tr","350ng","Cung cap so phu ngan hang tu T4-T9.\n\nCung cap ds CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("260","DNTN Hiệu Vàng Ngọc Hương Anh","84905882898","NGOC HUONG ANH","23","T8/2016","925tr","2,02tr","1,4tr","277ng","B.sung chung tu, sao ke ngan hang tu T1 den T9","9","2016","1");
INSERT INTO thutuvan VALUES("261","DNTN Hiệu Vàng Kim Liên Nha Trang","84905184650","KIM LIEN","11","T8/2016","177.6tr","1.96tr","518.184","100.000","xuat bo sung 99.5 tr doanh thu ","9","2016","1");
INSERT INTO thutuvan VALUES("262","Công ty TNHH Hồng Trung NT","841229847873","HONG TRUNG","21","T8/16","12tr","0,6tr","7,9tr","1,58tr","Cung cap CMND nhan vien BH","9","2016","1");
INSERT INTO thutuvan VALUES("263","DNTN Vàng Bạc Đá Quý Mỹ Nghệ Kim Ngọc","84905650979","KIM NGOC","11","T8/2016","308tr","3.2tr","738.530","147.706","xuat bo sung 527 tr doanh so ","9","2016","1");
INSERT INTO thutuvan VALUES("264","DNTN Kim Thanh Lịch","84907742702","KIM THANH LICH","11","T8/2016","2.053tr","4.2tr","16.3tr","0","xuat bo sung 27tr doanh thu","9","2016","1");
INSERT INTO thutuvan VALUES("265","DNTN Vàng Đá Quý Kim Khoa","84978810910","KIM KHOA","20","T8/16","192,5tr","1,1tr","0","0","cung cap so phu ngan hang tu T5 den T9.\n\nCung cap ds CMND khach hang.","9","2016","1");
INSERT INTO thutuvan VALUES("267","CÔNG TY TNHH THIẾT KẾ VÀ XÂY DỰNG PHÚC CHÂU","84908508640","PHUC CHAU","20","T8/2016","","","","","cung cap so phu ngan han, bang luong, hop dong, du toan cong trinh.","9","2016","1");
INSERT INTO thutuvan VALUES("268","Cty TNHH XD Nhật Dinh","84975971111","NHAT DINH","11","T8/2016","223tr","19.7tr","60tr","12tr","kiem tra lai hoa don cua xay lap 5, bo sung CMND dieu hanh van tai","9","2016","1");
INSERT INTO thutuvan VALUES("269","Doanh Nghiệp Tư Nhân Minh Tiến Nha Trang","84935188852","MINH TIEN","23","T8/2016","225tr","2tr","204ng","41ng","B.sung chung tu, sao ke ngan hang tu T1 den T9","9","2016","1");
INSERT INTO thutuvan VALUES("270","CÔNG TY TNHH DẦU NHỚT AN KHANG","84919712374","AN KHANG","21","T8/2016","58,7tr","4,2tr","-4tr","0","KH cung cap chung tu NH T1-T6","9","2016","1");
INSERT INTO thutuvan VALUES("271","Doanh Nghiệp Tư Nhân Kim Vân 2 BT","84935663195","KIM VAN 2BT","23","T8/2016","483tr","1.7tr","3.3tr","0","B.sung chung tu, sao ke ngan hang tu T1 den T9","9","2016","1");
INSERT INTO thutuvan VALUES("272","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ VIỄN THÔNG TUẤN HÙNG","84913433456","TUAN HUNG","21","T8/2016","11,51tr","-2,16ty","-4,7tr","0","KH cung cap CMND Thanh Truc, chung tu NH Maritime T5-T8","9","2016","1");
INSERT INTO thutuvan VALUES("273","DNTN Vàng Bạc Ngọc Huyền","841682555928","NGOC HUYEN","21","T8/2016","125,76tr","0,3tr","-1,5tr","0","","9","2016","1");
INSERT INTO thutuvan VALUES("274","Công ty cổ phần thương mại và dịch vụ V.C.L","84989548546","V.C.L","20","T8/2016","130,3tr","3,9tr","-2,4tr","0","Cung cap CMND nha cung cap khong co hoa don. Xuat doanh thu ca the dung thoi diem. Theo doi cong no chi tiet theo doi tuong. Xuat du DT hiep thuong.","9","2016","1");
INSERT INTO thutuvan VALUES("275","Công ty TNHH Dịch vụ In Ấn - Photocopy Sao Mai Diên Khánh","841688117468","SAO MAI","21","T8/2016","","","","","KH cung cap day du ho so chung tu theo tung thang.","9","2016","1");
INSERT INTO thutuvan VALUES("276","Công ty TNHH Công nghệ Sinh học Biozyme","84986011756","BIOZYME","21","T8/2016","","","","","KH can phai xuat hoa don day du & cung cap kip thoi cho kt theo tung thang","9","2016","1");
INSERT INTO thutuvan VALUES("277","DNTN Cơ khí Quỳnh Anh","841697071832","QUYNH ANH","21","T8/2016","","","","","KH cung cap Hop dong,du toan cong trinh & hoa don chung tu kip thoi theo tung thang","9","2016","1");
INSERT INTO thutuvan VALUES("278","Doanh Nghiệp Tư Nhân Hiệu Vàng Xuân Thảo","84913410803","XUAN THAO","23","T8/2016","920","1.2tr","-6.9tr","","B.sung chung tu, sao ke ngan hang tu T1 den T9","9","2016","1");
INSERT INTO thutuvan VALUES("279","Công ty tnhh TM-DV Minh Châu","84989158819","MINH CHAU","11","T8/2016","616tr","-217.8tr","39.8tr","0","bo sung HD Hoang Long t8 so 757,759 ngay 15/8","9","2016","1");
INSERT INTO thutuvan VALUES("280","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VÀ DU LỊCH BLUE VIỆT","84983111326","BLUE VIET","15","T8/2016","2.8ty","0","185tr","36tr","Xuat het ve may bay. Khong de kho bi am hang","9","2016","1");
INSERT INTO thutuvan VALUES("281","DNTN Kim Phát Khánh Hòa","84946062467","KIM PHAT","21","T8/2016","364,9tr","0,91tr","2,9tr","0,58tr","","9","2016","1");
INSERT INTO thutuvan VALUES("282","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Thắng","841285355240","NGOC THANG","23","T8/2016","95.9tr","1.8tr","-8.8tr","0","B.sung chung tu, sao ke ngan hang tu T1 den T9","9","2016","1");
INSERT INTO thutuvan VALUES("283","DNTN Vàng Bạc Kim Tuấn","84905515378","KIM TUAN","21","T8/2016","86,1tr","0,46tr","1,46tr","0,29tr","KH cung cap chung tu NH T1-T9","9","2016","1");
INSERT INTO thutuvan VALUES("284","DNTN Vàng Bạc Kim Tuấn Vũ","841228528344","KIM TUAN VU","21","T8/2016","431,7tr","1,82tr","6,8tr","1,36tr","","9","2016","1");
INSERT INTO thutuvan VALUES("285","DNTN Vàng Bạc Sơn Nữ","84989577242","SON NU","21","T8/2016","76,69tr","479 ngan","694 ngan","138 ngan","","9","2016","1");
INSERT INTO thutuvan VALUES("286","Công ty tnhh Hiển Bình","84913433016","HIEN BINH","15","T8/16","1,9ty","0","-20tr","0","HD dau vao dung ngay de kho ko am. BSung sao ke TK vay","9","2016","1");
INSERT INTO thutuvan VALUES("287","Doanh Nghiệp Tư Nhân Vàng Bạc Tân Mỹ","84905331227","TAN MY","21","T8/2016","257,1tr","1,73tr","1,79tr","0,36tr","KH cung cap chung tu NH T1-T9","9","2016","1");
INSERT INTO thutuvan VALUES("288","DNTN Vàng Bạc Ngọc Duy","84984390899","NGOC DUY","21","T8/2016","93tr","0,46tr","1,5tr","0,3tr","KH cung cap chung tu NH T4-T8","9","2016","1");
INSERT INTO thutuvan VALUES("289","DNTN Vàng Phát Đạt","84935151280","PHAT DAT","21","T8/2016","14,1tr","125 ng","-11,3tr","0","KH cung cap chung tu NH T1-T8","9","2016","1");
INSERT INTO thutuvan VALUES("290","DNTN Hiệu Vàng Bảo Ngân","84913444492","BAO NGAN","21","T8/2016","315,9tr","1,38tr","6,8tr","0","","9","2016","1");
INSERT INTO thutuvan VALUES("291","DNTN Vàng Bạc Kim Linh","84935503249","KIM LINH","21","T8/2016","516,8tr","2,97tr","10,9tr","2,18tr","KH cung cap chung tu NH T4-T8","9","2016","1");
INSERT INTO thutuvan VALUES("292","Doanh Nghiệp Tư Nhân Kim Tùng Chi","84914199831","KIM TUNG CHI","21","T8/2016","727,9tr","3tr","4,15tr","830 ng","","9","2016","1");
INSERT INTO thutuvan VALUES("293","DNTN Vàng Bạc Kim Út","841696843514","KIM UT","21","T8/2016","574,7tr","2tr","3tr","600ng","","9","2016","1");
INSERT INTO thutuvan VALUES("294","Công ty TNHH Thương mại KTV","84989194979","KTV","11","T8/2016","45,4tr","3.8tr","36tr","","bo sung CMND nhan vien, hop dong so 01/2016, hoa don chi phi phat sinh","9","2016","1");
INSERT INTO thutuvan VALUES("296","Cty TNHH Lợi Vinh","84905178406","LOI VINH","11","T8/2016","135.7tr","3tr","17.6tr","3.52","bo sung CMND cua Loi,Yen,Nga","9","2016","1");
INSERT INTO thutuvan VALUES("297","Công ty TNHH Quốc hảo","84986885079","QUOC HAO","23","T8/2016","74tr","-1tr","2.5tr","50ng","Bo sung chung tu ngan hang tu t7 den t9","9","2016","1");
INSERT INTO thutuvan VALUES("298","DNTN Kinh doanh Vàng bạc Anh Thế","84905107033","ANH THE","21","T8/2016","1,74 ty","1,35tr","1,5tr","320 ng","","9","2016","1");
INSERT INTO thutuvan VALUES("299","Công ty tnhh Tý Hưng","84913431357","TY HUNG","11","T8/2016","92tr","8.1tr","32tr","0","lay hoa don dau vao hang hoa day du kip thoi","9","2016","1");
INSERT INTO thutuvan VALUES("300","Cty TNHH Vàng, Bạc , Đá quý Dũng Ninh Hòa KH","84913482719","DUNG NINH HOA","22","T8/2016","170Tr","0.538tr","2.9tr","0","Lay so phu ngan hang quy 2, quy 3/2016","9","2016","1");
INSERT INTO thutuvan VALUES("301","DNTN Vàng Ngọc Thơ","84989496726","NGOC THO","22","T8/2016","45.2tr","0.2tr","1.9tr","0","- Can doi viec xuat doanh thu (DT), DT= 1/4 DT binh thuong\n\n- Lay so phu ngan hang quy 3\n\n- Han che xuat sai hoa don","9","2016","1");
INSERT INTO thutuvan VALUES("302","Công ty TNHH Cheers","84905574490","CHEERS","23","T8/2016","32tr","980ng","1.1tr","225ng","bo sung chung tu ngan hang tu T8 den T9","9","2016","1");
INSERT INTO thutuvan VALUES("303","DNTN Vàng Bạc Ngọc Hà","841224488440","NGOC HA","13","T8/2016","32.5tr","0.45tr","0.53tr","107ng","xuat bo sung doanh thu hiep thuong năm 2016","9","2016","1");
INSERT INTO thutuvan VALUES("305","Công ty TNHH Cát Minh Nha Trang","84905103793","CAT MINH","13","T8/2016","55.6tr","-343.8tr","-20.6tr","0","- doi voi dich vu luu tru ngan ngay hoa don phong xuat < 30 ngay/thang.khi xuat hoa don phai dung voi gia phong nien yet, phu hop voi phan mem ke khai thue.bo sung sao ke ngan hang T1 den T8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("306","DNTN Vàng Bạc Đức Kim Dung","84942191921","KIM DUNG","20","T8/2016","719tr","1.9tr","3.8tr ","770","Bsug so phu T5-8/16","9","2016","1");
INSERT INTO thutuvan VALUES("308","Công ty TNHH MTV Thương Mại Dịch vụ Trí Thúy","84914311700","TRI THUY","19","T8/2016","606","0","26TR","5.2TR","","9","2016","1");
INSERT INTO thutuvan VALUES("309","Công ty TNHH Viễn Thông Tin Học VMS","84948002202","VMS","7","T8/2016","7,66tr","-0,54","-9,35","0","","9","2016","1");
INSERT INTO thutuvan VALUES("310","DNTN Vàng Bạc Kim Oanh","84935063193","KIM OANH","20","T8/2016","369tr","2tr","-217ng","0","Bsug so phu ngan hang T5-8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("311","CÔNG TY TNHH BILLIARDS HẢI ÂU","84903540444","HAI AU","16","T8/2016","89tr","3,1tr","6,1tr","1,2tr","","9","2016","1");
INSERT INTO thutuvan VALUES("312","Công ty TNHH OPALUS H&T","84918250512","OPALUS H&T","7","T8/2016","11,09tr","-45,72tr","-28,67tr","0","Can kiem tra doanh thu len so do mang cho dung voi hoa don xuat ra.","9","2016","1");
INSERT INTO thutuvan VALUES("313","Cty GD Thanh Thảo","84933860479","THANH THAO","16","T8/2016","70,6tr","0","20,6","2,2tr","cung cap cmnd nhan vien","9","2016","1");
INSERT INTO thutuvan VALUES("314","DNTN Vàng Bạc Đá quý Kim Giang","84978595598","KIM GIANG","20","T8/2016","100 trieu","315.000","1,2 trieu","240.000","Bo sung so phu ngan hang tu T2-8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("315","Cty TNHH Trúc Nguyễn","84905474247","TRUC NGUYEN","16","T8/2016","73,7tr","5,3tr","-1,3tr","0","Xuat du doanh thu hiep thuong","9","2016","1");
INSERT INTO thutuvan VALUES("316","Công ty tnhh thủy sản An Bình","84917369911","AN BINH","16","T8/2016","2,6ty","-374,7tr","337,1tr","67,4","cung cap them cmnd nguoi ban ca","9","2016","1");
INSERT INTO thutuvan VALUES("317","DNTN Vàng Oanh Thắng","84933455558","OANH THANG","16","T8/2016","1,8ty","3,4tr","8,8tr","1,7tr","","9","2016","1");
INSERT INTO thutuvan VALUES("318","Công ty TNHH Khách Sạn Trăng Xanh","84987919196","TRANG XANH","13","T8/2016","34.14tr","-4.03tr","-0.8tr","0","theo quy dinh doi voi dich vu luu tru khong duoc xuat hoa don >30 ngay.khi xuat hoa don phai dung theo gia phong da niem yet.dam bao tinh chinh xac voi phan men aun li thue.bo sung sao ke ngan hang T1-T8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("319","DNTN Thân thiết","841648025555","THAN THIET","16","T8/2016","5,2ty","3,2tr","4,5","0,9tr","","9","2016","1");
INSERT INTO thutuvan VALUES("320","DNTN AN Tín Nha Trang","84905110130","AN TIN","16","T8/2016","227,8tr","1,4tr","4,5","0,9","","9","2016","1");
INSERT INTO thutuvan VALUES("321","DNTN Hiệu Vàng Huỳnh Mai","84983307454","HUYNH MAI","16","T8/2016","223,7tr","2,6tr","558ng","111ng","","9","2016","1");
INSERT INTO thutuvan VALUES("322","Công ty TNHH Thuốc Y Học Cổ truyền Vạn Lộc","84939613771","VAN LOC","16","T8/2016","15,6","-741ng","-2,7","0","","9","2016","1");
INSERT INTO thutuvan VALUES("323","CN Cty Trương Gia Phát (Grill Garden)","84903584058","GRILL GARDEN","13","T8/2016","304.6tr","11.425tr","-10.47tr","0","hoan thien so dau ban dam bao dung voi so lieu khi xuat hoa don","9","2016","1");
INSERT INTO thutuvan VALUES("324","Công ty TNHH Quảng cáo Trường Thiên Phát","84915218008","TRUONG THIEN PHAT","16","T8/2016","80tr","4,4","4,7","940ng","ton kho qua nhieu, xuat ban nguyen vat lieu","9","2016","1");
INSERT INTO thutuvan VALUES("325","Công ty TNHH Thương Mại và Du Lịch Việt Úc","84903178664","VIET UC","13","T8/2016","30.9tr","-18.6tr","97.3tr","19.46tr","lay bo sung hop dong tour va cung cap bang gia cac tour","9","2016","1");
INSERT INTO thutuvan VALUES("326","DNTN Hiệu Vàng Ngọc Duy","84984390899","NGOC DUY","16","T8/2016","3,93ty","4,7tr","7,2","1,6","bs ctu ngan hang t4-t8/2016","9","2016","1");
INSERT INTO thutuvan VALUES("327","Công ty TNHH TM DV Blooming Việt Nam","84983111326","BLOOMING","4","T8/2016","","","","","bo sung CMND, hoa don, chung tu ngan hang,hop dong mua ban","9","2016","1");
INSERT INTO thutuvan VALUES("328","DNTN Du lịch Cát Lộc","84989035457","CAT LOC","4","T8/2016","28.2tr","-36.8","-28.9","","","9","2016","1");
INSERT INTO thutuvan VALUES("329","DNTN SX TM & DV Toàn Hưng","84905082226","TOAN HUNG","4","T8/2016","1257tr","82.8","44.5","","bo sung hoa don mua vai","9","2016","1");
INSERT INTO thutuvan VALUES("330","Công ty TNHH Du Lịch Mây Ngũ Sắc","84903229568","MAY NGU SAC","4","T8/2016","","-119.3","","","Bo sung du toan cong trinh, cmnd cong nhan vien.","9","2016","1");
INSERT INTO thutuvan VALUES("331","Công ty TNHH TM& DV Hải Tâm","841673130679","HAI TAM","4","T8/2016","57.3","-1.22","-11.7","","Xuat hoa don ban ra dung ten hang mua vao","9","2016","1");
INSERT INTO thutuvan VALUES("332","Công ty TNHH Beach City","841689943267","BEACH CITY","4","T8/2016","121.5","9.7","2.9","","Bo sung sao ke ngan hang tu t6-t9/2016; cmnd lao dong; hd thue phong moi","9","2016","1");
INSERT INTO thutuvan VALUES("333","Công ty TNHH DL & TM Thịnh Vượng","84967904959","THINH VUONG","4","T8/2016","939tr","-2.5","-70","","Bo sung sao ke+chung tu ngan hang t6-t9/2016","9","2016","1");
INSERT INTO thutuvan VALUES("334","Công ty TNHH Du Lịch Hoa Nhài","84919150475","HOA NHAI","4","T8/2016","141TR","-0.15TR","37.8TR","","Bo sung sao ke+chung tu NH tu T1-9/2016; CMND nhan vien; hoa don dau vao thieu ve quoc te","9","2016","1");
INSERT INTO thutuvan VALUES("335","Công ty TNHH Khang Thái Vietnam Travel","84947138819","KHANG THAI","4","T8/2016","251TR","-12.9TR","137TR","27TR","Bo sung hoa don va ho so xe, CMND nhan vien de giam LN","9","2016","1");
INSERT INTO thutuvan VALUES("336","Công ty TNHH XD Tân Minh Nha Trang","84902858271","TAN MINH","4","T8/2016","5tr","0.5tr","","","Bo sung CMND nhan cong; họp dong thi cong. chung tu ngan hang tu t6-9","9","2016","1");
INSERT INTO thutuvan VALUES("337","Công ty TNHH Tư vấn Xây dựng Tân Khánh","84901935468","TAN KHANH","4","T8/2016","","","","","bo sung CMND, hoa don vat tu, sao ke+chung tu ngan hang tu T6-9/2016","9","2016","1");
INSERT INTO thutuvan VALUES("338","Công ty TNHH Sản xuất Và Thương Mại ATP","84942035733","ATP","22","T8/2016","57.75Tr","(0.206Tr)","20.16Tr","4Tr","- Lay so phu ngan hang quy 3 cua ca 2 Ngan hang\n\n- Cung cap bien ban thanh ly hop dong","9","2016","1");
INSERT INTO thutuvan VALUES("339","Công ty TNHH Mỹ Tâm NT","84915802160","MY TAM","22","T8/2016","886.24Tr","(1.4Ty)","(38.5Tr)","0","- Han che huy Hoa don\n\n- Doi chieu kho, cong no.\n\n- Lam bien ban thu hoi hoa don cho HD huy da xe khoi cuon.","9","2016","1");
INSERT INTO thutuvan VALUES("340","Công ty TNHH Tư vấn Giải pháp Công Nghệ Thông tin","84978595499","GIAI PHAP CNTT","22","T8/2016","0","0","0","0","Cung cap hoa don mua vao, ban ra neu co phat sinh\n\nCung cap CMND nhan vien ","9","2016","1");
INSERT INTO thutuvan VALUES("342","Công ty TNHH Hoa Đăng Nha Trang","84902038459","HOA DANG","4","T8/2016","46tr","-12tr","-80tr","","Bo sung CMND nguoi ban khong co hoa don,ctu ngan hang T6-9/2016","9","2016","1");
INSERT INTO thutuvan VALUES("343","Công ty TNHH Fiero Việt Nam","84917879338","FIERO","22","T8/2016","448.6Tr","7.6Tr","22.2Tr","0","Gui INVOICE cua ASANO T7, T8\n\n- Gui Hoa don Dien phi T7, T8 + So phu ngan hang","9","2016","1");
INSERT INTO thutuvan VALUES("344","Tô Quang Sáng- Công ty TNHH Xây Dựng Sao Sáng","84933135479","SAO SANG","4","T8/2016","7089,8tr","226,5","","","Bo sung bang luong quy 2+3; thue phai nop quy 2:1231tr chua nop, de nghi nop tranh tien phat.","9","2016","1");
INSERT INTO thutuvan VALUES("345","Công ty TNHH Thiện Long Nha Trang","84971128081","THIEN LONG","5","T8/2016","6,1ty","506tr","","","bo sung ho so quyet toan cac cong trinh da hoan thanh, bo sung bang luong va CMND nhan vien van phong t4->t9","9","2016","1");
INSERT INTO thutuvan VALUES("346","Công Ty TNHH Một Thành Viên Trung Hiếu Khánh Hòa","84903593239","TRUNG HIEU","5","T8/2016","1,7ty","","66tr","13tr","cap nhap, bo sung CMND nhan vien ban le thuc te tai Cty. Thue TNCN T8: 3tr","9","2016","1");
INSERT INTO thutuvan VALUES("347","DNTN Phước Chương","84913463538","PHUOC CHUONG","5","T8/2016","121tr","1,7tr","-11,6tr","0","","9","2016","1");
INSERT INTO thutuvan VALUES("348","Công ty TNHH chế biến Thủy sản Hoàng Phát","84915333706","HOANG PHAT","5","T8/2016","992tr","96tr","-6tr","0","bo sung bang luong nhan vien hang thang, CMND nhan vien","9","2016","1");
INSERT INTO thutuvan VALUES("349","Công ty TNHH MTV Du Lịch Thương mại Hòa Bình","84988699797","HOA BINH","22","T8/2016","69.06Tr","1.763Tr","20Tr","0","Lay chi phi phu hop voi tinh hinh KD cua DN","9","2016","1");
INSERT INTO thutuvan VALUES("350","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ DU LỊCH IHOME TEAM","84976400474","IHOME TEAM","7","T8/2016","54,69tr","-13,7tr","-17,09tr","","Bo sung chung tu ngan hang quy 3, xem lai doanh thu ke khai so do mang","9","2016","1");
INSERT INTO thutuvan VALUES("352","Công ty tnhh Thiên Kim Phát","84914455881","THIEN KIM PHAT","23","T8/2016","126tr","11.4tr","25tr","5tr","","9","2016","1");
INSERT INTO thutuvan VALUES("353","DNTN Vàng bạc Đá quý Ngọc Hoa","84905456599","NGOC HOA","23","T8/2016","180tr","2.08tr","1.6tr","315ng","Bo sung chung tu ngan hang tu T1 den nay","9","2016","1");
INSERT INTO thutuvan VALUES("354","Doanh Nghiệp Tư Nhân Dịch Vụ Khách Sạn Quỳnh Trang","84989447907","QUYNH TRANG","23","T8/2016","21tr","689ng","3.8tr","760ng","bo sung chung tu ngan hang tu T1 den nay","9","2016","1");
INSERT INTO thutuvan VALUES("355","DNTN ABM Nha Trang","84916810479","ABM","23","T8/2016","95tr","4.8tr","67.6tr","13.4tr","Bo sung chung tu ngan hang tu T4 den nay. Bo sung bang luong T9+CMND","9","2016","1");
INSERT INTO thutuvan VALUES("356","Công ty TNHH Bắc Xiêm","84903359640","BAC XIEM","7","T8/2016","","-1,3tr","-12,3tr","","Lay hoa don chi phi va kem hop dong (neu co)","9","2016","1");
INSERT INTO thutuvan VALUES("357","Công ty CP Tư vấn XD và DV Đô thị Nha Trang","84943689966","DO THI NHA TRANG","7","T8/2016","","-69,97tr","-22,68tr","","Xuat hoa don theo dung tien do ghi tren hop dong.","9","2016","1");
INSERT INTO thutuvan VALUES("358","DNTN An Trang TP","84914152116","AN TRANG","5","T8/2016","129tr","4tr","","","bo sung CMND nhan vien","9","2016","1");
INSERT INTO thutuvan VALUES("359","Công ty TNHH Vietsea Hotel Inc","84924155789","VIETSEA","13","T8/2016","4.37tr","-175.03tr","-22.64tr","0","cung cap chung tu ngan hang nam 2016.xuat bo sung doanh thu phu hop voi phan mem quan ly thue va cong an.","9","2016","1");
INSERT INTO thutuvan VALUES("360","Công ty TNHH SX XD Tâm Việt","84905180414","TAM VIET","11","T8/2016","","","270TR","","Bo sung: chi phi thue van phong, dien, nuoc, so phu ngan hang tu t5-t9","9","2016","1");
INSERT INTO thutuvan VALUES("361","Công ty TNHH Khách sạn& Du lịch Hoa Tulip","84903049097","HOA TULIP","13","T8/2016","43.3tr","2.167tr","-36.35tr","0","cung cap chung tu ngan hang T1-T8/2016.xuat hoa don day du thong tin phong+don gia+so luong.xuat hoa don phu hop voi phan mem quan li khach san va phan mem quan li cua cong an.","9","2016","1");
INSERT INTO thutuvan VALUES("362","Công ty TNHH Thiết kế XD Phú Bảo","84906556168","PHU BAO","11","T8/2016","","64.3tr","","","Bo sung so phu Nh T1-t9, CMND cong nhan, ty le tron be tong tai don vi","9","2016","1");
INSERT INTO thutuvan VALUES("363","Công ty TNHH Phần Mềm BG","84915780794","BG","13","T8/2016","56.5tr","0","0","0","de nghi khach hang khong thanh toan tien luong qua tai khoan ngan hang de dam bao tinh chinh xac khi hach toan chi phi tien luong.","9","2016","1");
INSERT INTO thutuvan VALUES("364","CÔNG TY TNHH ÁNH SAO SÁNG","84935773004","ANH SAO SANG","11","T8/2016","219 tr","20.06tr","","","bo sung hoa don chi phi:dien,nuoc,dung dich tay rua,CMND nhan vien moi","9","2016","1");
INSERT INTO thutuvan VALUES("365","Công ty TNHH M Lounge","84903584058","M LOUNGE","13","Quy 2/2016","75.4tr","-23.78tr","-183tr","0","de nghi khach hang xuat doanh thu dung voi tinh hinh kinh doanh thuc te tai DN.","9","2016","1");
INSERT INTO thutuvan VALUES("366","Công Ty TNHH Một Thành Viên LaVu Residence","84989399695","LAVU","13","T8/2016","65.56tr","3.078tr","-10.1tr","0","bo sung c.tu ngan hang T7-8/2016.xuat hoa don phu hop voi phan mem QLKS va cong an.xuat gia phong dung gia niem yet.","9","2016","1");
INSERT INTO thutuvan VALUES("367","CÔNG TY TNHH HÀNG HẢI HẢI PHONG","84935540236","HAI PHONG","11","T8/2016","","","","","bo sung CMND chi Hieu, hoa don dau ra dau vao phat sinh trong quy 3","9","2016","1");
INSERT INTO thutuvan VALUES("368","Công Ty TNHH Thiên Phước Hưng","84905119111","THIEN PHUOC HUNG","13","T8/2016","3.2tr","-5.66tr","-0.7tr","0","de nghi KH xuat doanh thu dung theo tinh hinh kinh doanh tai DN.bo sung sao ke ngan hang T1-T8/2016.","9","2016","1");
INSERT INTO thutuvan VALUES("369","CÔNG TY TNHH IN ẤN QUẢNG CÁO NON NON","84914147767","NON NON","11","T8/2016","126tr","4tr","","","bo sung so phu ngan hang t4-t9, bo sung hoa don chi phi phat sinh trong quy 3: tiep khach, dien, nuoc","9","2016","1");
INSERT INTO thutuvan VALUES("370","Cty TNHH Nguyên Hoàng KABAPAH","84977151231","KABAPAH","11","T8/2016","73.4tr","2.2tr","18tr","3.6tr","bo sung CMND chi hong","9","2016","1");
INSERT INTO thutuvan VALUES("371","DNTN HOÀNG TRINH","84905818015","HOANG TRINH","13","T8/2016","4ty443.2tr","18.2tr","137.1tr","27.4tr","bo sung danh sach nhan vien dang lam viec tai DN kem theo CMND de hach toan CP luong dam bao tinh chinh xac","9","2016","1");
INSERT INTO thutuvan VALUES("372","Công ty TNHH Trà My Khánh Hòa","84905714578","TRA MY","13","T8/2016","70.15tr","-37.19tr","-0.57tr","0","bo sung kip thoi hoa don van chuyen de dam bao tinh kip thoi va chinh xac cua so sach ke toan.","9","2016","1");
INSERT INTO thutuvan VALUES("373","Công ty TNHH TM DV Tấn Lợi","84913472339","TAN LOI","13","T8/2016","0","0","0","0","de nghi DN ra soat lai cac ho so ban dau cua DN de ke toan co can cu bo sung.","9","2016","1");
INSERT INTO thutuvan VALUES("374","CÔNG TY TNHH MTV Tiếng Anh THÔNG THÁI IMEA","841224456890","THONG THAI","13","T8/2016","104.2tr","0","-4.4tr","0","xuat bo sung doanh thu ban sach cho hoc vien.ra soat lay bo sung cac khoan chi phi dang phat sinh tai DN.","9","2016","1");
INSERT INTO thutuvan VALUES("375","Công ty TNHH Dịch vụ Du Lịch B&B","841276066360","B&B","7","T8/2016","","","","","Xuat hoa don day du, ghi ro so ve và ma hanh trinh tren hoa don ban ra.Thanh toan qua ngan hang voi hoa don 20tr tro len.","9","2016","1");
INSERT INTO thutuvan VALUES("376","Công ty TNHH Vận tải Minh Vũ","841202380347","MINH VU","16","T8/2016","615,3tr","-175,6","-282tr","0","cung cap day du cmnd cua tat ca nhan vien, Doanh thu ban ra khong phu hop voi cong suat cua 4 xe tai, DN khach hang xuat hoa don phu hop voi chi pho","9","2016","1");
INSERT INTO thutuvan VALUES("377","CÔNG TY TNHH THƯƠNG MẠI BẢO TÍN PHÁT","84903520778","BAO TIN PHAT","16","T8/2016","163,3tr","23,9tr","6,2tr","1,2tr","xuat day du hoa don ban ra khi phat sinh KH chuyen tien vao TK ngan hang","9","2016","1");
INSERT INTO thutuvan VALUES("378","Công ty TNHH TM HQ Nha Trang","84993248439","HQ","16","T8/2016","","","","","de nghi KH cung cap chung tu ke toan hang thang truoc ngay 20 hang thang de ke toan xu ly kip thoi va dam bao duoc do chinh xac","9","2016","1");
INSERT INTO thutuvan VALUES("379","Công ty TNHH Việt Trí Quang","84905222202","VIET TRI QUANG","16","T8/2016","","","","","DN khach hang xuat hoa don va lay hoa don chung tu day du khi phat sinh mua ban hang hoa. Cung cap chung tu hang thang de ke toan xu ly hang thang","9","2016","1");
INSERT INTO thutuvan VALUES("380","Công ty TNHH Đầu tư Tri Thức Việt","84913947077","TRI THUC VIET","16","T8/2016","","","","","cung cap chung tu ngan hang tu t5 den thang t9 de ke toan hach toan kip thoi","9","2016","1");
INSERT INTO thutuvan VALUES("381","Công ty tnhh Phúc Studio","84935774242","PHUC STUDIO","16","T8/2016","6,2tr","300ng","-1,52tr","0","Cung cap chung tu ngan hang t8-t9/2016, cung cap cmnd nhan vien Phuoc, Truc","9","2016","1");
INSERT INTO thutuvan VALUES("382","Công ty TNHH Đầu tư XD và KD BĐS Điền Lộc Phát","84909069416","DIEN LOC PHAT","16","T8/2016","0","9,8tr","-16,6tr","0","Cung cap day du HDLD, CMND cua nhan vien, hop dong thue mat bang dia diem kinh doanh Le Hong Phong","9","2016","1");
INSERT INTO thutuvan VALUES("383","Công ty TNHH TM và DV Bạn Của Tôi","84915624235","BAN CUA TOI","16","T8/2016","10,5tr","525ng","1,25","250ng","Cung cap day du CMND, HDLD cua nhan vien, chung tu ngan hang ","9","2016","1");
INSERT INTO thutuvan VALUES("384","Công ty TNHH Trường Ý","84914050879","TRUONG Y","16","T8/2016","0","5,1tr","-18,5tr","0","Cung cap chung tu ngan hang tu t6-t9/2016 kip thoi","9","2016","1");
INSERT INTO thutuvan VALUES("385","Doanh Nghiệp Tư Nhân Vàng Ngọc Mai Nha Trang","841263663979","NGOC MAI","5","QUY 3/2016","20,5ty","23,4tr","75,5tr","16,6tr","","9","2016","1");
INSERT INTO thutuvan VALUES("386","CÔNG TY TNHH TM DV ITS NHA TRANG","84905448988","ITS","5","T8/2016","","","","","bo sung hoa don dau vao mua: KHAN 41.600 cai, TUI TRANG 98 kg.","9","2016","1");
INSERT INTO thutuvan VALUES("387","CÔNG TY TNHH SEN SPA","84908258121","SEN SPA","16","T8/2016","32,7","1,6tr","12,8","2,6","","9","2016","1");
INSERT INTO thutuvan VALUES("388","Công ty TNHH MTV Thuận Thành","84905203784","THUAN THANH","16","T8/2016","197,3tr","18,9tr","28,3tr","5,7tr","Ton kho qua nhieu so voi thuc te yeu cau xuat hoa  khi ban xe nuoc mia","9","2016","1");
INSERT INTO thutuvan VALUES("389","Công ty TNHH Vườn Nướng","84903584058","VUON NUONG","13","T8/2016","85,1","2,1","-45tr","0","lay hoa don day du khi mua nguyen vat lieu","9","2016","1");
INSERT INTO thutuvan VALUES("390","Công ty TNHH TM và DV Agrilife","84913182948","AGRILIFE","20","T8/2016","0","-134,62tr","-18,3tr","0","xuat du doanh thu phat sinh.","9","2016","1");
INSERT INTO thutuvan VALUES("391","Công ty TNHH Xuân Minh-Cam Ranh","84986361368","XUAN MINH","20","T8/2016","76tr","16,7tr","12,1tr","2,4tr","Bsung hoa don gia vi. sphu ngan hang T8,9","9","2016","1");
INSERT INTO thutuvan VALUES("392","Công ty TNHH Quỳnh ANh Vạn Ninh","84935450471","QUYNH ANH","20","T8/2016","154tr","1,7tr","-31tr","0","theo doi cac khoan dthu qua ngan hang de xuat hd chinh xac. cung cap cmnd lao dong moi.","9","2016","1");
INSERT INTO thutuvan VALUES("393","Công ty TNHH TM&DV Hoàng Phúc","84979275798","HOANG PHUC","15","T8/2016"," 284,8tr"," 24,4 tr"," 106.5tr"," 21tr","xuat hoa don dung ngay ghi nhan doanh thu, hoa don dau ra ky và dong dau day du, bo sung biên ban nghiệm thu cua An Phong\n\n","9","2016","1");
INSERT INTO thutuvan VALUES("394","CÔNG TY TNHH HẠNH MẾN","84986704949","HANH MEN","20","T7/2016","618tr","-9tr","9,7tr","1,9tr","Bo sung du chung tu dau ra, dau vao t8 kip thoi. Bo sung so ngan hang quy 1/2016.","9","2016","1");
INSERT INTO thutuvan VALUES("395","Công ty TNHH DV TM và SX Nam Đồng","84918259515","NAM DONG","21","T9/2016","672tr","-1,39ty","81tr","16,2tr","KH cung cap Hoa don dau ra dung thoi han","9","2016","1");
INSERT INTO thutuvan VALUES("396","Công ty tnhh TMDV Vĩnh Gia","84914030172","VINH GIA","18","T8/2016","","","","","- Khach hang cung cap ho so quyen toan cong trinh va bang luong cong trinh. \n\n- Cung cap chung tu va sao ke ngan hang T1-9/2016.\n\n- Da ket thuc Q3/2016 doanh nghiep bo sung day du ho so de hoan thanh ho so ke toan.","9","2016","1");
INSERT INTO thutuvan VALUES("397","Công Ty TNHH Bảo Gia An NT","84988335339","BAO GIA AN","21","T8/2016","64,9tr","568 ngan","-14tr","0","KH c.cap Hdon day du,kip thoi tranh am kho","9","2016","1");
INSERT INTO thutuvan VALUES("398","Công ty TNHH Hoàng Yến NT","84989079672","HOANG YEN","21","T8/2016","22,89tr","-21tr","761 ng","152 ng","KH cung cap bang luong & CMND nhan vien ","9","2016","1");
INSERT INTO thutuvan VALUES("399","Công ty TNHH Sự Kiện Tour & Team","84944555197","TOUR&TEAM","7","T8/2016","44,36tr","-134,78","3,3TR","0,66TR","Cung cap hanh trinh di tour kip thoi cua moi thang.","9","2016","1");
INSERT INTO thutuvan VALUES("400","DNTN Vàng Bạc Kim Trí Hòa","84914085941","KIM TRI HOA","20","T8/2016","688tr","1.25tr","12tr","2.4tr","Bo sung so phu ngan hang T8-9/16","9","2016","1");
INSERT INTO thutuvan VALUES("401","Công ty TNHH TM và XD Sky","84933988368","SKY","21","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("402","Công Ty TNHH Cơ Khí Đại Hoàng Phát","84987916330","DAI HOANG PHAT","21","T8/2016","","","","","KH cung cap du toan vat tu theo tung Hop dong ","9","2016","1");
INSERT INTO thutuvan VALUES("403","Công ty TNHH Đầu tư Phát Triển Thành Nhân","84914560822","THANH NHAN","18","T8/2016","","","","","- Trong qua trinh kinh doanh co phat sinh hoa don chung tu doanh nghiep gui day du cho ke toan de hoan thien bao cao thue va so ke toan.\n\n- Doanh nghiep cung cap so phu ngan hang ke tu thoi diem mo toi nay.","9","2016","1");
INSERT INTO thutuvan VALUES("404","Công ty CP BĐS Việt Đức","84935888411","VIET DUC","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("405","Công ty TNHH SX TM DV Thiên Phú Lộc","84934000609","THIEN PHU LOC","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("406","Công ty TNHH Big M Hoàng Minh","84961000168","MIG M HOANG MINH","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("407","Công ty TNHH Khai Thác Điểm Đỗ Nha Trang","84944990568","DIEM DO NHA TRANG","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("408","Công ty TNHH FNANO","84949040599","FNANO","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("409","Công ty TNHH ROYALSTONE","84935583486","ROYALSTONE","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("410","Công ty TNHH NA PLAN VN","841269701550","NAPLAN VN","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("412","Công ty TNHH FOLLOW ME","841206198854","FOLLOW ME","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("413","Công ty TNHH TM-DV KHANG DŨNG","841686752086","KHANG DUNG","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("414","Công ty TNHH TRE XANH SPA","841657984363","TRE XANH SPA","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("416","Công ty TNHH TMDV NGUYỆT HOA","84936698928","NGUYET HOA","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("417","Công ty TNHH TMDV KHẢ ÚY","84913462417","KHA UY","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("418","Công ty TNHH ACCELERATION VIỆT NAM","84935917906","ACCELERATION","5","T8/2016","","","","","BCT","9","2016","0");
INSERT INTO thutuvan VALUES("419","Công ty TNHH TM ĐT Trương Gia Phát","84983218393","TRUONG GIA PHAT","15","T8/16","1,7 tr","0","-144 tr","0","Bo sung sao ke vay NH Vietcom T1-9/16","9","2016","1");
INSERT INTO thutuvan VALUES("420","Công ty TNHH Điện Lạnh Hòa Tam Phát","84969090146","HOA TAM PHAT","15","T8/2016","131 tr","7,8 tr","87.4 trieu","17,5 tr","Kem Bke vat tu khi xuat hoa don ban hang. Bsung BB nghiem thu, thanh ly ","9","2016","1");
INSERT INTO thutuvan VALUES("422","Công ty TNHH TM DV Trần Chương","84934815019","TRAN CHUONG","4","T8/2016","16,87TR","-0,69TR","-4,27TR","0","Cung cap hoa don mua vat tu kip thoi, bang ke dinh kem xuat vat tu trong thang.","9","2016","1");
INSERT INTO thutuvan VALUES("423","Công ty TNHH TM&DV TDP Khánh Hòa","84911449497","TDP","22","T8/16","","","","","Gui toan bo hoa don, chung tu neu co phat sinh den nay.","9","2016","1");
INSERT INTO thutuvan VALUES("424","Công ty TNHH Thiên Phú Nha Trang","84905685353","THIEN PHU","22","T8/16","","","","","Gui toan bo hoa don, chung tu neu co phat sinh den nay.","9","2016","1");
INSERT INTO thutuvan VALUES("425","Công ty TM&DV IZT","84911392255","IZT","15","T8/2016","118,38TR","","","","Gui bang ke xuat vat tu hang thang","9","2016","1");
INSERT INTO thutuvan VALUES("426","Công ty CP Sealife","841222958890","SEALIFE","15","T8/2016","","","","","BSung BKe chi tiet dinh kem hoa don ban hang. Cung cap hoa don ban hang T6,7/16","9","2016","1");
INSERT INTO thutuvan VALUES("427","CÔNG TY TNHH TM & DV THÁI QUYÊN","84932528582","THAI QUYEN","20","T8/2016","410,8tr","172,7tr","","","Bo sung them CMND cua 30 cong nhan de hach toan chi phi luong.","9","2016","1");
INSERT INTO thutuvan VALUES("428","Công Ty CP Green Life","84914811949","GREEN LIFE","15","T8/2016","0","0","0","0","Cung cap hop dong, bien ban nghiem thu, thanh ly cong trinh som de hoan tat chung tu, so sach ","9","2016","1");
INSERT INTO thutuvan VALUES("429","DNTN Hiệu Vàng Khánh Dũng","841217555580","KHANH DUNG","16","T8/2016","456tr","3,06tr","2,7tr","536ng","Bsung so phu ngan hang T4-8. Thanh toan cho PNJ bang hinh thuc chuyen khoan","9","2016","1");
INSERT INTO thutuvan VALUES("430","CÔNG TY TNHH HẠNH MẾN","84986704949","HANH MEN","20","T8/2016","564,8tr","9tr","8,5tr","0","cung cap hoa don dau vao day du kip thoi.","9","2016","1");
INSERT INTO thutuvan VALUES("432","Công ty TNHH Dịch Vụ Du Lịch Phúc Gia","84913461922","PHUC GIA","13","T8/2016","0.8tr","-36.02tr","-16.9tr","0","xuat hoa don phu hop voi ĐK luu tru.xuat dung gia phong niem yet.","9","2016","1");
INSERT INTO thutuvan VALUES("434","Công ty TNHH Du Lịch Trần Gia Bảo","84989682968","TRAN GIA BAO","23","T8/2016","","","","","Cung cap toan bo hoa don, chung tu neu co phat sinh den nay","9","2016","1");
INSERT INTO thutuvan VALUES("435","DNTN Nga","84915802125","DNTN NGA","23","T8/2016","64,5tr ","-6.4tr ","14tr ","2.8tr ","bo sung chung tu ngan hang tu T8-nay, bo sung CMND va cung cap bang luong ","9","2016","1");
INSERT INTO thutuvan VALUES("438","Công ty TNHH Căn Tin Bệnh Viện","841263627966","CAN TIN BENH VIEN","15","T8/2016","749tr","16.5tr","","","","9","2016","1");
INSERT INTO thutuvan VALUES("439","Công ty TNHH TM và DV Rau Củ Quả Phúc Nguyên","84905132533","PHUC NGUYEN","11","T9/2016","4.112TR","32.2tr","","","bo sung CMND nguoi ban rau cu ","9","2016","1");
INSERT INTO thutuvan VALUES("440","cty CP Tôn thép Minh Quang","84905142197","MINH QUANG","7","T8/16","536tr","","-21tr","0","Xuat h.don dung gia hang ton kho, Bsung bke khi xuat hang","9","2016","1");
INSERT INTO thutuvan VALUES("441","Công ty TNHH MTV Thương Mại Dịch vụ Trí Thúy","84914311700","TRI THUY","19","T9/2016","600tr","0","25tr","5tr","Thue TNDN quy 3/2106: 15tr. Ra soat danh muc nhan vien hien co, so voi danh sach tren bang luong.","10","2016","1");
INSERT INTO thutuvan VALUES("442","Doanh Nghiệp Tư Nhân Vàng Ngọc Mai Nha Trang","841263663979","NGOC MAI","5","Q3/2016","20,5ty","23,4tr","75,5tr","16,6tr","","10","2016","1");
INSERT INTO thutuvan VALUES("443","DNTN Phước Chương","84913463538","PHUOC CHUONG","5","Q3/2016","385tr","5,8tr","-23tr","","","10","2016","1");
INSERT INTO thutuvan VALUES("444","Cty TNHH Nguyên Hoàng KABAPAH","84977151231","KABAPAH","11","T9/2016","37.6TR","1.1TR","35Tr","7tr","thue VAT phai nop Q3:3.3tr","10","2016","1");
INSERT INTO thutuvan VALUES("445","Cty TNHH Lợi Vinh","84905178406","LOI VINH","11","T9/2016","123.5tr","4.9tr","13.5tr","2.7tr","thue GTGT phai nop Q3:7tr;bo sung CMND Loi, Nga,Yen truoc 05/11","10","2016","1");
INSERT INTO thutuvan VALUES("446","Công ty CP Đầu Tư XD HỒNG PHÚC","84905819689","HONG PHUC","5","T9/2016","0","-7,35tr","","","bs CMND Pham Vu Lung, ho so bao hiem thang 9/2015 den t9/2016, sao ke ngan hang nam 2016","10","2016","0");
INSERT INTO thutuvan VALUES("447","DNTN Vàng Bạc Hàn Tín","84905550652","HAN TIN","22","T9/2016","114tr","0.479tr","-0.94tr","0","Thue GTGT q3/2016: 863.000d; nop truoc 30/10; Lay so phu T9 va T10/2016","10","2016","1");
INSERT INTO thutuvan VALUES("448","DNTN Vàng Bạc Ngọc Bính","84982299557","NGOC BINH","22","T9/2016","2.1ty","2.28tr","3.79tr","0.578tr","Lay so phu NH quy 3/2016; thue GTGT q3/2016: 6.7tr; nop truoc 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("449","DNTN Vàng Ngọc Thơ","84989496726","NGOC THO","22","T9/2016","116.74tr","0.465tr","2tr","0","Khong ghi tat don gia, thanh tien tren hoa don ban ra; Thue GTGT q3/2016: 979.000d; nop truoc 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("450","DNTN Phương Thông Khánh Hòa","841237935774","PHUONG THONG","22","T9/2016","272.53tr","1.14tr","-0.282tr","0","Thue GTGT Q3/2016: 3.1tr; nop truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("451","DNTN VÀNG NGỌC QUỐC KHANG","84913444067","NGOC QUOC KHANG","22","T9/2016","2.64ty","1.82tr","8.2tr","1.8tr","Thue GTGT Q3/2016: 7.193.836đ.TNDN: 3.2tr; de nghi nop truoc 30/10\n\n","10","2016","1");
INSERT INTO thutuvan VALUES("452","DNTN TM vàng Thành Tín","84968010323","THANH TIN","22","T9/2016","120.7tr","0.311","-0.707tr","0","Thue GTGT q3/2016: 931.000d; nop truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("453","DNTN HIỆU VÀNG VĂN DIỀN","841694450965","VAN DIEN","22","T9/2016","133.9tr","0.198tr","-2.9tr","0","Thue GTGT q3/2016: 925.966đ; nop truoc ngay 30/10\n\n","10","2016","1");
INSERT INTO thutuvan VALUES("454","DNTN Trường Phát","84913461777","TRUONG PHAT","22","T9/2016","213.95tr","-371TR","72.6tr","0","Han che huy hoa don; Cung cap hoa don mua lua theo hop dong da gui thang 9; Thue GTGT Q3/2016 : Con duoc khau tru 371tr","10","2016","1");
INSERT INTO thutuvan VALUES("455","DNTN Vàng Bạc Kim Trí Hòa","84914085941","KIM TRI HOA","24","T9/2016","540tr","1.6tr","-1.5tr","0","VAT phai nop Quy 3/2016: 4,185tr","10","2016","1");
INSERT INTO thutuvan VALUES("456","DNTN Kinh doanh Vàng bạc Anh Thế","84905107033","ANH THE","24","T9/2016","1.68ty","1.35tr","1.69tr","323ng","VAT phai nop Quy 3/2016: 4,056tr","10","2016","1");
INSERT INTO thutuvan VALUES("457","Công ty tnhh Hiển Bình","84906474738","HIEN BINH","24","T9/2016","2.43ty","-243tr","-7tr","0","Bsung sao ke TK vay NH ACB nam 2015-2016","10","2016","1");
INSERT INTO thutuvan VALUES("458","DNTN Hiệu Vàng Ngọc Duy","84905015010","NGOC DUY","24","T9/2016","4.26ty","4.96tr","8.3tr","1.6tr","VAT phai nop Quy 3/2016: 14,03tr","10","2016","1");
INSERT INTO thutuvan VALUES("459","DNTN Hiệu Vàng Khánh Dũng","841217555580","KHANH DUNG","24","T9/2016","905tr","2.8tr","591ng","118ng","VAT phai nop Quy 3/2016: 9,195tr","10","2016","1");
INSERT INTO thutuvan VALUES("460","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Thắng","841285355240","NGOC THANG","23","T9/2016","96tr","1.7tr","-1.3tr","0","Tong thue GTGT Q3/2016: 5.191.500, TNDN: -11tr","10","2016","1");
INSERT INTO thutuvan VALUES("461","Doanh Nghiệp Tư Nhân Hiệu Vàng Xuân Thảo","84913410803","XUAN THAO","23","T9/2016","903tr","1.5tr","3.3tr","660ng","Tong thue GTGT Q3/2016: 4.140.000, TNDN:3.298.537","10","2016","1");
INSERT INTO thutuvan VALUES("462","DNTN Hiệu Vàng Ngọc Hương Anh","84905882898","NGOC HUONG ANH","23","T9/2016","852tr","2.3tr","4tr","791ng","Tong thue GTGT Q3/2016: 6.923.431, TNDN:4.530.934","10","2016","1");
INSERT INTO thutuvan VALUES("463","Công ty TNHH Quốc hảo","84986885079","QUOC HAO","23","T9/2016","18.6tr","-5.9tr","1.1tr","226ng","","10","2016","1");
INSERT INTO thutuvan VALUES("464","DNTN Hiệu Vàng Huỳnh Mai","84983307454","HUYNH MAI","16","T9/2016","295,1tr","2,7tr","1,5tr","0,3tr","Nop thue quy 3: 7.950.483d  truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("465","DNTN Kim Thanh Lịch","84907742702","KIM THANH LICH","11","T9/2016","2052tr","4.1tr","22tr","","bo sung 26.7tr de du doanh so hiep thuong 9 thang","10","2016","1");
INSERT INTO thutuvan VALUES("466","DNTN Thân thiết","841648025555","THAN THIET","16","T9/2016","4,8ty","3,1tr","4,3tr","0,94tr","Nop thue quy 3: 9.464.164d, truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("467","DNTN Vàng Bạc Kim Khoa","84979793696","KIM KHOA","20","T9/2016","1,78ty","5,4tr","9tr","1,8tr","Quy 3 phai nop: VAT 26,6tr; Thue TNDN 3tr.\n\nDN cung cap sao ke NH tu T8 den T9. Dong dau treo len HD ban hang.","10","2016","1");
INSERT INTO thutuvan VALUES("468","Công ty TNHH Thuốc Y Học Cổ truyền Vạn Lộc","84935814839","VAN LOC","16","T9/2016","35,1tr","-0,5tr","-1,8tr","0","gia gop von cao hon gia thi truong, don gia ban 1 so mat hang thap hon gia von. KH dieu chinh gia ban cho hop ly","10","2016","1");
INSERT INTO thutuvan VALUES("469","CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ DU LỊCH IHOME TEAM","84976400474","IHOME TEAM","25","T9/2016","29.6tr","-12.62tr","-31.74tr","","bo sung dky tam tru tren CA tu ngay 27-30/09, can xuat day du doanh thu de tranh bi phat vi tien dien qua cao","10","2016","1");
INSERT INTO thutuvan VALUES("470","DNTN Vàng Đá Quý Kim Khoa","84978810910","KIM KHOA","20","T9/2016","341tr","2tr","0","0","Q3/2016 phai nop: VAT 3,2tr.","10","2016","1");
INSERT INTO thutuvan VALUES("471","DNTN Kim Phát Khánh Hòa","84946062467","KIM PHAT","21","T9/2016","323tr","0,85tr","-115ng","0","KH nop GTGT Q3: 2.654.335; TNDN Q3: 220.000","10","2016","1");
INSERT INTO thutuvan VALUES("472","DNTN Vàng Bạc Kim Tuấn Vũ","841228528344","KIM TUAN VU","21","T9/2016","392tr","1,5tr","-1,2tr","0","KH nop GTGT Q3: 5.255.901;TNDN Q3: 1.500.000","10","2016","1");
INSERT INTO thutuvan VALUES("473","DNTN Vàng Bạc Kim Phúc Lai Liên","84948976506","KIM PHUC LAI LIEN","20","T9/2016","3,4tr","0,2tr","-4tr","0","Q3/2016 phai nop: VAT 0,6tr.","10","2016","1");
INSERT INTO thutuvan VALUES("474","Doanh Nghiệp Tư Nhân Vàng Bạc Tân Mỹ","84905331227","TAN MY","21","T9/2016","360tr","1,38tr","3,5tr","0,7tr","KH nop GTGT Q3: 4.781.892; TNDN Q3: 1.000.000","10","2016","1");
INSERT INTO thutuvan VALUES("475","DNTN Du lịch Cát Lộc","84989035457","CAT LOC","25","T9/2016","32.4tr","-36.02tr","-8.8tr","","Bo sung cac chi phi lien quan hoat dong san xuat kinh doanh neu co","10","2016","1");
INSERT INTO thutuvan VALUES("476","DNTN Vàng Bạc Phú Cường Vy","84937568068","PHU CUONG VY","20","T9/2016","615tr","0,67tr","1tr","0,2tr","Q3/2016 phai nop: VAT 2.464.076d; Thue TNDN 665.000d.\n\nDN cung cap sao ke ngan hang T9/2016.\n\n","10","2016","1");
INSERT INTO thutuvan VALUES("477","DNTN Vàng Phát Đạt","84935151280","PHAT DAT","21","T9/2016","10,4tr","135ng","-11,5tr","0","KH nop thue GTGT quy 3/2016 : 375.090 vnd","10","2016","1");
INSERT INTO thutuvan VALUES("478","Công ty TNHH DL & TM Thịnh Vượng","84967904959","THINH VUONG","25","T9/2016","565.65tr","-0.67tr","-6.17tr","","Xuat doanh thu gop se bi phat 15tr, xuat doanh thu dung moi thang, khong xuat lui, ghi chi tieu thue suat trong HD, ghi ro noi dung la phi dich vu phong nghi tu ngay.. den ngay..","10","2016","1");
INSERT INTO thutuvan VALUES("479","DNTN Hiệu Vàng Bảo Ngân","84913444492","BAO NGAN","21","T9/2016","271,4tr","870ng","-1,02tr","0","KH nop thue GTGT Quy 3/2016: 3.388.712 vnd","10","2016","1");
INSERT INTO thutuvan VALUES("480","DNTN Vàng Bạc Thiện Khiêm Ánh","84919428657","THIEN KHIEM ANH","20","T9/2016","190tr","209ng","-1,5tr","0","Q3/2016 phai nop: VAT 1.462.139d.\n\n","10","2016","1");
INSERT INTO thutuvan VALUES("481","Doanh Nghiệp Tư Nhân Kim Tùng Chi","84914199831","KIM TUNG CHI","21","T9/2016","809tr","2,3tr","-5tr","0","KH nop GTGT Q3: 8.039.932; TNDN Q3: 800.000 ","10","2016","1");
INSERT INTO thutuvan VALUES("482","DNTN Vàng Bạc Kim Út","841696843514","KIM UT","21","T9/2016","511tr","1,7tr","5tr","1tr","KH nop GTGT Q3: 6.341.051; TNDN:3.400.000","10","2016","1");
INSERT INTO thutuvan VALUES("483","DNTN Ngọc Hạo","84903584058","NGOC HAO","13","T9/2016","1,04ty","3,51tr","5,7tr","1,14tr","Tong tien thue GTGT quy 3/2016: 10,236tr. KH nop truoc ngay 31/10/2016.Bo sung sao ke va so phu ngan hang tu T1-T9/2016","10","2016","1");
INSERT INTO thutuvan VALUES("484","DNTN Vàng Bạc Kim Huệ","84948186186","KIM HUE","20","T9/2016","518tr","2tr","1tr","0,5tr","Q3/2016 phai nop: VAT 6,5tr; TNDN 0,5tr.","10","2016","1");
INSERT INTO thutuvan VALUES("485","DNTN Vàng Bạc Năm Vĩnh Tường","841688322245","5 VINH TUONG","13","T9/2016","694,92tr","2,904tr","5,33tr","1,06tr","tong tien thue GTGT quy 3/2016 : 8,013tr. KH nop truoc ngay 31/10/2016. Bo sung sao ke ngan hang tu T6-T9/2016","10","2016","1");
INSERT INTO thutuvan VALUES("486","DNTN Quang Kim Hưng","84935510060","QUANG KIM HUNG","13","T9/2016","758,6tr","3,53tr","6,96tr","1,39tr","Tong tien thue GTGT Quy 3/2016 : 9,111tr. KH nop truoc ngay 31/10/2016.Bo sung chung tu ngan hang T1-T9/2016","10","2016","1");
INSERT INTO thutuvan VALUES("487","Công ty TNHH Khách sạn& Du lịch Hoa Tulip","84903049097","HOA TULIP","13","Q3/2016","59,6tr","2,99tr","-32,87tr","0","Tong tien thue GTGT Q3/2016 : 2,99tr. De nghi KH nop truoc ngay 31/10/2016.Bo sung chung tu ngan hang tu T1-T9/2016","10","2016","1");
INSERT INTO thutuvan VALUES("488","Công ty TNHH Xuân Minh-Cam Ranh","84986361368","XUAN MINH","20","T9/2016","30,5tr","1,76tr","-5,8tr","0","Q3/2016 phai nop: VAT 18,47tr.\n\n","10","2016","1");
INSERT INTO thutuvan VALUES("489","Công ty TNHH TM và DV Agrilife","84913182948","AGRILIFE","20","T9/2016","3,27tr","-133tr","-31tr","0","","10","2016","1");
INSERT INTO thutuvan VALUES("490","DNTN Hiệu Vàng Kim Minh NT","841657287234","KIM MINH","13","T9/2016","58,93tr","280.7ngan","2,53tr","506ngan","Tong tien thue GTGT Quy 3/2016 1,409tr.KH nop truoc ngay 31/10/2016. Bo sung sao ke ngan hang tu T1-T9/2016.","10","2016","1");
INSERT INTO thutuvan VALUES("491","DNTN Vàng Bạc Ngọc Hà","841224488440","NGOC HA","13","T9/2016","50,6tr","528 ngan","1,8tr","360ngan","Tong tien thue GTGT Quy 03/2016 : 1,292tr.KH nop truoc ngay 31/10/2016.","10","2016","1");
INSERT INTO thutuvan VALUES("492","Công ty TNHH Cát Minh Nha Trang","84905103793","CAT MINH","13","T9/2016","61,8tr","-339,86tr","-26,8tr","0","Bo sung chung tu ngan hang tu T1-T9/2016","10","2016","1");
INSERT INTO thutuvan VALUES("493","Công ty TNHH Khách Sạn Trăng Xanh","84987919196","TRANG XANH","13","T9/2016","19tr","-3,47tr","-15,5tr","0","Bo sung chung tu ngan hang T4-T9/2016\n\n","10","2016","1");
INSERT INTO thutuvan VALUES("494","Công ty TNHH TM DV Tấn Lợi","84913472339","TAN LOI","13","T9/2016","","","","","KH ra soat, bo sung cac hoa don, chung tu co phat sinh tai DN ma chua cung cap cho ke toan de ke toan co co so hoan thien so sach nam 2016","10","2016","1");
INSERT INTO thutuvan VALUES("495","Công ty TNHH FNANO","84949040599","FNANO","18","T9/2016","","","","","Khach hang xac nhan danh sach lao dong va cung cap day du CMT cua nguoi lao dong. Dam bao ho so lao dong cua doanh nghiep dung quy dinh.","10","2016","1");
INSERT INTO thutuvan VALUES("496","Công ty TNHH Đầu tư Phát Triển Thành Nhân","84914560822","THANH NHAN","18","T9/2016","","","","","Khach hang cung cap kip thoi hop dong mua ban va hoa don mua vao - ban ra khi co phat sinh. Thong bao cho ke toan kip thoi cac thong tin lien quan den hoat dong mua ban cua doanh nghiep khi co phat sinh.","10","2016","1");
INSERT INTO thutuvan VALUES("497","DNTN Vàng Bạc Đá Quý Mỹ Nghệ Kim Ngọc","84905650979","KIM NGOC","11","T9/2016","423TR","3.1TR","6.2TR","1.24TR","Xuat bo sung 420tr doanh thu de du hiep thuong 9 thang","10","2016","1");
INSERT INTO thutuvan VALUES("498","Công ty TNHH Thiết kế XD Phú Bảo","84906556168","PHU BAO","11","T9/2016","","(67,5TR)","","","BO sung CMND nhan cong truoc 05/11","10","2016","1");
INSERT INTO thutuvan VALUES("499","Công ty TNHH Thiện Long Nha Trang","84971128081","THIEN LONG","5","T9/2016","","","","","giao hoa don dung thang phat sinh, bs bang tong hop vat tu cong trinh, bs quyet dinh ho tro tien kham benh cho giam doc, quyet dinh phat may giat cho cong truong","10","2016","0");
INSERT INTO thutuvan VALUES("500","Công ty TNHH Hoàn Thiên An","84938021383","HOAN THIEN AN","18","T9/2016","152TR","6.5TR","-29tr","","Khach hang bo sung sao ke ngan hang thang 7 và 8/2016.","10","2016","1");
INSERT INTO thutuvan VALUES("501","Công ty TNHH TC Nam Đồng","84918259515","TC NAM DONG","18","T9/2016","","","","","KH khong nen su dung tai khoan cong ty de thuc hien cac giao dich ca nhan se anh huong den ho so ke toan. Khi mua hang hoa co gia tri tu du 20tr k.hang t.hien c.khoan. Moi vuong mac de nghi lien he ke toan.","10","2016","1");
INSERT INTO thutuvan VALUES("502","Công ty TNHH Điện Lạnh Hòa Tam Phát","84969090146","HOA TAM PHAT","24","T9/2016","2,7tr","0","-33tr","0","Bsung hop dong kep hoa don. Thue GTGT phai nop Q3/2016: 15.3tr","10","2016","1");
INSERT INTO thutuvan VALUES("503","CÔNG TY TNHH SEN SPA","84908258121","SEN SPA","16","T9/2016","32,3tr","1,6tr","6,6tr","1,3tr","Thue q3: 4.753.000ng, cung cap CMND nhan vien moi, hoa don ghi qua mo","10","2016","1");
INSERT INTO thutuvan VALUES("504","Công ty TNHH TM và DV Bạn Của Tôi","84915624235","BAN CUA TOI","16","T9/2016","4,9tr","383ng","2,2tr","440ng","Thue q3: 1.233.000d, nop truoc 30/10. cung cap hd thue măt bang, cmnd nhan vien, dau moc xanh de dong dau hoa don","10","2016","1");
INSERT INTO thutuvan VALUES("505","Công ty TNHH MTV Thuận Thành","84905203784","THUAN THANH","16","T9/2016","62,1tr","5,1tr","14,9tr","2,9","thue q3: 24,9tr nop truoc 30/10.ton kho qua nhieu so voi thuc te, xuat hoa don xe nuoc mia.","10","2016","1");
INSERT INTO thutuvan VALUES("506","Công ty TNHH Đầu tư Tri Thức Việt","84913947077","TRI THUC VIET","16","T9/2016","3,8tr","-6,4tr","-1,9tr","0","","10","2016","1");
INSERT INTO thutuvan VALUES("507","Công ty TNHH Quảng cáo Trường Thiên Phát","84915218008","TRUONG THIEN PHAT","16","T9/2016","165,8","14,8tr","25,7tr","0","Thue q3: 20.151.319d nop truoc 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("508","Công ty TNHH chế biến Thủy sản Hoàng Phát","84915333706","HOANG PHAT","5","Q3/2016","2,9ty","281,3tr","29,5tr","0","CMND, bang luong cong nhan, lai xe; cuoc phi duong bo","10","2016","1");
INSERT INTO thutuvan VALUES("509","Cty TNHH Trúc Nguyễn","84905474247","TRUC NGUYEN","16","T9/2016","210,3","4,4tr","57,5tr","11,5tr","Xuat doanh du doanh thu hiep thuong: 175tr/thang, Thue q3: 15,5tr nop truoc 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("510","Công ty TNHH Thương mại KTV","84989194979","KTV","11","T9/2016","45TR","2.1TR","","","bo sung hop dong mua ban cay cua anh Quang, CMND nhan vien truoc 05/11","10","2016","1");
INSERT INTO thutuvan VALUES("511","Công ty TNHH Bá Phát","84935931339","BA PHAT","11","Q3/2016","481tr","(77tr)","","","bo sung CMND Anh Quang, Truong truoc 05/11","10","2016","1");
INSERT INTO thutuvan VALUES("512","CÔNG TY TNHH HÀNG HẢI HẢI PHONG","84935540236","HAI PHONG","11","T9/2016","","(4.8tr)","","","bo sung hop dong kinh te phat sinh de KT canh chinh loi nhuan 2016","10","2016","1");
INSERT INTO thutuvan VALUES("513","Công ty tnhh Tý Hưng","84913431357","TY HUNG","11","T9/2016","21tr","0.3tr","9.7tr","","VAT phai nop Q3/2016: 8.4tr, bsung sao ke n.hang MB tu T7-T9","10","2016","1");
INSERT INTO thutuvan VALUES("514","DNTN Vàng Bạc Ngọc Phúc","84993473828","NGOC PHUC","20","T9/2016","76,6tr","0,6tr","0,3tr","60ng","Q3/2016 phai nop: VAT 2tr.","10","2016","1");
INSERT INTO thutuvan VALUES("515","DNTN Vàng Bạc Kim Anh Diệp","84903599270","KIM ANH DIEP","20","T9/2016","204tr","1,9tr","3tr","0","Quy 3/2016 phai nop: VAT 5,57tr.","10","2016","1");
INSERT INTO thutuvan VALUES("516","DNTN Vàng Bạc Kim Huệ Thảo","84982857375","KIM HUE THAO","20","T9/2016","301,8tr","1,3tr","-2tr","0","Thue Quy 3/2016 phai nop: VAT 6,3tr; TNDN 0,5tr.\n\nBo sung chung tu ngan hang T8-9/2016.","10","2016","1");
INSERT INTO thutuvan VALUES("517","DNTN Vàng Bạc Đá Quý Kim Khoa","841276232779","KIM KHOA","20","T9/2016","279tr","2,5tr","1tr","0,2tr","Quy 3/2016 phai nop: VAT 6,8tr, TNDN: 0,2tr.\n\nKhach hang luu y xuat don gia ban phu họp voi gia thi truong cung thoi diem.","10","2016","1");
INSERT INTO thutuvan VALUES("518","CÔNG TY TNHH HẠNH MẾN","84986704949","HANH MEN","20","T9/2016","107tr","-7tr","-17tr","0","Bo sung ho so tai khoan vay mua xe oto.","10","2016","1");
INSERT INTO thutuvan VALUES("520","Công ty TNHH Sự Kiện Tour & Team","84944555197","TOUR&TEAM","25","T9/2016","","","","","Bo sung chung tu kip thoi neu co phat sinh","10","2016","1");
INSERT INTO thutuvan VALUES("521","Công ty TNHH OPALUS H&T","84918250512","OPALUS H&T","25","T9/2016","5.64tr","-45.51tr","-31.05tr","","Can xuat doanh thu day du theo thuc te de tranh bi phat vi tien dien qua cao.","10","2016","1");
INSERT INTO thutuvan VALUES("522","DNTN SX TM & DV Toàn Hưng","84905082226","TOAN HUNG","25","T9/2016","447.36tr","24.26tr","-50.7tr","","Bo sung cac hoa don mua vai, chi may day du moi thang.","10","2016","1");
INSERT INTO thutuvan VALUES("523","Công ty TM&DV IZT","84911392255","IZT","25","T9/2016","60.43tr","0.72tr","-0.86tr","","Thue GTGT quy 3: 15.476.825, nop truoc 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("524","Công ty TNHH Bắc Xiêm","84903359640","BAC XIEM","7","T9/2016","","-1.8tr","-6.5tr","","Lay day du hoa don tu nha cung cap.","10","2016","0");
INSERT INTO thutuvan VALUES("525","Công ty CP Tư vấn XD và DV Đô thị Nha Trang","84943689966","DO THI NHA TRANG","7","T9/2016","","-17.864tr","-31.6tr","","","10","2016","0");
INSERT INTO thutuvan VALUES("526","Công ty TNHH Thế Giới Phụ Tùng","841282577799","THE GIOI PHU TUNG","7","T9/2016","","+49,08đ","","","Xuat day du hoa don ban ra","10","2016","0");
INSERT INTO thutuvan VALUES("527","Công ty TNHH Dịch vụ Du Lịch B&B","841276066360","B&B","7","T9/2016","","","","","De nghi don vi hoan thien nhanh bang ke mua vao ve may bay tu T3-8/2016 gui cho ke toan. Xuat hoa don ban ra day du de tranh bi truy thu thue ve sau.","10","2016","0");
INSERT INTO thutuvan VALUES("528","CÔNG TY TNHH DỊCH VỤ DU LỊCH NHA TRANG","84934753879","DU LICH NHA TRANG","7","T9/2016","","-609đ","","","Luu y thong tin don vi ghi tren hoa don dau vao phai dung theo thong tin tren giay phep kinh doanh la: Cong Ty TNHH Dich Vu Du Lich Nha Trang. Cung cap day du uy nhiem chi khi thanh toan qua ngan hang.","10","2016","0");
INSERT INTO thutuvan VALUES("530","Doanh Nghiệp Tư Nhân Minh Tiến Nha Trang","84935188852","MINH TIEN","23","T9/2016","163tr","1.6tr","-3tr","","Tong thue GTGT Quy 3/2016: 6.007.500, nop truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("531","DNTN Vàng bạc Đá quý Ngọc Hoa","84905456599","NGOC HOA","23","T9/2016","1.225tr","2tr","649ng","129ng","Tong thue gtgt quy 3/2016: 5.370.000, nop thue truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("532","Doanh Nghiệp Tư Nhân Dịch Vụ Khách Sạn Quỳnh Trang","84989447907","QUYNH TRANG","23","T9/2016","13tr","492ng","-5.1tr","","Tong thue gtgt quy 3/2016: 2.570.889, nop truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("534","DNTN Cơ khí Quỳnh Anh","841697071832","QUYNH ANH","21","T9/2016","","","","","DN c.cap ho so Q3/2016 truoc ngay 26/10/16. Neu khong chung toi buoc phai lap BC thue dua tren so lieu toi thoi diem hien tai, moi van de phat sinh ve thue lien quan den viec nay DN se chiu hoan toan trach nhiem","10","2016","1");
INSERT INTO thutuvan VALUES("535","Công ty TNHH Căn hộ Du Lịch Làng Sen Nha Trang","841222779778","LANG SEN","25","T9/2016","","","","","KH bo sung chung tu gap de lam ho so nop thue Quy 3, han nop 30/10, neu chung tu khong gui truoc 26/10 thi moi van de lien quan den cham nop tien thue se do KH chiu trach nhiem ","10","2016","1");
INSERT INTO thutuvan VALUES("536","CÔNG TY TNHH TM DV ITS NHA TRANG","84905448988","ITS","5","Q3/2016","123tr","2,1tr","-28tr","0","bs hoa don mua khan uot (hien tai dang am kho 43.900cai)","10","2016","1");
INSERT INTO thutuvan VALUES("537","Công ty CP Sealife","841222958890","SEALIFE","20","T9/2016","","","","","","10","2016","0");
INSERT INTO thutuvan VALUES("538","Công ty TNHH TMDV KHẢ ÚY","84913462417","KHA UY","5","T9/2016","0","-3,4tr","-16tr","0","bs chung tu ngan hang Q3/2016, cmnd Pham Van Hau va Le Thi Xinh","10","2016","1");
INSERT INTO thutuvan VALUES("539","Công ty tnhh TMDV Vĩnh Gia","84914030172","VINH GIA","18","T9/2016","","","","","Khach hang chua cung cap so phụ cua ngan hang ACB. Chua cung cap hoa son dau vao ban goc de khai thue. Chua co day du hop dong va quyet toan cong trinh.","10","2016","0");
INSERT INTO thutuvan VALUES("541","Công ty TNHH TM HQ Nha Trang","84993248439","HQ","16","T9/2016","","","","","Hien tai chung toi van chua nhan duoc chung tu T7->T9, de dam bao lap va gui bao cao thue quy 3 kip thoi.De nghi KH cung cap chung tu T7-T9/2016 truoc ngay 28/10/2016.","10","2016","1");
INSERT INTO thutuvan VALUES("542","DNTN An Trang TP","84914152116","AN TRANG","23","T9/2016","64tr","2tr","","","Tong Thue GTGT Q3/2016: 13.279.501đ, nop truoc ngay 30/10","10","2016","1");
INSERT INTO thutuvan VALUES("543","Công ty TNHH Căn Tin Bệnh Viện","841263627966","CAN TIN BENH VIEN","23","T9/2016","750tr","16,5tr","8,5tr","1,7trd","Tong thue nop Q3/2016: 54,5tr (trong do: Thue GTGT: 49,5 trd, Thue TNDN: 5 trd). Hạn chot nop thue 30/10/2016.","10","2016","1");
INSERT INTO thutuvan VALUES("544","Công ty TNHH Du Lịch Trần Gia Bảo","84989682968","TRAN GIA BAO","23","T9/2016","14TR","431NG","881TR","176NG","Tong thue GTGT Q3/2016: 1.177.455, trong thang can doi giua doanh thu và chi phi, giam hoa don nuoc da va gas phu hop voi doanh thu xuat\n\n","10","2016","2");
INSERT INTO thutuvan VALUES("545","Công ty TNHH TM & DV Gia Bách","84903295880","GIA BACH","4","T9/2016","","","","","BS hop dong mua ban, du toan cong trinh. Bao ke toan theo doi tien do cong trinh cho kip thoi","10","2016","1");
INSERT INTO thutuvan VALUES("546","Công ty TNHH XD Tân Minh Nha Trang","84902858271","TAN MINH","4","Q3/2016","344tr","29.91tr","","","Nop thue quy 3 truoc ngay 30/10 tranh cham nop","10","2016","1");
INSERT INTO thutuvan VALUES("547","Công ty TNHH Tư vấn Xây dựng Tân Khánh","84901935468","TAN KHANH","4","T9/2016","","","","","Bo sung hoa don ban ra quy 3 truoc ngay 29/10 de ke toan lap BCT quy. Neu khong don vi se hoan toan chiu trach nhiem","10","2016","1");
INSERT INTO thutuvan VALUES("548","Công ty TNHH Du Lịch Mây Ngũ Sắc","84903229568","MAY NGU SAC","4","T9/2016","","-155,2tr","","","Bo sung hop dong mua ban, du toan cong trinh.","10","2016","1");
INSERT INTO thutuvan VALUES("549","Công ty TNHH Du lịch Phát triển Fashion Việt Nam","84983991404","FASHION","4","T9/2016","","","","","Bo sung hoa don chung tu quy 3/2016 truoc ngay 29/10. Neu khong don vi se chiu trach nhiem ve cac khoan phat co lien quan.","10","2016","1");
INSERT INTO thutuvan VALUES("550","Công ty TNHH Khang Thái Vietnam Travel","841236926999","KHANG THAI","4","Q3/2016","","-734tr","Den het Q3:324tr","","Bo sung chung tu ngan hang, sao ke cac khoan vay, hoa don chi phi lien quan toi SXKD, CMND cong nhan vien de giam loi nhuan va thue TNDN phat sinh.","10","2016","1");
INSERT INTO thutuvan VALUES("551","Tô Quang Sáng- Công ty TNHH Xây Dựng Sao Sáng","84933135479","SAO SANG","4","Q3/2016","10,3ty","-22,9tr","","","Bo sung hop dong mua ban,ho so du toan, quyet toan theo tung dot nghiem thu, bang luong quy 3 de ke toan co can cu hach toan. Don vi nop thue quy 2 gap de tranh bi cuong che.","10","2016","1");
INSERT INTO thutuvan VALUES("552","Công ty TNHHXD - Điện - TM Hòa Khánh","84905007797","HOA KHANH","4","T9/2016","","","","","Bo sung chung tu ngan hang 2015-nay, ho so du toan quyet toan cong trinh. YC thanh toan phi dich vụ den thoi diem hien tai, neu khong ke toan se khong nop BCT quy 3.","10","2016","1");
INSERT INTO thutuvan VALUES("553","Công ty TNHH Du Lịch Hoa Nhài","84919150475","HOA NHAI","4","Q3/2016","86,1tr","-0.147tr","","","Bo sung sao ke tai khoan tu T1- nay. Hoa don dau vao, dau ra phai yc ghi ro loai ve, so luong de ke toan co can cu hach toan. Bo sung CMND nhan vien.","10","2016","1");
INSERT INTO thutuvan VALUES("554","Công ty TNHH DV&CN ISB","84938511948","ISB","4","Q3/2016","199.6tr","-1.2tr","","","Bo sung sao ke TK va chung tu ngan hang tu Quy 3/2016.","10","2016","1");
INSERT INTO thutuvan VALUES("555","Công ty TNHH Minh Nguyệt","84913461589","MINH NGUYET","4","T9/2016","5TR","-2.07tr","","","Bo sung hop dong mua ban, dinh muc san xuat.","10","2016","1");
INSERT INTO thutuvan VALUES("556","Công ty CP TMDV XD Minh Đức","84913951370","MINH DUC_CP","18","T9/2016","10,036TY","330,2TR","","","Tien thue GTGT Q3/2016 phai nop la: 330,2tr. Han nop tien thue 30/10/2016. DN cung cap CMT cua cong nhan vien va bang luong thuc te phat sinh tu dau nam 2016 de ke toan lam can cu hach toan chi phi tien luong.","10","2016","1");
INSERT INTO thutuvan VALUES("557","Công ty TNHH XD Minh Đức","84913951370","MINH DUC_TNHH","18","T9/2016","","-5,58TR","","","Tien thue GTGT Q3/2016 con duoc khau tru: 5,87TR. DN cung cap CMT cong nhan vien va bang luong thuc te tu dau nam 2016 de ke toan lam can cu hach toan chi phi luong.","10","2016","1");
INSERT INTO thutuvan VALUES("558","Công ty TNHH NA PLAN VN","841269701550","NAPLAN VN","5","T9/2016","0","-4tr","","","BS Quyet dinh cho ho tro hoc phi cho nhan vien di hoc","10","2016","0");
INSERT INTO thutuvan VALUES("559","Công ty TNHH Tư vấn Xây dựng Tân Khánh","84901935468","TAN KHANH","4","Q3/2016","9.8TR","-12.4TR","-53.6TR","","Bo sung 6 CMND cong nhan vien, sao ke tai khoan tu ngay mo TK den nay.","10","2016","2");
INSERT INTO thutuvan VALUES("560","Công ty TNHH Phúc Lộc Nha Trang","84916139779","PHUC LOC","5","T9/2016","552Tr","50,5Tr","","","lay hoa don dau DO 0.05S","10","2016","0");
INSERT INTO thutuvan VALUES("561","Công ty TNHH Việt Nguyên Nha Trang","84962995399","VIET NGUYEN","5","T9/2016","0","-1,8tr","-18,4tr","0","bs CMND va bang luong hang thang","10","2016","0");
INSERT INTO thutuvan VALUES("562","Công ty TNHH TM DV Trần Chương","84934815019","TRAN CHUONG","25","T9/2016","16.62tr","-1.09tr","-2.69tr","","KH bo sung cac chi phi lien quan hoat dong san xuat kinh doanh (neu co)","10","2016","2");
INSERT INTO thutuvan VALUES("563","DNTN Vàng Bạc Đức Kim Dung","84942191921","KIM DUNG","24","T9/2016","742tr","851ng","-7.7tr","0","","10","2016","0");
INSERT INTO thutuvan VALUES("564","DNTN Vàng Bạc Kim Oanh","84935063193","KIM OANH","24","T9/2016","408tr","959ng","-9tr","0","","10","2016","0");
INSERT INTO thutuvan VALUES("565","DNTN Vàng Bạc Đá quý Kim Giang","84978595598","KIM GIANG","24","T9/2016","111tr","230ng","-59ng","0","xuat hoa don theo dung thu tu ngay thang ","10","2016","0");
INSERT INTO thutuvan VALUES("566","CÔNG TY TNHH CƯỜNG ĐÁ","84906203358","CUONG DA","23","T9/2016","","","","","","10","2016","0");
INSERT INTO thutuvan VALUES("567","Công ty tnhh Hồng Lộc NT","84905119789","HONG LOC","23","T9/2016","","","","","","10","2016","0");
INSERT INTO thutuvan VALUES("568","Công ty TNHH TM Vải Minh Hà","84909996366","MINH HA","4","T9/2016","","","","","","10","2016","0");
INSERT INTO thutuvan VALUES("569","Công ty TNHH TM&DV Hoàng Phúc","84979275798","HOANG PHUC","24","T9/2016","372tr","34.2tr","147tr","29tr","xuat hoa don dung thoi diem. bo sung Hop dong thieu. bo sung hoa don dau vao de giam thue vat phai nop","10","2016","0");
INSERT INTO thutuvan VALUES("570","Công ty TNHH TM& DV Hải Tâm","841673130679","HAI TAM","24","T9/2016","15tr","1.6tr","-1.7tr","0","bổ sung sao kê Ngan hang T9,10\n\n","10","2016","0");
INSERT INTO thutuvan VALUES("572","Công Ty TNHH Một Thành Viên Trung Hiếu Khánh Hòa","84903593239","TRUNG HIEU","5","Q3/2016","4,45ty","0","135tr","27tr","thue TNCN 6,3tr","10","2016","0");
INSERT INTO thutuvan VALUES("573","Công ty TNHH MTV Du Lịch Thương mại Hòa Bình","84988699797","HOA BINH","22","T9/2016","36TR","-3.4TR","18TR","0","Xuat doanh thu phu hop voi thuc te tai DN; lay hoa don chi phi phu hop: nuoc, internet,chan, goi, xaphong, luoc..; Lay so phu T6->T10; Thue GTGT q3/2016: con khau tru 681.000d","10","2016","0");
INSERT INTO thutuvan VALUES("574","Cty TNHH Vàng, Bạc , Đá quý Dũng Ninh Hòa KH","84913482719","DUNG NINH HOA","22","T9/2016","148.7tr","0.35tr","0.72tr","0","Thue GTGT q3/2016: 1.5tr","10","2016","0");
INSERT INTO thutuvan VALUES("575","Doanh Nghiệp Tư Nhân Hiệu Vàng Ngọc Hoa","84975714660","NGOC HOA","22","T9/2016","68.57tr","0.335tr","-0.5tr","0","DT Q3: 109.6tr; Loi nhuan Q3: 0.15tr; Thue GTGT q3/2016: 560.991d","10","2016","0");
INSERT INTO thutuvan VALUES("576","DNTN TM Vàng bạc Kim Hương","841663316329","KIM HUONG","22","T9/2016","157tr","0.274tr","-2.7tr","0","DT q3/2016: 415tr; Thue GTGT q3/2016: 1.15tr","10","2016","0");
INSERT INTO thutuvan VALUES("577","CÔNG TY TNHH NGỌC BÍCH NB","84993699677","NGOC BICH","22","T9/2016","1.88ty","1.68tr","-9.7tr","0","DT q3/2016: 5.99ty; Thue GTGT q3/2016: 8.97tr","10","2016","0");
INSERT INTO thutuvan VALUES("578","DNTN Ngọc Minh khánh hòa","84963692065","NGOC MINH","22","T9/2016","65.9tr","0.52tr","0.32tr","0","DT q3/2016: 126.4tr; Thue GTGT q3/2016: 1.1tr","10","2016","0");
INSERT INTO thutuvan VALUES("579","DNTN Hiệu vàng Võ Dũng","84932699768","VO DUNG","22","T9/2016","626tr","2.5tr","-1.1tr","0","DT q3: 2.12ty; Thue TNDN tinh den het q3: 10tr; Thue GTGT q3: 7.2tr","10","2016","0");
INSERT INTO thutuvan VALUES("580","Công ty TNHH Thương Mại và Dịch Vụ Thiên Sơn","84993699677","THIEN SON","22","T9/2016","7.2tr","0.57tr","-2.6tr","0","DT q3/2016: 17.8tr; Thue GTGT q3/2016: 1.25tr","10","2016","0");
INSERT INTO thutuvan VALUES("581","Công ty TNHH Thiên Phú Nha Trang","84905685353","THIEN PHU","22","T9/2016","0","0","0","0","Cung cap hoa don chung tu neu co phat sinh","10","2016","0");
INSERT INTO thutuvan VALUES("582","Công ty TNHH TM&DV TDP Khánh Hòa","84911449497","TDP","22","T9/2016","0","0","0","0","Cung cap hoa don chung tu neu co phat sinh","10","2016","0");
INSERT INTO thutuvan VALUES("583","Công ty TNHH Fiero Việt Nam","84917879338","FIERO","22","T9/2016","732tr","-1.8tr","-18.7tr","0","Thue GTGT q3/2016: 4.4tr","10","2016","0");
INSERT INTO thutuvan VALUES("584","DOANH NGHIỆP TƯ NHÂN SÁNG KH","84903959726","SANG KH","22","T9/2016","622tr","0.68tr","-2.2tr","0","DT q3/2016: 1.97ty; Thue GTGT q3/2016: 2.96tr","10","2016","0");
INSERT INTO thutuvan VALUES("585","Công ty TNHH Sản xuất Và Thương Mại ATP","84942035733","ATP","22","T9/2016","0","-0.396tr","-45tr","0","Thue GTGT quy 3/2016: 135.83tr","10","2016","0");
INSERT INTO thutuvan VALUES("586","Công ty TNHH Mỹ Tâm NT","84915802160","MY TAM","22","T9/2016","1.16ty","-1.56ty","-0.20tr","0","Thue GTGT q3 con duoc khau tru: 1.566ty; han che huy hoa don. Dau thang truong phong se den tu van ve doanh thu va loi nhuan phu hop cho DN","10","2016","0");
INSERT INTO thutuvan VALUES("587","Công ty TNHH Tư vấn Giải pháp Công Nghệ Thông tin","84978595499","GIAI PHAP CNTT","22","T9/2016","0","0","0","0","Cung cap hoa don chung tu khi co phat sinh; Xuat hoa don khi phat sinh gia tri tu 200.000 tro len","10","2016","0");
INSERT INTO thutuvan VALUES("590","Công Ty Cổ Phần Peacock Marina Complex","84918338845","PEACOCK","7","T9/2016","","-48.757tr","-1.099tr","","De nghi don vi cung cap chung tu hang thang de ke toan xu ly kip thoi, han che rui ro.","10","2016","0");
INSERT INTO thutuvan VALUES("593","Công Ty TNHH Dịch Vụ Tư Vấn Tài Chính Nhân Trung","84898377567","NHAN TRUNG","7","T9/2016","","","","","","10","2016","0");
INSERT INTO thutuvan VALUES("594","Công Ty TNHH Minato Steell VN","841677566094","MINATO","7","T9/2016","","","","","","10","2016","0");
INSERT INTO thutuvan VALUES("595","Cty TNHH Lợi Vinh","84905178406","LOI VINH","11","T10/2016","","","","","","11","2016","0");
INSERT INTO thutuvan VALUES("596","DNTN Hiệu Vàng Kim Liên Nha Trang","84905184650","KIM LIEN","11","T10/2016","","","","","","11","2016","0");


DROP TABLE IF EXISTS viencanh;

CREATE TABLE `viencanh` (
  `id_vc` int(11) NOT NULL AUTO_INCREMENT,
  `mavc` varchar(50) NOT NULL,
  `tenvc` varchar(200) NOT NULL,
  PRIMARY KEY (`id_vc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



