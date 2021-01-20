-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 10:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cua_hang_banh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `ten_dang_nhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_nhan_vien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `ten_dang_nhap`, `mat_khau`, `id_nhan_vien`) VALUES
(1, 'trinh_hoa', '123456', 28),
(5, 'thao_anh', '123', 27),
(6, 'nguyet', 'nguyet', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` int(11) NOT NULL,
  `tieu_de` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Mo_ta` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nguyen_lieu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cach_lam` text COLLATE utf8_unicode_ci NOT NULL,
  `tac_gia` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_dang` date DEFAULT NULL,
  `luot_xem` int(11) NOT NULL,
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_blog`, `tieu_de`, `Mo_ta`, `Nguyen_lieu`, `Cach_lam`, `tac_gia`, `ngay_dang`, `luot_xem`, `hinh_anh`) VALUES
(1, '', 'Crepe là một trong những loại \"\"bánh\"\" không cần lò nướng, rất dễ làm, nguyên liệu không đòi hỏi những thứ quá phức tạp và từ vỏ Crepe cơ bản mọi người có thể biến tấu theo rất nhiều cách khác nhau để tạo ra các loại Crepe mặn hoặc ngọt tùy theo khẩu vị, sở thích của gia đình và dành cho các dịp khác nhau...<br>\r\n\r\nCông thức mà mình giới thiệu trong bài này là công thức Crepe cơ bản, mình tham khảo và điều chỉnh từ hai công thức của Julia Child và Alton Brown tại Food netword.', '', '', 'Hòa Trịnh', '2020-11-13', 3, 'kute.jpg'),
(2, 'CHEESECAKE SÔ-CÔ-LA CHUỐI\r\n', 'Những chiếc cheesecake ngọt ngào nhỏ xinh luôn khiến nhiều người mê mẩn. Cùng Macrina Bakery vào bếp và khám phá sức hút kì diệu của món bánh thơm ngon này với vị chuối nhé!...\r\n', 'A. Chocolate sponge cake<br>\r\n55gram bột mì đa dụng (all purpose flour)<br>\r\n15gram bột ngô (corn starch)<br>\r\n25gram bột cacao nguyên chất<br>\r\n25gram dầu ăn<br>\r\n20ml sữa tươi không đường (hoặc thay bằng nước trắng)<br>\r\n½ thìa café (tsp) vanilla extract<br>\r\n4 trứng gà (60gram/ quả cả vỏ)<br>\r\n100gram đường hạt mịn<br>\r\nB. Banana cream cheese<br>\r\n4-5 gram Gelatin dạng lá hoặc bột (mình dùng Gelatin dạng lá)<br>\r\n175gram chuối (2-3 quả to)<br>\r\n30ml sữa tươi không đường (có thể thay bằng sữa chua không đường)<br>\r\n100gram cream cheese – để ra ngoài trước 30-45 phút cho hết lạnh<br>\r\n150ml kem tươi có hàm lượng béo 35-40% (heavy cream)<br>\r\nC. Kem tươi phủ ngoài bánh<br>\r\n150ml kem tươi có hàm lượng béo 35-40% (heavy cream)<br>\r\n20gram đường<br>\r\nD. Chocolate Ganache<br>\r\n120gram Chocolate (hàm lượng cacao 55-65%)<br>\r\n100ml kem tươi có hàm lượng béo 35-40% (heavy cream)<br>\r\n20gram bơ nhạt (bơ động vật không có muối)<br>\r\n1/2tsp (3ml) vanilla hoặc rum', '1. Chuẩn bị phần bạt bánh<br>1. Ngâm Gelatin trong 45-50ml nước lạnh (với cả dạng bột và dạng lá) trong khoảng 10-15 phút cho Gelatin nở mềm.<br>\r\n2. Xay nhuyễn (mình dùng máy xay sinh tố) chuối với sữa tươi hoặc sữa chua cùng 25gram đường. Nếu dùng sữa tươi hay sữa chua có đường thì nên giảm bớt lượng đường xuống.<br>\r\n3. Cho 100gram cream cheese (đã để mềm ở nhiệt độ phòng) vào âu. Để máy ở tốc độ thấp nhất, đánh khoảng 1-1.5 phút cho cream cheese mềm mượt. Đổ hỗn hợp chuối vào âu đựng kem. Nhẹ nhàng trộn đều theo kĩ thuật fold.<br>\r\n4. Cho Gelatin đã ngâm nở mềm vào lò vi sóng, quay 15-20 giây rồi dùng thìa quấy đều cho Gelatin tan hoàn toàn. Nếu dùng Gelatin dạng lá thì nên chắt bớt nước khỏi bát. Múc 2-3 thìa canh hỗn hợp kem chuối trộn đều với Gelatin đã tan chảy, rồi đổ phần hỗn hợp này vào âu đựng phần kem chuối còn lại. Nhẹ nhàng trộn đều.Cho cả âu kem vào tủ lạnh.<br>\r\n5. Cuối cùng là bước hoàn thiện, các bạn tạo rãnh trên bìa bánh theo tạo hình mong muốn rồi đổ phần hỗn hợp kem chuối vừa làm vào, đợi 2-3 tiếng cho kem đông hẳn rồi trang trí như mong muôn nhé...\"\r\n', 'Lan Anh\r\n', '2020-11-13', 112, 'banh2.1.jpg'),
(3, 'CHEESE CAKE NHIỆT ĐỚI\r\n', 'Cheese cake ngậy béo và mềm mịn (cho vào miệng là tan ra), pudding thơm mát lạnh với đế gateau xốp, tất cả hòa quyện trong một miếng bánh. Nhờ lớp đế bánh Gateau và một phần lớn hoa quả (xoài, chanh leo) với sữa chua, mà bánh không hề ngấy mặc dù có cream cheese và heavy cream. Và mát lạnh nữa, rất rất hợp với mùa hè....\r\n', 'A. Pudding xoài chanh leo<br>\r\n3 lá Gelatin (2gram/ lá)<br>\r\n300gram thịt xoài chín<br>\r\n1 Tbsp/ 1 thìa canh (15ml) nước cốt chanh leo (lọc từ 2 quả chanh leo)<br>\r\n50gram sữa chua không đường<br>\r\n20ml sữa tươi không đường (hoặc thay bằng nước trắng)<br>\r\n1 Tbsp/ 1 thìa canh (15ml) mật ong<br>\r\nB. Cốt bánh Chocolate Sponge<br>\r\n40gram bột mì đa dụng/ bột mì thường (all purpose flour)<br>\r\n10gram bột cacao nguyên chất<br>\r\n2 trứng gà (60gram/ quả cả vỏ hoặc 50gram/quả không tính vỏ)<br>\r\n50gram đường<br>\r\nD. Cheese cake<br>\r\n4 lá Gelatin (2gram/ lá)<br>\r\n200gram thịt xoài chín<br>\r\n1 Tbsp/ 1 thìa canh (15ml) nước cốt chanh leo<br>\r\n200gram cream cheese', '1. Đầu tiên làm pudding xoài chanh leo(Chuẩn bị phần pudding này trước tối thiểu 8 tiếng. Tốt nhất là làm từ tối ngàyhôm trước để Pudding đông hẳn.)<br>\r\n2. Làm đế Chocolate Sponge(Trước khi chuẩn bị làm đế Sponge, nên lấy Cream cheese để ra ngoài cho Cream cheese hết hẳnlạnh, sẽ dễ đánh mịn hơn).<br>\r\n3. Ngâm Gelatin và xay nhuyễn hỗn hợp xoài, chanh leo, sữa chua giống như làm pudding. Gelatin trộn đều với hỗn hợp xoài, để sang một bên.<br>\r\n4. Dùng máy (ở tốc độ thấp nhất) đánh cream cheese (đã hết hẳn lạnh) trong khoảng 1-1.5 phút đến khi cream cheese nhuyễn mịn. Cho hỗn hợp xoài vào, để máy ở tốc độ thấp nhất (hoặc tốt hơn là dùng phới lồng cầm tay), đánh đều cho các nguyên liệu hòa quyện. Không nên đánh quá lâu.<br>\r\n5. Cho kem tươi và đường vào âu. Đánh kem đến bông mềm. Đổ phần kem này vào âu cream cheese, dùng phới (spatula) nhẹ nhàng trộn đều. Tránh trộn mạnh tay và trộn quá lâu, dễ làm kem tươi tách nước\r\nGỡ pudding xoài ra khỏi khuôn đế rời.<br>\r\n6. Rửa sạch khuôn, lau khô. Đặt đế bánh (đã nguội hẳn) vào đáy khuôn. Đổ ½ hỗn hợp cheese cake vào khuôn. Đặt phần pudding xoài vào chính giữa. Đổ nốt phần cream cheese còn lại lên trên. Dùng spatula hoặc dao, thìa dàn mặt bánh cho phẳng.<br>\r\n7. Cho cả khuôn bánh vào tủ lạnh, để 6-8 tiếng (hoặc qua đêm) đến khi phần Cheese cake đông lại hoàn toàn.<br>\r\nKhi dùng, để dễ lấy bánh ra khỏi khuôn, các bạn nhúng một chiếc khăn vào nước nóng rồi áp quanh thành khuôn khoảng 30 giây – 1 phút. Nhẹ nhàng dùng dao lưỡi mỏng rọc quanh thành khuôn rồi gỡ bánh ra khỏi khuôn. Bánh bảo quản lạnh, dùng trong khoảng 1-2 ngày.\"\r\n', 'Lan Anh\r\n', '2020-11-14', 500, 'banh3.1.jpg'),
(4, 'CUPCAKE BƠ PHÔ-MAI VÀ KEM BƠ PHÔ-MAI\r\n', 'Trong số các loại bánh, bánh mà dễ làm thành công, dễ làm ngon và dễ làm cho “xinh” nhất chắc là chỉ có cupcake. Cupcake thường dùng cốt kiểu bánh bơ nên không đỏng đảnh nhiều như bánh bông lan nở nhờ trứng (kiểu sponge hay chiffon). Mà bánh làm xong, bắt tí kem lên trên là xinh lung linh rồi....', '2 quả trứng gà<br>\r\n180ml sữa không đường<br>\r\n120gram bột mì<br>\r\n45gram bơ nhạt<br>\r\n1gram muối<br>', '1. Bơ đun cách thủy hoặc cho vào lò vi sóng, quay khoảng 20-30 giây cho chảy, để nguội.<br>\r\n2. Cho trứng gà, sữa, nước và bơ vào bát to. Dùng nĩa hoặc phới lồng đánh trứng đánh nhẹ cho hòa quyện.<br>\r\n3. Rây bột vào âu trứng sữa, dùng phới lồng đánh trứng trộn đều đến khi bột tan hết, các nguyên liệu hòa quyện.<br>\r\n4. Lọc hỗn hợp bột qua rây. Bọc hoặc đậy kín, để bột vào ngăn mát tủ lạnh tối thiểu 60 phút. Thường thì bột sẽ giữ được trong tủ lạnh khoảng 1 – 1.5 ngày nên nếu ăn sáng thì bạn có thể chuẩn bị bột từ tối hôm trước.<br>\r\n5. Chuẩn bị một chiếc chảo đáy phẳng, chống dính được là tốt nhất. Để lửa vừa. Phết một lớp bơ mỏng lên mặt chảo. Múc 2-3 thìa bột, đổ vào chảo rồi nhanh tay nghiêng chảo cho bột dàn được đều.Rán vàng 1 mặt rồi lật rán nốt mặt còn lại, cố gắng đừng để bị cháy nhé, rám rám mặt thì được :-)<br> Thời gian rán mặt thứ 2 sẽ rất ngắn vì bánh lúc đó là gần như chín rồi. Nếu các bạn làm nhân ngọt như hoa quả thì có thể xếp hoa quả lên Crepe trên chảo, “gấp” mép lại là xong.\"', 'Lan Anh\r\n', '2020-11-10', 1121, 'banh4.jpg'),
(5, 'CÁCH LÀM CUPCAKE KEM TƯƠI\r\n', 'So với cupcake dùng cốt bánh bông lan bơ (butter cake) thì bánh kem tươi nhẹ và ít ngấy hơn rất nhiều, mặc dù vẫn có vị ngậy béo nhờ kem tươi. Ngoài ra, bánh rất mềm và xốp, và cực kì cực kì thơm nha....\r\n', '150 g bột mì đa dụng + 7 g bột nở<br>\r\n2 quả trứng gà, loại to 50 g/ quả không tính vỏ – ở nhiệt độ phòng<br>\r\n1/2 thìa cafe vani chiết xuất<br>\r\n40 ml/ 232 g kem tươi lạnh 30 – 40% béo\r\n120 g đường – xay hạt nhỏ mịn<br>\r\n\r\n', '1. Rây bột mì, bột nở, muối vào bát, trộn đều, để qua một bên.<br>\r\nTrong một bát khác, đánh tan nhẹ 2 quả trứng với vani tới khi hoà quyện, không cần đánh bông.<br>\r\n2. Cho kem tươi vào âu, đánh ở tốc độ cao tới khi kem bông đặc, nhấc que đánh lên thấy có chóp.<br>\r\n3. Từ từ cho trứng vào âu kem, đánh hoà quyện ở tốc độ thấp nhất. Tiếp theo, từ từ cho đường vào âu, đánh hoà quyện ở tốc độ thấp nhất. Có thể chia trứng và đường thành 3 – 4 phần rồi cho vào âu, đánh hoà quyện rồi cho phần tiếp theo.<br>\r\n4. Rây 1/3 lượng bột vào âu, để máy ở tốc độ thấp nhất, đánh tới khi vừa hoà quyện thì rây phần bột tiếp theo, trộn tới khi hết bột. Lưu ý không trộn bột quá kĩ sẽ dễ làm mất tác dụng của bột nở, bánh nở kém hoặc bị chai.<br>\r\n5. Chia bột vào các khuôn, đổ đầy khoảng 3/4 khuôn để bánh có chỗ tiếp tục nở khi nướng. Nướng ở khay giữa lò, hai lửa, nhiệt 165 độ C trong khoảng 30 phút tới khi mặt bánh nở vàng sậm, ấn nhẹ lên thấy vết lõm phồng trở lại.<br>\r\n6. Lấy bánh ra khỏi lò, để nguội. Bánh rất ngon nên hoàn toàn có thể ăn vã, hoặc trang trí với kem tươi đánh bông và quả tươi theo khẩu vị.\"\r\n', 'Lan Anh\r\n', '2019-09-13', 2122, 'banh5.1.jpg'),
(6, 'MOCHA CHOCOLATE JAPANESE COTTON CHEESECAKE\r\n', 'Cũng vẫn vì cái sự thèm, tự nhiên nhớ vị cafe và chocolate quá thể nên JCC lần này có thêm hai chữ “Mocha chocolate” ở trước tên gọi. Một chút bột cacao và cafe hòa tan làm cho bánh dường như biến thành một loại hoàn toàn mới: vẫn mềm mịn và tan trong miệng, nhưng vị phô-mai quen thuộc mọi khi đã nhường chỗ cho hương chocolate và cafe đậm đà quyến rũ, vị đăng đắng quyện trong sự ngọt ngào – ăn kèm với kem tươi đánh bông và dâu tây chua dịu – quả là tuyệt hảo!...', '125 gr cream cheese<br>\r\n50 gr kem tươi (35 – 40% béo/ whipping cream)<br>\r\n50 gr sữa tươi không đường<br>\r\n3 lòng đỏ trứng (18 – 20 gr/ lòng đỏ)<br>\r\n15 gr bột mì đa dụng, 20 gr bột ngô, 10 gr bột cacao<br>\r\n2 gr cafe bột hòa tan (mình dùng Nescafe Espresso)<br>\r\n½ thìa cafe (tsp) vanilla chiết xuất<br>\r\n3 lòng trắng trứng (30 – 33 gr/ lòng trắng)<br>\r\n1/4 thìa cafe (tsp) cream of tartar (hoặc thay bằng dấm/ nước cốt chanh lượng tương đương)<br>\r\n30gr đường hạt mịn', '1. Cho cream cheese, kem tươi, sữa tươi và đường vào âu. Chưng cách thủy đến khi cream cheese tan hết, các nguyên liệu hòa quyện thì bắc âu ra khỏi nồi, cho lòng đỏ trứng vào, quấy đều.<br>\r\n2. Rây bột mì, bột ngô, bột cacao và bột cafe vào âu. Trộn đều. Cho vanilla, trộn đều. Lọc hỗn hợp qua rây 2 – 3 lần để loại bỏ các vụn bột/ pho-mát bị vón.<br>\r\n3. Bánh sau khi chín thì để nguội rồi bọc kín, bảo quản ngăn mát tủ lạnh trong 2 – 3 ngày. Khi ăn nên dùng kèm với chút kem tươi đánh bông (whipped cream), hoặc có thể dùng topping cream, với hoa quả tươi sẽ ngon hơn.\"\r\n', 'Lan Anh\r\n', '2019-05-28', 1560, 'banh6.jpg'),
(7, 'CUPCAKE TRÀ XANH VÀ KEM CREAM CHEESE', 'Món Cupcake của ngày hôm nay là để dành cho một ngày quan trọng sắp đến trong tuần này – 08.03. Phần cốt bánh là biến tấu từ một trong những công thức Cupcake được yêu thích nhất trên Savoury Days – cupcake kem tươi. Phần kem là sự kết hợp của kem tươi với cream cheese, ngậy vừa, ngọt xen lẫn vị chua nhẹ, rất hợp với vị trà xanh. Bánh mềm, ẩm, xốp và thơm, có thể ăn nhiều hơn một cái mà không bị ngán :-)....', 'A. Phần cốt bánh<br>\r\n75 gram bột cake flour hoặc bột mỳ đa dụng (bột mì số 8 hoặc bột mì số 11)<br>\r\n5 gram bột trà xanh (matcha powder)<br>\r\n4 gram (2/3 thìa cafe) bột nở (Baking powder)<br>\r\n1 gram muối<br>\r\n115 gram kem tươi có hàm lượng béo tối thiểu 30% (whipping cream/ heavy cream) – để lạnh<br>\r\n1 quả trứng – ở nhiệt độ phòng (50 gram không tính vỏ)<br>\r\n2ml (1/3 thìa cafe) vanilla dạng lỏng, 65gram đường hạt mịn<br>\r\nB. Phần kem trang trí<br>\r\n100gram kem tươi có hàm lượng béo tối thiểu 30% (whipping cream hoặc heavy cream)<br>\r\n100gram cream cheese<br>\r\n20gram đường hạt mịn<br>\r\n1/4 teaspoon/ thìa cafe (1-2ml) vanilla dạng lỏng (không bắt buộc)', '1. Trộn hỗn hợp khô gồm bột trà với bột mì, bột nở và muối. Nên rây tất cả các loại bột trước khi trộn để tránh bị vón cục. Dùng cây đánh trứng cầm tay (whisk) trộn đều<br>\r\n2. Trộn hỗn hợp chất lỏng như sau: Trong một cái bát dùng whisk đánh đều trứng và vanilla. Cho kem tươi lạnh vào âu trộn bột. Dùng máy đánh trứng đánh kem tươi đến khi kem bông đặc, nhấc que đánh lên thấy có thể tạo chóp trên mặt âu<br>\r\n3. Để máy ở tốc độ vừa, từ từ đổ trứng vào âu kem tươi. Vừa đổ vừa đánh, hỗn hợp sẽ đặc dần thành hỗn hợp giống như mayonnaise sẽ chuyển thành dạng kem sánh. Không cần đánh lâu, chỉ cần đánh đủ đến khi trứng và kem hòa quyện. Tiếp theo từ từ cho đường vào và đánh đều (mất khoảng 30- 60s)<br>\r\n4. Chia hỗn hợp bột khô ở (2) làm 3 phần. Rây từng phần vào âu kem trứng, dùng kỹ thuật fold trộn đều sau mỗi lần thêm bột<br>\r\n5. Chia bột vào khuôn. Nướng đến khi bánh chín. Thời gian nướng là tùy kích cỡ khuôn nha, ví dụ cupcake thì khoảng 25-30 phút. Bánh chín để trong khuôn khoảng 5 phút rồi lấy ra để nguội hẳn trên rack.<br>\r\n6. Cho kem tươi, cream cheese, đường và vanilla vào âu. Đặt máy ở tốc độ vừa, đánh đến khi kem đặc và bông cứng, úp ngược tô không thấy kem chảy. Cho kem đã đánh bông vào túi bắt bông kem. Để cả túi vào tủ lạnh tối thiểu 45 phút (hoặc lâu hơn thì càng tốt). Cách này sẽ giúp kem đặc hơn, khi bắt sẽ đẹp hơn và ít bị chảy hơn.<br>\r\n7. Trang trí : Cầm túi bắt kem thẳng đứng, vuông góc với mặt bánh. Bắt kem từ ngoài, xoáy trôn ốc vào dần bên trong và cao dần. Với cupcake cỡ này thì mình bắt khoảng 3 vòng. Cách này sẽ cho ra búp kem như bánh mình làm.Sau khi bắt kem xong nên cho cả kem và bánh vào tủ lạnh để khoảng 30-45 phút nữa cho kem cứng lại.', 'Lan Anh', '2018-03-06', 999, 'banh7.jpg'),
(8, 'CUPCAKE HOA HỒNG\r\n', 'Hôm nay giới thiệu với mọi người loại bánh mới, chính xác là dành cho những ai là dân pinkaholic nhé! Bánh nhỏ nhỏ, màu hồng xinh xinh, lại còn thơm mùi hoa hồng thoang thoảng ngất ngây luôn :D Vì mình điều chỉnh giảm bớt lượng đường dùng cho phần bánh nên khi ăn kèm với cả phần kem phoomai (cream cheese frosting) ở trên rất vừa miệng, vị thanh nhẹ để phù hợp với mùi hoa hồng dịu dàng có trong phần kem cream cheese í :D <br>Nói nhiều thế rồi, các bạn có thấy thích chưa nhỉ? :3 Vậy mau mau thực hiện cho ra lò những em bánh Rose Velvet cupcake - Cupcake hoa hồng này ngay đi thôi!!!....\r\n', '150 g bột mì đa dụng + 7 g bột nở<br> 2 quả trứng gà, loại to 50 g/ quả không tính vỏ – ở nhiệt độ phòng<br> 1/2 thìa cafe vani chiết xuất<br> 40 ml/ 232 g kem tươi lạnh 30 – 40% béo 120 g đường – xay hạt nhỏ mịn<br>', '1. Rây bột mì, bột nở, muối vào bát, trộn đều, để qua một bên.<br>\r\nTrong một bát khác, đánh tan nhẹ 2 quả trứng với vani tới khi hoà quyện, không cần đánh bông.<br>\r\n2. Cho kem tươi vào âu, đánh ở tốc độ cao tới khi kem bông đặc, nhấc que đánh lên thấy có chóp.<br>\r\n3. Từ từ cho trứng vào âu kem, đánh hoà quyện ở tốc độ thấp nhất. Tiếp theo, từ từ cho đường vào âu, đánh hoà quyện ở tốc độ thấp nhất. Có thể chia trứng và đường thành 3 – 4 phần rồi cho vào âu, đánh hoà quyện rồi cho phần tiếp theo.<br>\r\n4. Rây 1/3 lượng bột vào âu, để máy ở tốc độ thấp nhất, đánh tới khi vừa hoà quyện thì rây phần bột tiếp theo, trộn tới khi hết bột. Lưu ý không trộn bột quá kĩ sẽ dễ làm mất tác dụng của bột nở, bánh nở kém hoặc bị chai.<br>\r\n5. Chia bột vào các khuôn, đổ đầy khoảng 3/4 khuôn để bánh có chỗ tiếp tục nở khi nướng. Nướng ở khay giữa lò, hai lửa, nhiệt 165 độ C trong khoảng 30 phút tới khi mặt bánh nở vàng sậm, ấn nhẹ lên thấy vết lõm phồng trở lại.<br>\r\n6. Lấy bánh ra khỏi lò, để nguội. Bánh rất ngon nên hoàn toàn có thể ăn vã, hoặc trang trí với kem tươi đánh bông và quả tươi theo khẩu vị.\"\r\n', 'Lan Anh', '2021-01-13', 2122, 'banh8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dang_nhap`
--

CREATE TABLE `tbl_dang_nhap` (
  `id_dang_nhap` int(11) NOT NULL,
  `ten_dang_nhap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_dang_nhap`
--

INSERT INTO `tbl_dang_nhap` (`id_dang_nhap`, `ten_dang_nhap`, `mat_khau`, `so_dien_thoai`, `email`, `dia_chi`) VALUES
(1, 'Hòa Trịnh ', 'hh', '0822517931', 'hoatrinh1357@gmail.com', 'Ninh Bình'),
(2, 'tung bach', '123', '0911066129', 'tungbach1901@gmail.com', 'hà nội'),
(3, 'Đặng Thùy Linh', '123', '098743647', 'thuylinh2902@gmail.com', 'Số 2 Chùa Bộc Đống Đa Hà Nội'),
(4, 'Đào Nguyệt', '111', '098746589', 'daonguyet07@gmail.com', '137 Lương Thế Vinh Thanh Xuân Hà Nội'),
(6, 'Trịnh Duy Hưng', '1111', '0693784357', 'hungtrinh1302@gmail.com', 'số 3 xóm 2 Giang Cao xã Bát Tràng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danh_gia`
--

CREATE TABLE `tbl_danh_gia` (
  `id_dang_gia` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_san_pham` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_sao` float DEFAULT NULL,
  `hinh_anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_danh_gia`
--

INSERT INTO `tbl_danh_gia` (`id_dang_gia`, `ho_ten`, `dia_chi`, `ten_san_pham`, `noi_dung`, `so_sao`, `hinh_anh`) VALUES
(1, 'Lan Anh', 'Thanh Hóa', 'Strawberry Crepe', 'Vị bánh đậm đà thơm lừng kết hợp với lớp phô mai mềm mịn rất ngon, bánh này có vị ngọt thanh nên không cảm thấy bị ngán khi ăn.', 4.5, 'fb-1.jpg'),
(2, 'Tùng Bách', 'Ninh Bình', 'Socola Cheesecake', 'Bánh có vị socola siêu đậm, ăn cảm nhận được vị thơm đắng nồng nàn của socola, lớp bánh cookie lạ miệng, hợp khẩu vị.', 5, 'fb-3.jpg'),
(3, 'Thùy Linh', 'Thái Nguyên', 'Caramel Cupcake', 'Bánh mềm, ngon. Trang trí đẹp, bắt mắt. Cốt bánh mềm xốp và thơm. Lớp kem ngọt vừa đủ, không quá ngấy.', 0, 'fb-4.jpg'),
(4, 'Đào Nguyệt', 'Hưng Yên ', 'Crepe Sầu riêng - Lá dứa', 'Cách trang trí hấp dẫn, bánh có vị sầu riêng nhưng không quá nồng kết hợp với lá dứa tạo nên hương vị hoàn hảo. Lớp bánh mềm, ngọt vừa phải.', 0, 'fb-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `id_lien_he` int(11) NOT NULL,
  `ten_khach` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phan_hoi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_lien_he`
--

INSERT INTO `tbl_lien_he` (`id_lien_he`, `ten_khach`, `email`, `phan_hoi`) VALUES
(1, 'Hòa', 'hoatrinh1357@gmail.com', 'cửa hàng phục vụ chu đáo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai_san_pham`
--

CREATE TABLE `tbl_loai_san_pham` (
  `id_loai_san_pham` int(11) NOT NULL,
  `ten_loai_san_pham` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_loai_san_pham`
--

INSERT INTO `tbl_loai_san_pham` (`id_loai_san_pham`, `ten_loai_san_pham`) VALUES
(1, 'Cupcake'),
(2, 'Crepe'),
(3, 'Cheesecake'),
(4, 'Donut'),
(5, 'Loại khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ho_ten` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cong_viec` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nhan_vien`, `ho_ten`, `hinh_anh`, `cong_viec`, `facebook`, `instagram`) VALUES
(1, 'Thanh Loan', 'team-1.jpg', 'Nhân viên bồi bàn', 'https://www.facebook.com/thanh.loann.5', 'https://www.instagram.com/helloiamloan/'),
(2, 'Doãn Thực', 'team-4.jpg', 'Nhân viên thu ngân', 'https://www.facebook.com/doanthuc12.03', 'https://www.instagram.com/_mequang/'),
(3, 'Thùy Linh', 'team-3.jpg', 'Nhân viên thu ngân', 'https://www.facebook.com/tlinh.29', 'https://www.instagram.com/linh_linh2902/'),
(4, 'Diệu Linh', 'team-2.jpg', 'Nhân viên bồi bàn', 'https://www.facebook.com/eolynnn', 'https://www.instagram.com/_lynnn.xinh.gai/'),
(27, 'Thảo Anh', 'anh.jpg', 'Nhân viên trực page', 'https://www.facebook.com/nguyenthaoanh32', ''),
(28, 'Trịnh Thu Hòa', '', '0', 'https://www.facebook.com/hoatrinh.2312', ''),
(29, 'Đào Nguyệt', 'nguyet.jpg', 'Nhân viên trực page', 'https://www.facebook.com/Nguyet.7012', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `id_dang_nhap` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chu_y` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tong_tien` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `id_dang_nhap`, `ten_nguoi_nhan`, `dia_chi`, `sdt`, `email`, `chu_y`, `ngay_dat`, `tong_tien`, `status`) VALUES
(1, 1, 'Hòa Trịnh ', 'Ninh Bình', '0822517931', 'hoatrinh1357@gmail.com', 'giao hàng nhanh mình đang đói ', '2021-01-19 18:13:34', 63000, 'Chưa xử lý'),
(2, 4, 'Đào Nguyệt', '137 Lương Thế Vinh Thanh Xuân Hà Nội', '098746589', 'daonguyet07@gmail.com', '', '2021-01-19 18:15:02', 73000, 'Chưa xử lý'),
(3, 6, 'Trịnh Duy Hưng', 'số 3 xóm 2 Giang Cao xã Bát Tràng', '0693784357', 'hungtrinh1302@gmail.com', '', '2021-01-19 18:15:54', 60000, 'Chưa xử lý'),
(4, 6, 'Trịnh Duy Hưng', 'số 3 xóm 2 Giang Cao xã Bát Tràng', '0693784357', 'hungtrinh1302@gmail.com', '', '2021-01-19 20:32:27', 48000, 'Chưa xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_id` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_id`, `id_san_pham`, `so_luong`, `gia_ban`, `thanh_tien`) VALUES
(1, 2, 1, 18000, 18000),
(1, 9, 1, 45000, 45000),
(2, 11, 1, 35000, 35000),
(2, 25, 1, 38000, 38000),
(3, 26, 5, 12000, 60000),
(4, 2, 1, 18000, 18000),
(4, 4, 2, 15000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `id_loai_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_ban` float NOT NULL,
  `hinh_anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `id_loai_san_pham`, `ten_san_pham`, `mo_ta`, `gia_ban`, `hinh_anh`) VALUES
(1, 1, 'Caramel Cupcake', 'Chiếc bánh cupcake xinh xắn với phủ bên trên 1 lớp Caramel thơm ngon tạo nên hương vị hấp dẫn cho món bánh này.', 16000, 'caramel.jpg'),
(2, 1, 'Macca Socola CupCake', 'Bánh tươi xốp, mềm mịm với vị socola thơm ngon hòa quyện cùng với lớp macca giàu chất dinh dưỡng.', 18000, 'macca.jpg'),
(3, 1, 'Orange Cupcake', 'Ngoài vị truyền thống là vani và socola, Orange Cupcake là một sự lựa chọn mới lạ. Với hương vị ngọt, không quá chua đến từ những trái cam tươi ngon được chọn lựa cẩn thận.', 15000, 'orange_cupcake.jpg'),
(4, 1, 'Apple Cupcake', 'Với nguyên liệu từ những miếng táo giòn tan, tươi ngon và mọng nước, chiếc bánh này sẽ mang đến cho bạn một hương vị mới lạ.', 15000, 'apple_cupcake.jpg'),
(5, 1, 'Fuss Cupcake', 'Lớp vỏ bánh với hương vị socola Valrhona đậm đà tươi ngon được phủ một lớp kem dâu phù hợp cho ai thích sự ngọt ngào.', 14000, 'fuss.jpg'),
(6, 1, 'Redvelvet Cupcake', 'Bánh Red Velvet không chỉ nổi tiếng bởi vẻ ngoài quyến rũ với sắc đỏ đặc trưng của cốt bánh xen lẫn cùng lớp kem trắng mịn, nó còn thu hút bởi hương vị cacao thơm nồng kết hợp hài hòa với phần cream cheese chua chua, béo ngậy.', 25000, 'redvelvet.jpg'),
(7, 2, 'Crepe Sầu riêng - Lá dứa', 'Bánh crepe sầu riêng lá dứa có lớp vỏ bánh mỏng, thơm ngon, phần nhân kem quyện lẫn sầu riêng béo ngậy khiến ai là tín đồ của loại quả này sẽ thích mê.', 40000, 'crepe_saurieng.jpg'),
(8, 2, 'Crepe chuối- nutella', 'Vỏ bánh mỏng dai thơm ngon hoà quyện với kem tươi phomai béo ngậy, chuối thơm phức và nutella ngon tuyệt. 🍴🍴🍴\r\nBánh crepe đặc biệt với hỗn hợp kem tươi phomai được làm theo công thức riêng biệt của Macrina. Thơm ngậy, ngọt nhẹ và sánh mịn\r\n', 60000, 'crepe_chuoi.jpg'),
(9, 2, 'Mango Crepe', 'Lớp vỏ bánh mỏng dai vị bánh sẽ hơi chua chua, ngọt ngọt đến từ những quả xoài chín mọng được chúng tôi chọn lựa cẩn thận, quyện cùng bản chất béo thơm của cheesecake', 45000, 'mango_crepe.jpg'),
(10, 2, 'Strawberry Crepe', 'Sự kết hợp đầy màu sắc của các lớp bánh mềm mịn, kem béo thơm đặc biệt cùng với vị chua thanh ngọt đến từ những quả dâu tây tươi ngon tạo ra một chiếc bánh cực kì hấp dẫn', 38000, 'strawberry_crepe.jpg'),
(11, 3, 'Chocolate Cheesecake', 'Không chỉ thu hút ngay từ ánh nhìn đầu tiên mà bánh cheesecake chocolate còn có hương vị tuyệt vời, ban đầu là vị bùi bùi của bánh rồi đến lớp chocolate thơm lừng cực tuyệt. Vị creamcheese béo ngậy thơm ngon vô cùng hấp dẫn.', 35000, 'chocolate_cheese.jpg'),
(12, 3, 'Oreo Cheesecake', 'Chúng tôi đã biến tấu chiếc bánh oreo với một vài thành phần để tạo nên một chiếc bánh Oreo cheesecake không cần lò nướng vô cùng đơn giản. Hương vị thơm ngon, hấp dẫn với vị ngọt ngào của kem tươi, hòa quyện cùng chút vị đắng của bánh oreo. ', 36000, 'oreo_cheese.jpg'),
(13, 3, 'Blueberry Cheesecake', 'Đế bánh là bánh quy giống như các loại cheesecake truyền thống, ở giữa là lớp cheese xen kẽ với sốt việt quất, bên trên là lớp bánh mousse việt quất rồi phủ trên cùng là sốt việt quất nguyên quả.', 42000, 'blueberry_cheese.jpg'),
(14, 3, 'Matcha Cheesecake', 'Cheesecake mang đến vị bánh mềm tan như tuyết và vị ngọt béo vừa phải rất quyến rũ. Thêm một chút biến tấu với bột trà xanh Nhật Bản, Matcha Cheese Cake đem món bánh này vượt xa khỏi biên giới châu Âu và trở nên vô cùng phổ biến ở các nước châu Á.', 38000, 'matcha_cheese.jpg'),
(15, 4, 'Socola Donut', 'Những chiếc bánh donut tròn trịa, như những chiếc vòng ngọt ngào, phủ đầy socola chắc chắn có thể mê hoặc bất kỳ ai. Đây cũng là món bánh rất tiện lợi cho bữa ăn sáng, ăn vặt của bạn.', 8000, 'donut_socola.jpg'),
(16, 4, 'Basic Donut', 'Chiếc bánh mềm xốp bên trong, vàng giòn bên ngoài rất thích hợp với những ai yêu thích hương vị truyền thống.', 5000, 'classic_donut.jpg'),
(17, 5, 'Waffle', 'Bánh Waffle có lớp vỏ giòn bên ngoài, mềm ẩm bên trong thơm ngậy của mùi sữa. Vị ngọt vừa phải, ăn với trái cây để hương vị thêm trọn vẹn.', 26000, 'waffles.jpg'),
(18, 5, 'Lemon Blueberry ', 'Nếu muốn thử một chiếc bánh mới lạ nhưng vẫn ngon miệng, xinh đẹp thì chiếc bánh Lemon Blueberry là một sự lựa chọn không thể hoàn hảo hơn. Sự kết hợp của cốt bánh chanh vàng thơm ngát với kem việt quất chua chua ngậy ngậy.', 65000, 'lemon_cake.jpg'),
(19, 5, 'Tart trứng', 'Bánh tart là một trong những loại bánh rất nổi tiếng trên thế giới. Bề ngoài bánh tart nhỏ nhắn, cầm vừa tay, bên trong ẩn chứa hương vị thơm ngon, ngọt nhẹ.', 8000, 'tart.jpg'),
(21, 2, 'Crepe hoa đậu biếc ', 'Đây là một trong những loại bánh độc nhất với màu xanh nước biển vô cùng bắt mắt được chiết xuất từ hoa đậu biếc.Macrina Bakery mong rằng chiếc bánh này sẽ đem lại cho quý vị một trải nghiệm tuyệt vời. ', 40000, 'dau_biec.jpg'),
(22, 3, 'Snickers CheeseCake', 'Để trải nghiệm món tráng miệng béo ngậy thì chiếc bánh này là một sự lựa chọn tuyệt vời dành cho bạn. Với hương vị ngọt ngào, thơm ngon kết hợp với vị pho mát hoàn hảo được đầu bếp chúng tôi tạo ra. ', 39000, 'snikers.jpg\r\n'),
(23, 4, 'Donut Ice Cream', 'Cửa hàng bánh Macrina Bakery cho ra đời những loại bánh donut mới mẻ và đầy sáng tạo. Mặt ngoài của bánh không được tráng phủ lớp đường hoặc socola theo cách thông thường mà thay vào đó sẽ cho đầy ụ nhân kem vào giữa bánh nên chỉ nhìn thôi cũng đủ thấy hấp dẫn lạ kỳ.', 14000, 'donut_ice.jpg'),
(24, 4, 'Jelly Donut', 'Chiếc bánh mang hương vị mới mẻ của hoa oải hương và tinh dầu vani. Do đó, mặc dù trông chiếc bánh không mang nhiều màu sắc hấp dẫn nhưng vẫn được lòng khách hàng do vị ngon đúng chuẩn cùng với nhân jelly ngọt nào.', 12000, 'jelly.jpg'),
(25, 5, 'Tiramisu', 'Mỗi miếng bánh là một sự kết hợp hoàn hảo giữa độ ngọt của cốt bánh, vị đắng của cà phê, cái béo ngậy của mascarpone thêm hương rượu rum nồng nàn, quyến rũ.  Chắc chắn món tráng miệng này sẽ khiến nhiều thực khách “mê mẩn” ngay từ miếng bánh đầu tiên.', 38000, 'tiramisu.jpg'),
(26, 5, 'Dorayaki', 'Nếu bạn đã từng xem Doraemon chắc hẳn bạn cũng biết được món ăn yêu thích nhất của mèo ú rồi đúng không. Với cốt bánh mềm và hương vị thơm ngon sẽ đáng để bạn thưởng thức', 12000, 'dorayaki.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tbl_dang_nhap`
--
ALTER TABLE `tbl_dang_nhap`
  ADD PRIMARY KEY (`id_dang_nhap`);

--
-- Indexes for table `tbl_danh_gia`
--
ALTER TABLE `tbl_danh_gia`
  ADD PRIMARY KEY (`id_dang_gia`);

--
-- Indexes for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Indexes for table `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  ADD PRIMARY KEY (`id_loai_san_pham`);

--
-- Indexes for table `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order_kh` (`id_dang_nhap`);

--
-- Indexes for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_dang_nhap`
--
ALTER TABLE `tbl_dang_nhap`
  MODIFY `id_dang_nhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_danh_gia`
--
ALTER TABLE `tbl_danh_gia`
  MODIFY `id_dang_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  MODIFY `id_loai_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `fk_order_kh` FOREIGN KEY (`id_dang_nhap`) REFERENCES `tbl_dang_nhap` (`id_dang_nhap`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
