-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2023 at 11:56 PM
-- Server version: 8.0.32-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freestulau_etman`
--

--
-- Dumping data for table `faq_category_translations`
--

INSERT INTO `faq_category_translations` (`id`, `category_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`) VALUES
(5, 3, 'ar', 'العناوين-والفروع', 'العناوين والفروع', 'اكتشف مواقع فروعنا في مصر حيث يمكنك تجربة التسوق و استكشاف منتجات فريدة والحصول على مساعدة من طاقمنا الودود. اعثر على تفاصيل العناوين ومعلومات الاتصال لتحديد مواقع فروعنا والوصول إليها بسهولة.', 'العناوين والفروع | اكتشف مواقع فروعنا بمصر', 'اكتشف مواقع فروعنا في مصر حيث يمكنك تجربة التسوق و استكشاف منتجات فريدة والحصول على مساعدة من طاقمنا الودود. اعثر على تفاصيل العناوين ومعلومات الاتصال'),
(6, 3, 'en', 'addresses-and-branches', 'Addresses and branches', 'Discover our physical store locations in egypt. where you can experience personalized shopping, explore unique products, and receive assistance from our friendly staff. Find detailed addresses and contact information to easily locate and reach our branches.', 'Addresses and branches | Discover our locations in egypt.', 'Addresses and branches We provide fast and reliable delivery service to all governorates of Egypt. We provide fast and reliable delivery service to'),
(7, 4, 'ar', 'الطلبات', 'الطلبات', 'في هذه الصفحة يمكنك العثور على إجابات على الأسئلة المتكررة حول تقديم الطلبات وتتبعها. اكتشف المزيد حول طرق الدفع والشحن وأوقات التسليم.', 'الطلبات | العثور على إجابات على الأسئلة المتكررة حول الطلبات', 'في هذه الصفحة يمكنك العثور على إجابات على الأسئلة المتكررة حول تقديم الطلبات وتتبعها. اكتشف المزيد حول طرق الدفع والشحن وأوقات التسليم.'),
(8, 4, 'en', 'orders', 'Orders', 'On this page, you can find answers to frequently asked questions concerning ordering and tracking. Find out about payments, shipping, and delivery times.', 'Orders | find answers to FAQs concerning ordering.', 'On this page, you can find answers to frequently asked questions concerning ordering and tracking. Find out about payments, shipping, and delivery times.'),
(9, 5, 'ar', 'خدمات-التوصيل', 'خدمات التوصيل', 'هنا، ستجد إجابات على الأسئلة الشائعة حول سياسات التوصيل لدينا، بما في ذلك خيارات الشحن، وأوقات التسليم المتوقعة، وتتبع الطلب. نحن نسعى جاهدين لتوفير تجربة توصيل سلسة ​وموثوقة، حيث نعمل مع شركاء موثوقين. إذا كنت بحاجة إلى مساعدة إضافية أو لديك أسئلة، فإن فريق دعم العملاء المخصص مستعد للمساعدة.', 'خدمات التوصيل | إجابات على الأسئلة الشائعة حول التوصيل', 'هنا، ستجد إجابات على الأسئلة الشائعة حول سياسات التوصيل لدينا، بما في ذلك خيارات الشحن، وأوقات التسليم المتوقعة، وتتبع الطلب.'),
(10, 5, 'en', 'delivery-services', 'Delivery Services', 'Here, you\'ll find answers to common questions about our delivery policies, including shipping options, estimated delivery times, and tracking. We strive to provide a smooth and reliable delivery experience, working with trusted partners. If you need further assistance or have questions, our dedicated customer support team is ready to help. Explore this section for all the information you need about our delivery policies.', 'Delivery Services | find answers to FAQs about our delivery', 'Here, you&amp;#039;ll find answers to common questions about our delivery policies, including shipping options, estimated delivery times, and tracking.'),
(11, 6, 'ar', 'خدمات-الشحن-للمحافظات', 'خدمات الشحن للمحافظات', 'اكتشف خدمات الشحن لتجار الجملة في محافظات مصر، اشترِى بالجملة، و انضم إلينا لإيجاد حلول تساعد تجارتك على النمو', 'خدمات الشحن للمحافظات | اكتشف خدمات الشحن لتجار الجملة', 'اكتشف خدمات الشحن لتجار الجملة في محافظات مصر، اشترِى بالجملة، و انضم إلينا لإيجاد حلول تساعد تجارتك على النمو'),
(12, 6, 'en', 'shipping-services-to-governorates', 'Shipping services to governorates', 'Explore our B2B services in Egypt, buy in bulk, and become a national vendor. Join together with us to find solutions to help you business increase its inventory.', 'Shipping services to governorates', 'Explore our B2B services in Egypt buy in bulk, and become a national vendor. Join together with us to find solutions to help you business increase its inventory'),
(13, 7, 'ar', 'سياسية-الاسترجاع', 'سياسية الاسترجاع', 'لضمان الراحة والأمن المالي، يرجى التعرف على سياسة الإرجاع والاسترداد الخاصة بنا لضمان حماية مالك عندما تختار التسوق معنا.', 'سياسية الاسترجاع | التعرف على سياسة الإرجاع والاسترداد', 'لضمان الراحة والأمن المالي، يرجى التعرف على سياسة الإرجاع والاسترداد الخاصة بنا لضمان حماية مالك عندما تختار التسوق معنا.'),
(14, 7, 'en', 'return-policy', 'Return Policy', 'For peace of mind and financial security, kindly familiarize yourself with our return and refund policy, ensuring that your money is protected when you choose to shop with us.', 'Return Policy | familiarize yourself with our return policy.', 'For peace of mind. kindly familiarize yourself with our return and refund policy, ensuring that your money is safe when you choose to shop with us.'),
(15, 8, 'ar', 'طلبات-التصنيع-الخاصة', 'طلبات التصنيع الخاصة', 'يمكن العثور على إجابات على الأسئلة حول طلبات المنتجات المخصصة هنا. يمكننا تحديد مواصفات منتجك وفقا لاحتياجاتك ونحن على استعداد لتنفيذ ذلك بكفاءة', 'طلبات التصنيع الخاص | إجابات حول طلبات المنتجات المخصصة', 'يمكن العثور على إجابات على الأسئلة حول طلبات المنتجات المخصصة هنا. يمكننا تحديد مواصفات منتجك وفقا لاحتياجاتك ونحن على استعداد لتنفيذ ذلك بكفاءة'),
(16, 8, 'en', 'special-requests', 'Special requests', 'Answers to questions about custom product requests can be found here. We can customize your product specifications according to your needs and are ready to execute it efficiently.', 'Special requests | Answers about custom product requests.', 'Answers about product requests can be found here. We can customize your product specifications according to your needs and are ready to execute it efficiently.'),
(17, 9, 'ar', 'خدمات-التصدير', 'خدمات التصدير', 'نحن هنا لمساعدتك في توصيل منتجاتنا إلى موقعك الدولي. يضمن فريقنا ذو الخبرة سهولة عملية التصدير، حيث يتولى التعامل مع الأوراق الجمركية والتغليف وشؤون الشحن.', 'خدمات التصدير | نحن هنا لمساعدتك في توصيل منتجاتنا خارج مصر', 'نحن هنا لمساعدتك في توصيل منتجاتنا إلى موقعك الدولي. يضمن فريقنا ذو الخبرة سهولة عملية التصدير، حيث يتولى التعامل مع الأوراق الجمركية والتغليف وشؤون الشحن.'),
(18, 9, 'en', 'export-services', 'Export services', 'We are here to assist you in delivering our products to your international location. Our experienced team ensures a smooth export process, handling customs documentation, packaging, and shipping logistics.', 'Export services | We are here to help ship our products.', 'We are here to assist you in delivering our products to your international location, handling customs documentation, packaging, and shipping logistics.'),
(19, 10, 'ar', 'مجموعة-فارغة', 'مجموعة فارغة', 'مجموعة فارغة', 'مجموعة فارغة', 'مجموعة فارغة'),
(20, 10, 'en', 'empty-category', 'Empty Category', 'Empty Category', 'Empty Category', 'Empty Category');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
