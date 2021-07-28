-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 10:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cricket', 1, '2021-07-18 11:41:19', '2021-07-18 11:41:19'),
(2, 'Football', 1, '2021-07-18 11:41:30', '2021-07-18 11:41:30'),
(3, 'Tennis', 1, '2021-07-18 11:42:00', '2021-07-18 11:42:00'),
(4, 'Golf', 1, '2021-07-18 11:42:17', '2021-07-18 11:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2021_06_24_052005_blog', 1),
(33, '2021_07_08_085859_create_permission_tables', 1),
(34, '2021_07_12_182341_create_categories_table', 1),
(35, '2021_07_13_135408_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(3, 'App\\User', 2),
(3, 'App\\User', 3),
(3, 'App\\User', 4),
(4, 'App\\User', 2),
(4, 'App\\User', 3),
(4, 'App\\User', 4),
(5, 'App\\User', 2),
(5, 'App\\User', 3),
(5, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-07-18 10:09:46', '2021-07-18 10:09:46'),
(2, 'Create', 'web', '2021-07-18 10:09:46', '2021-07-18 10:09:46'),
(3, 'Edit', 'web', '2021-07-18 10:09:46', '2021-07-18 10:09:46'),
(4, 'Delete', 'web', '2021-07-18 10:09:46', '2021-07-18 10:09:46'),
(5, 'View', 'web', '2021-07-18 10:09:46', '2021-07-18 10:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `hot_news` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short_description`, `description`, `slug`, `category_id`, `created_by`, `main_image`, `thumb_image`, `list_image`, `view_count`, `hot_news`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(7, 'Bangladesh One Day Cricket Team', 'Squad List of Bangladesh One day cricket Team', '<ul>\r\n	<li>Tamim</li>\r\n	<li>Shakib</li>\r\n	<li>Mash</li>\r\n	<li>Nasir</li>\r\n	<li>Musfiq</li>\r\n	<li>Taskin</li>\r\n</ul>', 'bangladesh-one-day-cricket-team', 1, 2, 'post_main_7.jpg', 'post_thumb_7.jpg', 'post_list_7.jpg', 0, 0, 1, 'done', '2021-07-28 14:22:53', '2021-07-28 14:33:31'),
(8, 'Brazil Football Team', 'One of the best Team.', '<p>It is generally believed that the inaugural game of the Brazil national football team was a 1914 match between a <a href=\"https://en.wikipedia.org/wiki/Rio_de_Janeiro\">Rio de Janeiro</a> and <a href=\"https://en.wikipedia.org/wiki/S%C3%A3o_Paulo\">S&atilde;o Paulo</a> select team and the English club <a href=\"https://en.wikipedia.org/wiki/Exeter_City_F.C.\">Exeter City</a>, held in Fluminense&#39;s stadium.<a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-times-magicofbrazil-37\">[36]</a><a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-guardian-howgrecians-38\">[37]</a> Brazil won 2&ndash;0 with goals by Oswaldo Gomes and Osman,<a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-times-magicofbrazil-37\">[36]</a><a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-guardian-howgrecians-38\">[37]</a><a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-39\">[38]</a> though it is claimed that the match was a 3&ndash;3 draw.<a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-telegraph-exetfilha_da_lula_am-40\">[39]</a><a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-indy-brazilpastmasters-41\">[40]</a></p>\r\n\r\n<p>In contrast to its future success, the national team&#39;s early appearances were not brilliant. Other early matches played during that time include several friendly games against <a href=\"https://en.wikipedia.org/wiki/Argentina_national_football_team\">Argentina</a> (being defeated 3&ndash;0), <a href=\"https://en.wikipedia.org/wiki/Chile_national_football_team\">Chile</a> (first in 1916) and <a href=\"https://en.wikipedia.org/wiki/Uruguay_national_football_team\">Uruguay</a> (first on 12 July 1916).<a href=\"https://en.wikipedia.org/wiki/Brazil_national_football_team#cite_note-early-42\">[41]</a> However, led by the goalscoring abilities of <a href=\"https://en.wikipedia.org/wiki/Arthur_Friedenreich\">Arthur Friedenreich</a>, they were victorious at home in the <a href=\"https://en.wikipedia.org/wiki/Copa_Am%C3%A9rica\">South American Championships</a> in <a href=\"https://en.wikipedia.org/wiki/1919_South_American_Championship\">1919</a>, repeating their victory, also at home, in <a href=\"https://en.wikipedia.org/wiki/1922_South_American_Championship\">1922</a>.</p>', 'brazil-football-team', 2, 2, 'post_main_8.jpg', 'post_thumb_8.jpg', 'post_list_8.jpg', 0, 0, 1, NULL, '2021-07-28 14:24:42', '2021-07-28 14:33:42'),
(9, 'Best Tennis Player of All time', 'Tennis is a racket sport that can be played individually against a single opponent (singles) or between two teams of two players each (doubles).', '<p><strong>Tennis</strong> is a <a href=\"https://en.wikipedia.org/wiki/Racket_sport\">racket sport</a> that can be played individually against a single opponent (<a href=\"https://en.wikipedia.org/wiki/Types_of_tennis_match#Singles\">singles</a>) or between two teams of two players each (<a href=\"https://en.wikipedia.org/wiki/Types_of_tennis_match#Doubles\">doubles</a>). Each player uses a <a href=\"https://en.wikipedia.org/wiki/Tennis_racket\">tennis racket</a> that is strung with cord to strike a hollow rubber <a href=\"https://en.wikipedia.org/wiki/Tennis_ball\">ball</a> covered with felt over or around a net and into the opponent&#39;s <a href=\"https://en.wikipedia.org/wiki/Tennis_court\">court</a>. The object of the game is to manoeuvre the ball in such a way that the opponent is not able to play a valid return. The player who is unable to return the ball will not gain a point, while the opposite player will.</p>\r\n\r\n<p>Tennis is an <a href=\"https://en.wikipedia.org/wiki/Olympic_Games\">Olympic</a> sport and is played at all levels of society and at all ages. The sport can be played by anyone who can hold a racket, including <a href=\"https://en.wikipedia.org/wiki/Wheelchair_tennis\">wheelchair users</a>. The modern game of tennis originated in <a href=\"https://en.wikipedia.org/wiki/Birmingham\">Birmingham</a>, <a href=\"https://en.wikipedia.org/wiki/England\">England</a>, in the late 19th century as <strong>lawn tennis</strong>.<a href=\"https://en.wikipedia.org/wiki/Tennis#cite_note-1\">[1]</a> It had close connections both to various field (lawn) games such as <a href=\"https://en.wikipedia.org/wiki/Croquet\">croquet</a> and <a href=\"https://en.wikipedia.org/wiki/Bowls\">bowls</a> as well as to the older racket sport today called <a href=\"https://en.wikipedia.org/wiki/Real_tennis\">real tennis</a>. During most of the 19th century, in fact, the term <em>tennis</em> referred to real tennis, not lawn tennis.</p>\r\n\r\n<p>The rules of modern tennis have changed little since the 1890s. Two exceptions are that from 1908 to 1961 the server had to keep one foot on the ground at all times, and the adoption of the <a href=\"https://en.wikipedia.org/wiki/Tiebreak_(tennis)\">tiebreak</a> in the 1970s. A recent addition to professional tennis has been the adoption of electronic review technology coupled with a point-challenge system, which allows a player to contest the <a href=\"https://en.wikipedia.org/wiki/Line_call\">line call</a> of a point, a system known as <a href=\"https://en.wikipedia.org/wiki/Hawk-Eye\">Hawk-Eye</a>.</p>\r\n\r\n<p>Tennis is played by millions of recreational players and is also a popular worldwide spectator sport. The four <a href=\"https://en.wikipedia.org/wiki/Grand_Slam_(tennis)\">Grand Slam</a> tournaments (also referred to as the Majors) are especially popular: the <a href=\"https://en.wikipedia.org/wiki/Australian_Open\">Australian Open</a> played on <a href=\"https://en.wikipedia.org/wiki/Hard_court\">hard courts</a>, the <a href=\"https://en.wikipedia.org/wiki/French_Open\">French Open</a> played on red <a href=\"https://en.wikipedia.org/wiki/Clay_court\">clay courts</a>, <a href=\"https://en.wikipedia.org/wiki/The_Championships,_Wimbledon\">Wimbledon</a> played on <a href=\"https://en.wikipedia.org/wiki/Grass_court\">grass courts</a>, and the <a href=\"https://en.wikipedia.org/wiki/US_Open_(tennis)\">US Open</a> also played on hard courts.</p>', 'best-tennis-player-of-all-time', 3, 3, 'post_main_9.jpg', 'post_thumb_9.jpg', 'post_list_9.jpg', 0, 0, 1, 'ok', '2021-07-28 14:26:29', '2021-07-28 14:33:54'),
(10, 'Forca Barca', 'Barcelona Football Team', '<p>Futbol Club Barcelona, commonly referred to as Barcelona and colloquially known as Bar&ccedil;a, is a Spanish professional football club based in Barcelona, Spain, that competes in La Liga, the top flight of Spanish football.</p>', 'forca-barca', 2, 3, 'post_main_10.png', 'post_thumb_10.png', 'post_list_10.png', 0, 0, 1, 'joss', '2021-07-28 14:27:48', '2021-07-28 14:34:02'),
(11, 'Golf Game History', 'Golf is a club-and-ball sport in which players use various clubs to hit balls into a series of holes on a course in as few strokes as possible.', '<p>Golf, unlike most <a href=\"https://en.wikipedia.org/wiki/Ball_game\">ball games</a>, cannot and does not utilize a standardized playing area, and coping with the varied terrains encountered on different courses is a key part of the game. The game at the usual level is played on a course with an arranged progression of 18 holes, though recreational courses can be smaller, often having nine holes. Each hole on the course must contain a <a href=\"https://en.wikipedia.org/wiki/Teeing_ground\">teeing ground</a> to start from, and a <a href=\"https://en.wikipedia.org/wiki/Putting_green\">putting green</a> containing the actual hole or cup 4+1&frasl;4 inches (11&nbsp;cm) in diameter. There are other standard forms of terrain in between, such as the fairway, rough (long grass), bunkers (or &quot;sand traps&quot;), and various hazards (water, rocks) but each hole on a course is unique in its specific layout and arrangement.</p>\r\n\r\n<p>Golf is played for the lowest number of strokes by an individual, known as <a href=\"https://en.wikipedia.org/wiki/Stroke_play\">stroke play</a>, or the lowest score on the most individual holes in a complete round by an individual or team, known as <a href=\"https://en.wikipedia.org/wiki/Match_play\">match play</a>. Stroke play is the most commonly seen format at all levels, but most especially at the elite level.</p>\r\n\r\n<p>The modern game of golf <a href=\"https://en.wikipedia.org/wiki/Golf_in_Scotland\">originated in 15th century Scotland</a>. The 18-hole round was created at the <a href=\"https://en.wikipedia.org/wiki/Old_Course_at_St_Andrews\">Old Course</a> at <a href=\"https://en.wikipedia.org/wiki/St_Andrews\">St Andrews</a> in 1764. Golf&#39;s first <a href=\"https://en.wikipedia.org/wiki/Major_golf_championships\">major</a>, and the world&#39;s oldest tournament in existence, is <a href=\"https://en.wikipedia.org/wiki/The_Open_Championship\">The Open Championship</a>, also known as the British Open, which was first played in 1860 at the <a href=\"https://en.wikipedia.org/wiki/Prestwick_Golf_Club\">Prestwick Golf Club</a> in Ayrshire, Scotland. This is one of the four <a href=\"https://en.wikipedia.org/wiki/Men%27s_major_golf_championships\">major championships</a> in men&#39;s professional golf, the other three being played in the United States: <a href=\"https://en.wikipedia.org/wiki/The_Masters\">The Masters</a>, the <a href=\"https://en.wikipedia.org/wiki/U.S._Open_(golf)\">U.S. Open</a>, and the <a href=\"https://en.wikipedia.org/wiki/PGA_Championship\">PGA Championship</a>.</p>', 'golf-game-history', 4, 4, 'post_main_11.jpg', 'post_thumb_11.jpg', 'post_list_11.jpg', 0, 0, 1, NULL, '2021-07-28 14:30:45', '2021-07-28 14:34:13'),
(12, 'Bangladesh Test Team History', 'On 13 November 2000, Bangladesh played their inaugural Test match, hosting India in Dhaka.', '<ul>\r\n	<li>Bangladesh won the toss and elected to bat</li>\r\n</ul>\r\n\r\n<p>The first Test run in the history of Bangladesh Cricket came from the bat of <a href=\"https://en.wikipedia.org/wiki/Mehrab_Hossain_(cricketer,_born_1978)\">Mehrab Hossain</a>, who also scored the first ODI hundred by an individual player for Bangladesh in 1999. Captained by <a href=\"https://en.wikipedia.org/wiki/Naimur_Rahman\">Naimur Rahman</a>, Bangladesh lost by nine wickets, although <em>Wisden</em> noted that they &quot;surpassed all expectations by matching their neighbours, and at times even enjoying the upper hand&quot;.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-inaugural_test-63\">[63]</a> <a href=\"https://en.wikipedia.org/wiki/Aminul_Islam_Bulbul\">Aminul Islam Bulbul</a> scored 145 in the first innings, becoming the third person to have scored a century in their team&#39;s first Test; Rahman took six wickets for 132&nbsp;runs, the second-best bowling figures in a country&#39;s maiden Test.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-inaugural_test-63\">[63]</a> In March 2001, former Australian Test cricketer <a href=\"https://en.wikipedia.org/wiki/Trevor_Chappell\">Trevor Chappell</a> was appointed coach.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-Chappell_and_Kamal-64\">[64]</a> The following month Bangladesh embarked on a <a href=\"https://en.wikipedia.org/wiki/Bangladeshi_cricket_team_in_Zimbabwe_in_2000%E2%80%9301\">tour of Zimbabwe</a> to play two Tests and three ODIs. Zimbabwe, who at the time were ranked ninth out of the ten Test teams, won all five matches.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-65\">[65]</a></p>\r\n\r\n<p>Bangladesh took part in the <a href=\"https://en.wikipedia.org/wiki/2001%E2%80%9302_Asian_Test_Championship\">2001&ndash;02 Asian Test Championship</a>, the second and final time the championship was held and the first the team had been eligible to play in. They lost both their matches by an innings. <a href=\"https://en.wikipedia.org/wiki/Mohammad_Ashraful\">Mohammad Ashraful</a> made his debut in the series and became the youngest player to score a Test century in his first match.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-66\">[66]</a></p>\r\n\r\n<p>In November, <a href=\"https://en.wikipedia.org/wiki/Zimbabwean_cricket_team_in_Bangladesh_in_2001-02\"> Bangladesh hosted Zimbabwe</a> for two Tests and three ODIs. The opening Test was curtailed by bad weather and ended in a draw; after losing their first five Tests, it was the first time Bangladesh had avoided defeat. Zimbabwe won all the remaining matches. After the Test series wicketkeeper <a href=\"https://en.wikipedia.org/wiki/Khaled_Mashud\">Khaled Mashud</a> replaced Rahman as captain.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-67\">[67]</a> <a href=\"https://en.wikipedia.org/wiki/Bangladeshi_cricket_team_in_New_Zealand_in_2001-02\">The following month Bangladesh toured New Zealand for two Test matches</a>. Bangladesh&#39;s batsmen struggled in unfamiliar conditions and the team slumped to two innings defeats.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-68\">[68]</a></p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/Pakistani_cricket_team_in_Bangladesh_in_2001-02\">In January 2002, Bangladesh lost two Tests and three ODIs at home against Pakistan</a>. At this point, they had lost ten of their first eleven Tests; only South Africa had struggled as much in their introduction to Test cricket, also losing ten of their first eleven matches. Chappell blamed Bangladesh&#39;s batsmen for the loss, saying &quot;they commit the same mistakes again and again, and need to learn to apply themselves, to bat in sessions&quot;.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-69\">[69]</a> In April, former Pakistan Test cricketer <a href=\"https://en.wikipedia.org/wiki/Mohsin_Kamal\">Mohsin Kamal</a> replaced Chappell as coach.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-Chappell_and_Kamal-64\">[64]</a> When Bangladesh <a href=\"https://en.wikipedia.org/wiki/Bangladeshi_cricket_team_in_Sri_Lanka_in_2002\">toured Sri Lanka</a> in July and August they were on the receiving end of Sri Lanka&#39;s largest margin of victory in Test cricket: an innings and 196&nbsp;runs. Bangladesh lost both Tests and all three ODIs on the tour, recording their 50th defeat in 53 ODIs. Repeated poor performances prompted people to question whether Bangladesh had been granted Test status too soon.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-70\">[70]</a> Two defeats against Australia and New Zealand in pool matches knocked Bangladesh out of the <a href=\"https://en.wikipedia.org/wiki/2002_ICC_Champions_Trophy\">2002 ICC Champions Trophy</a>.</p>\r\n\r\n<p>In October, Bangladesh got whitewashed in both Test and ODI series against <a href=\"https://en.wikipedia.org/wiki/Bangladeshi_cricket_team_in_South_Africa_in_2002-03\">in South Africa</a>.<em>Wisden</em> noted that &quot;Time and again&nbsp;... came the mantra that [Bangladesh] would learn from the experience, that they could only improve by playing against the best, that there was genuine talent in the squad. But it wore thin.&quot;<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-71\">[71]</a> The final defeat set a record for most consecutive losses in ODIs (23), beating the previous record, which was also held by Bangladesh.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-72\">[72]</a> When <a href=\"https://en.wikipedia.org/wiki/West_Indian_cricket_team_in_Bangladesh_in_2002-03\">West Indies toured in November and December</a>, Bangladesh lost both Test and two out of the three ODIs, and one ended in <a href=\"https://en.wikipedia.org/wiki/Result_(cricket)\">no result</a>.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-73\">[73]</a> Bangladesh hit several new lows on the third day of the first Test: their lowest innings total (87), their lowest match aggregate (226), and the biggest defeat in their 16 Tests (by an innings and 310 runs).<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-74\">[74]</a></p>\r\n\r\n<p>South Africa hosted the <a href=\"https://en.wikipedia.org/wiki/2003_Cricket_World_Cup\">2003 World Cup</a> in February and March. Bangladesh lost five of their six matches (one ended in no result),<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-75\">[75]</a> including fixtures against <a href=\"https://en.wikipedia.org/wiki/Canada_national_cricket_team\">Canada</a>, who hadn&#39;t played international cricket since the <a href=\"https://en.wikipedia.org/wiki/1979_Cricket_World_Cup\">1979 World Cup</a>,<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-76\">[76]</a> and Kenya, who eventually made the semi-finals of the tournament. In the aftermath of Bangladesh&#39;s World Cup campaign, <a href=\"https://en.wikipedia.org/wiki/Khaled_Mahmud\">Habibul Bashar</a> replaced <a href=\"https://en.wikipedia.org/wiki/Khaled_Mashud\">Khaled Mashud</a> as captain,<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-77\">[77]</a> and Kamal was sacked as coach with <a href=\"https://en.wikipedia.org/wiki/Dav_Whatmore\">Dav Whatmore</a> taking over the role.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-78\">[78]</a> Whatmore was not able to begin the job immediately, so <a href=\"https://en.wikipedia.org/wiki/Sarwar_Imran\">Sarwar Imran</a> acted as interim coach during <a href=\"https://en.wikipedia.org/wiki/2003_TVS_Cup_Tri_Series\">TVS Cup</a> and <a href=\"https://en.wikipedia.org/wiki/South_African_cricket_team_in_Bangladesh_in_2003\">South Africa&#39;s tour of Bangladesh in April and May</a>.<a href=\"https://en.wikipedia.org/wiki/Bangladesh_national_cricket_team#cite_note-79\">[79]</a> Bangladesh lost all four ODIs by large margins and two Tests by innings.</p>', 'bangladesh-test-team-history', 1, 2, 'post_main_12.jpg', 'post_thumb_12.jpg', 'post_list_12.jpg', 0, 1, 1, NULL, '2021-07-28 14:32:23', '2021-07-28 14:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, '2021-07-18 10:09:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4FXQUa0bmRjz8G44sNlffIDdBDJCiuaC6q3VGNor2r3NnDMV7SBfanUkxROH', '2021-07-18 10:09:46', '2021-07-18 10:09:46'),
(2, 'supto', 'supto@gmail.com', 2, NULL, '$2y$10$8JY2EEYcNWWwqXVTcl63XObRkoHB5D4AWoI.PcrZstN83K2.2sWU6', NULL, '2021-07-18 11:09:12', '2021-07-18 11:09:12'),
(3, 'mishu', 'mishu@gmail.com', 2, NULL, '$2y$10$12KwnzWA2A5DG2oleaJeSuJ0.1J8CXoZXYal.HZq11LnagnQPnYV2', NULL, '2021-07-18 11:10:01', '2021-07-18 11:10:01'),
(4, 'surjo', 'surjo@gmail.com', 2, NULL, '$2y$10$MnmnyB9cEslHJRC2AtOaae/2q0rkSAUmHCOIVnAb/ZGKtbtpqBOim', NULL, '2021-07-18 11:11:24', '2021-07-18 11:11:24'),
(5, 'test', 'test@gmail.com', 2, NULL, '$2y$10$aF/zr6cFn1BVgzOLgjiazuq6IsaClsZQivdEFDuHjhemfrnAmPYfm', NULL, '2021-07-27 16:47:05', '2021-07-27 16:47:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
