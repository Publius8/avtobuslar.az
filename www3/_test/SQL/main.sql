-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Авг 29 2023 г., 17:32
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `avto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` bigint(20) NOT NULL,
  `vehicle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` tinyint(4) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `comments` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `vehicle`, `description`, `destination`, `seat`, `price`, `comments`) VALUES
(3007, 'Economy', 'Economy', 'Bakı Hava limanı', 4, 23.00, ''),
(3008, 'Economy', 'Economy', 'Abşeron', 4, 90.00, ''),
(3009, 'Economy', 'Economy', 'Qobustan', 4, 105.00, ''),
(3010, 'Economy', 'Economy', 'Şamaxı', 4, 110.00, ''),
(3011, 'Economy', 'Economy', 'Quba', 4, 130.00, ''),
(3012, 'Economy', 'Economy', 'Şahdağ', 4, 150.00, ''),
(3013, 'Economy', 'Economy', 'Lahıc', 4, 150.00, ''),
(3014, 'Economy', 'Economy', 'Qəbələ', 4, 150.00, ''),
(3015, 'Economy', 'Economy', 'Lənkəran', 4, 160.00, ''),
(3016, 'Economy', 'Economy', 'Şəki', 4, 180.00, ''),
(3017, 'Economy', 'Economy', 'Gəncə', 4, 200.00, ''),
(3018, 'Economy', 'Economy', 'Astara', 4, 200.00, ''),
(3019, 'Economy', 'Economy', 'Qax', 4, 250.00, ''),
(3020, 'Economy', 'Economy', 'Zaqatala', 4, 270.00, ''),
(3021, 'Economy', 'Economy', 'Qırmızı Körpü', 4, 300.00, ''),
(3022, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Bakı Hava limanı', 6, 45.00, ''),
(3023, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Abşeron', 6, 130.00, ''),
(3024, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Qobustan', 6, 150.00, ''),
(3025, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Şamaxı', 6, 170.00, ''),
(3026, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Quba', 6, 180.00, ''),
(3027, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Şahdağ', 6, 200.00, ''),
(3028, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Lahıc', 6, 200.00, ''),
(3029, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Qəbələ', 6, 200.00, ''),
(3030, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Lənkəran', 6, 220.00, ''),
(3031, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Şəki', 6, 250.00, ''),
(3032, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Gəncə', 6, 250.00, ''),
(3033, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Astara', 6, 250.00, ''),
(3034, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Qax', 6, 280.00, ''),
(3035, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Zaqatala', 6, 300.00, ''),
(3036, 'SUV_4x4_Prado_Pajero', 'SUV 4x4 Prado/Pajero', 'Qırmızı Körpü', 6, 300.00, ''),
(3037, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Bakı Hava limanı', 4, 55.00, ''),
(3038, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Abşeron', 4, 150.00, ''),
(3039, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Qobustan', 4, 170.00, ''),
(3040, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Şamaxı', 4, 210.00, ''),
(3041, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Quba', 4, 250.00, ''),
(3042, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Şahdağ', 4, 300.00, ''),
(3043, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Lahıc', 4, 0.00, ''),
(3044, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Qəbələ', 4, 280.00, ''),
(3045, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Lənkəran', 4, 280.00, ''),
(3046, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Şəki', 4, 310.00, ''),
(3047, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Gəncə', 4, 320.00, ''),
(3048, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Astara', 4, 320.00, ''),
(3049, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Qax', 4, 350.00, ''),
(3050, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Zaqatala', 4, 360.00, ''),
(3051, 'Mercedes_E-class_W212', 'Mercedes E-class W212', 'Qırmızı Körpü', 4, 450.00, ''),
(3052, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Bakı Hava limanı', 4, 120.00, ''),
(3053, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Abşeron', 4, 330.00, ''),
(3054, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Qobustan', 4, 400.00, ''),
(3055, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Şamaxı', 4, 400.00, ''),
(3056, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Quba', 4, 400.00, ''),
(3057, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Şahdağ', 4, 450.00, ''),
(3058, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Lahıc', 4, 0.00, ''),
(3059, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Qəbələ', 4, 480.00, ''),
(3060, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Lənkəran', 4, 500.00, ''),
(3061, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Şəki', 4, 520.00, ''),
(3062, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Gəncə', 4, 520.00, ''),
(3063, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Astara', 4, 520.00, ''),
(3064, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Qax', 4, 530.00, ''),
(3065, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Zaqatala', 4, 540.00, ''),
(3066, 'Mercedes_S-class_W222_2016-2019', 'Mercedes S-class W222 (2016-2019)', 'Qırmızı Körpü', 4, 650.00, ''),
(3067, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Bakı Hava limanı', 4, 150.00, ''),
(3068, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Abşeron', 4, 350.00, ''),
(3069, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Qobustan', 4, 450.00, ''),
(3070, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Şamaxı', 4, 450.00, ''),
(3071, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Quba', 4, 450.00, ''),
(3072, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Şahdağ', 4, 500.00, ''),
(3073, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Lahıc', 4, 0.00, ''),
(3074, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Qəbələ', 4, 500.00, ''),
(3075, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Lənkəran', 4, 550.00, ''),
(3076, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Şəki', 4, 600.00, ''),
(3077, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Gəncə', 4, 600.00, ''),
(3078, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Astara', 4, 600.00, ''),
(3079, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Qax', 4, 600.00, ''),
(3080, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Zaqatala', 4, 600.00, ''),
(3081, 'Mercedes_S-class_W222_2020', 'Mercedes S-class W222 (2020)', 'Qırmızı Körpü', 4, 700.00, ''),
(3082, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Bakı Hava limanı', 4, 400.00, ''),
(3083, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Abşeron', 4, 1100.00, ''),
(3084, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Qobustan', 4, 1200.00, ''),
(3085, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Şamaxı', 4, 1500.00, ''),
(3086, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Quba', 4, 1500.00, ''),
(3087, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Şahdağ', 4, 1500.00, ''),
(3088, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Lahıc', 4, 0.00, ''),
(3089, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Qəbələ', 4, 1800.00, ''),
(3090, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Lənkəran', 4, 1800.00, ''),
(3091, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Şəki', 4, 2000.00, ''),
(3092, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Gəncə', 4, 2000.00, ''),
(3093, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Astara', 4, 2000.00, ''),
(3094, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Qax', 4, 2200.00, ''),
(3095, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Zaqatala', 4, 2200.00, ''),
(3096, 'Mercedes_S-class_W223_2021-2023', 'Mercedes S-class W223 (2021-2023)', 'Qırmızı Körpü', 4, 2200.00, ''),
(3097, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Bakı Hava limanı', 6, 45.00, ''),
(3098, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Abşeron', 6, 110.00, ''),
(3099, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Qobustan', 6, 150.00, ''),
(3100, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Şamaxı', 6, 170.00, ''),
(3101, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Quba', 6, 190.00, ''),
(3102, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Şahdağ', 6, 220.00, ''),
(3103, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Lahıc', 6, 260.00, ''),
(3104, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Qəbələ', 6, 200.00, ''),
(3105, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Lənkəran', 6, 250.00, ''),
(3106, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Şəki', 6, 250.00, ''),
(3107, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Gəncə', 6, 250.00, ''),
(3108, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Astara', 6, 280.00, ''),
(3109, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Qax', 6, 280.00, ''),
(3110, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Zaqatala', 6, 300.00, ''),
(3111, 'Minivan_4-6_seats_Mercedes_Viano_Vito', 'Minivan (Adam sayı 4-6) Mercedes Viano/Vito', 'Qırmızı Körpü', 6, 350.00, ''),
(3112, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Bakı Hava limanı', 6, 99.00, ''),
(3113, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Abşeron', 6, 270.00, ''),
(3114, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Qobustan', 6, 315.00, ''),
(3115, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Şamaxı', 6, 330.00, ''),
(3116, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Quba', 6, 360.00, ''),
(3117, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Şahdağ', 6, 450.00, ''),
(3118, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Lahıc', 6, 450.00, ''),
(3119, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Qəbələ', 6, 400.00, ''),
(3120, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Lənkəran', 6, 500.00, ''),
(3121, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Şəki', 6, 500.00, ''),
(3122, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Gəncə', 6, 500.00, ''),
(3123, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Astara', 6, 500.00, ''),
(3124, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Qax', 6, 550.00, ''),
(3125, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Zaqatala', 6, 550.00, ''),
(3126, 'Minivan_4-6_seats_Mercedes_V-class_2016-2020', 'Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)', 'Qırmızı Körpü', 6, 600.00, ''),
(3127, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Bakı Hava limanı', 6, 150.00, ''),
(3128, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Abşeron', 6, 350.00, ''),
(3129, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Qobustan', 6, 400.00, ''),
(3130, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Şamaxı', 6, 450.00, ''),
(3131, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Quba', 6, 460.00, ''),
(3132, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Şahdağ', 6, 550.00, ''),
(3133, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Lahıc', 6, 550.00, ''),
(3134, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Qəbələ', 6, 500.00, ''),
(3135, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Lənkəran', 6, 600.00, ''),
(3136, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Şəki', 6, 600.00, ''),
(3137, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Gəncə', 6, 600.00, ''),
(3138, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Astara', 6, 600.00, ''),
(3139, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Qax', 6, 650.00, ''),
(3140, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Zaqatala', 6, 650.00, ''),
(3141, 'Minivan_4-6_seats_Mercedes_V-class_2021-2023', 'Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)', 'Qırmızı Körpü', 6, 700.00, ''),
(3142, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Bakı Hava limanı', 8, 120.00, ''),
(3143, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Abşeron', 8, 400.00, ''),
(3144, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Qobustan', 8, 400.00, ''),
(3145, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Şamaxı', 8, 400.00, ''),
(3146, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Quba', 8, 450.00, ''),
(3147, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Şahdağ', 8, 500.00, ''),
(3148, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Lahıc', 8, 500.00, ''),
(3149, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Qəbələ', 8, 500.00, ''),
(3150, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Lənkəran', 8, 500.00, ''),
(3151, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Şəki', 8, 600.00, ''),
(3152, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Gəncə', 8, 600.00, ''),
(3153, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Astara', 8, 600.00, ''),
(3154, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Qax', 8, 600.00, ''),
(3155, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Zaqatala', 8, 700.00, ''),
(3156, 'Minibus_Mercedes_Sprinter_VIP_8_seats', 'Minibus Mercedes Sprinter VIP (Adam sayı 8)', 'Qırmızı Körpü', 8, 700.00, ''),
(3157, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Bakı Hava limanı', 20, 55.00, ''),
(3158, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Abşeron', 20, 145.00, ''),
(3159, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Qobustan', 20, 170.00, ''),
(3160, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Şamaxı', 20, 220.00, ''),
(3161, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Quba', 20, 240.00, ''),
(3162, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Şahdağ', 20, 250.00, ''),
(3163, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Lahıc', 20, 270.00, ''),
(3164, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Qəbələ', 20, 280.00, ''),
(3165, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Lənkəran', 20, 290.00, ''),
(3166, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Şəki', 20, 320.00, ''),
(3167, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Gəncə', 20, 320.00, ''),
(3168, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Astara', 20, 320.00, ''),
(3169, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Qax', 20, 350.00, ''),
(3170, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Zaqatala', 20, 400.00, ''),
(3171, 'Minibus_Mercedes_Sprinter_12-20_seats', 'Minibus Mercedes Sprinter (Adam sayı 12-20)', 'Qırmızı Körpü', 20, 450.00, ''),
(3172, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Bakı Hava limanı', 27, 80.00, ''),
(3173, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Abşeron', 27, 180.00, ''),
(3174, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Qobustan', 27, 250.00, ''),
(3175, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Şamaxı', 27, 320.00, ''),
(3176, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Quba', 27, 370.00, ''),
(3177, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Şahdağ', 27, 380.00, ''),
(3178, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Lahıc', 27, 390.00, ''),
(3179, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Qəbələ', 27, 390.00, ''),
(3180, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Lənkəran', 27, 450.00, ''),
(3181, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Şəki', 27, 450.00, ''),
(3182, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Gəncə', 27, 450.00, ''),
(3183, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Astara', 27, 500.00, ''),
(3184, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Qax', 27, 520.00, ''),
(3185, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Zaqatala', 27, 540.00, ''),
(3186, 'Isuzu_Bus_27_seats', 'Isuzu Bus (Adam sayı 27)', 'Qırmızı Körpü', 27, 600.00, ''),
(3187, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Bakı Hava limanı', 45, 100.00, ''),
(3188, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Abşeron', 45, 250.00, ''),
(3189, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Qobustan', 45, 300.00, ''),
(3190, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Şamaxı', 45, 400.00, ''),
(3191, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Quba', 45, 420.00, ''),
(3192, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Şahdağ', 45, 450.00, ''),
(3193, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Lahıc', 45, 0.00, ''),
(3194, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Qəbələ', 45, 450.00, ''),
(3195, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Lənkəran', 45, 500.00, ''),
(3196, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Şəki', 45, 500.00, ''),
(3197, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Gəncə', 45, 500.00, ''),
(3198, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Astara', 45, 600.00, ''),
(3199, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Qax', 45, 600.00, ''),
(3200, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Zaqatala', 45, 650.00, ''),
(3201, 'Mercedes_403_Bus_45_seats', 'Mercedes 403 Bus (Adam sayı 45)', 'Qırmızı Körpü', 45, 700.00, ''),
(3202, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Bakı Hava limanı', 48, 100.00, ''),
(3203, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Abşeron', 48, 350.00, ''),
(3204, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Qobustan', 48, 400.00, ''),
(3205, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Şamaxı', 48, 450.00, ''),
(3206, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Quba', 48, 470.00, ''),
(3207, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Şahdağ', 48, 500.00, ''),
(3208, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Lahıc', 48, 0.00, ''),
(3209, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Qəbələ', 48, 500.00, ''),
(3210, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Lənkəran', 48, 650.00, ''),
(3211, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Şəki', 48, 650.00, ''),
(3212, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Gəncə', 48, 600.00, ''),
(3213, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Astara', 48, 700.00, ''),
(3214, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Qax', 48, 700.00, ''),
(3215, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Zaqatala', 48, 700.00, ''),
(3216, 'Mercedes_Travego_45-48_seats', 'Mercedes Travego (Adam sayı 45-48)', 'Qırmızı Körpü', 48, 850.00, ''),
(3217, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Bakı Hava limanı', 48, 120.00, ''),
(3218, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Abşeron', 48, 350.00, ''),
(3219, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Qobustan', 48, 400.00, ''),
(3220, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Şamaxı', 48, 500.00, ''),
(3221, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Quba', 48, 500.00, ''),
(3222, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Şahdağ', 48, 550.00, ''),
(3223, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Lahıc', 48, 0.00, ''),
(3224, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Qəbələ', 48, 550.00, ''),
(3225, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Lənkəran', 48, 650.00, ''),
(3226, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Şəki', 48, 700.00, ''),
(3227, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Gəncə', 48, 600.00, ''),
(3228, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Astara', 48, 700.00, ''),
(3229, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Qax', 48, 700.00, ''),
(3230, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Zaqatala', 48, 700.00, ''),
(3231, 'Neoplan_Cityliner_45-48_seats', 'Neoplan Cityliner (Adam sayı 45-48)', 'Qırmızı Körpü', 48, 850.00, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price` (`price`),
  ADD KEY `seat` (`seat`),
  ADD KEY `vehicle` (`vehicle`);
ALTER TABLE `main` ADD FULLTEXT KEY `destination` (`destination`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3232;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
