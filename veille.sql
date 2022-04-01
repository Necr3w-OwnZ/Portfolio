-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 déc. 2021 à 18:54
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `veille`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date_time_publication` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `text`, `date_time_publication`) VALUES
(1, 'rdhfghj;b', 'dfcgbv byg vygjvhnby gjvh jgyhv fyjhvsdx dlc ptl srx d ify flc', '2021-12-08 13:46:28'),
(2, 'titre 2 ! trop original', 'cfghj vgbhj cvghjb cvghj cyvg cfgv jcvgbhj cyvgubh vgubh j vghbj vbh u bh bh bhghbbhbh h ghb gyhb gb gbh gbkj  bj gbkj bkj uhbjk g bk bjk sjncvkugyvhjbjfncb zvzbjk fnv bjhzehjc jnzhejifcn ,jznjcnskld ,;snjcsnkml ,;vsnjnkm q,sbjdchiqjnkmcfbvl jsnkjofhcib jlszv,z jonzel,', '2021-12-08 17:29:28'),
(3, 'drfvg bdrfgv btfgvbh ngbh nfgvhb n', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, reiciendis non. Voluptas, ipsum, voluptatibus earum perferendis nihil amet iste quae quidem maiores dicta exercitationem, fuga est explicabo ex facere. Perferendis. \r\nRepudiandae laudantium aliquid deleniti eum quas corporis. Deserunt, sunt! Sit rerum rem, odio libero, facere ab amet minima modi harum pariatur accusantium laboriosam tempora repudiandae? Iste veniam et officiis ratione Deleniti recusandae consequuntur fugiat rerum nostrum perferendis atque dicta, officiis, enim in assumenda totam maxime fuga. Vero ut rem placeat vitae, recusandae similique exercitationem enim velit doloribus iusto natus beatae? Recusandae quasi asperiores ipsa aperiam totam qui voluptatibus animi explicabo obcaecati minus, aliquam perferendis quod ut est laborum. Porro exercitationem enim consectetur excepturi sequi facere ad? Consectetur voluptates deserunt officia! Dicta minus modi dolores, atque sapiente distinctio est ducimus voluptas quaerat dolor asperiores beatae veritatis, porro voluptatibus\r\n culpa tenetur similique modi odio, magni molestias atque nesciunt libero! Error, sint reprehenderit a architecto nisi deserunt voluptatum qui mollitia ratione natus adipisci corrupti nostrum sequi delectus quidem inventore maxime tempore voluptatibus sed, unde dolor libero! Vero quidem necessitatibus quas. Laudantium autem quis incidunt quisquam eligendi quaerat aspernatur? Laudantium, sunt neque? Nulla est quo aperiam, illo voluptatibus recusandae fuga optio rem enim adipisci culpa facere molestias eligendi quisquam ducimus corporis.\r\n    Velit sit, repellat quam consequatur repudiandae ut vero vitae, praesentium esse quia sunt labore, placeat debitis cupiditate iure nam eligendi temporibus amet? Ullam praesentium, officiis magnam assumenda nesciunt ab unde? Facere cumque quas quis quae ex pariatur illum eaque necessitatibus dolorum? Eligendi in harum \r\nmolestiae sequi sapiente voluptates inventore! Amet quia officia nostrum. Inventore voluptatum, harum consequatur ad mollitia nobis!  Fuga cumque ipsum fugit pariatur sit voluptate! Eos earum dolorum possimus velit laborum dicta perferendis in maxime nesciunt voluptatem aut tempora, tenetur \r\nerror reiciendis accusantium nisi fugit. Amet, dolore unde!', '2021-12-08 18:37:17'),
(4, 'kbvfds', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, reiciendis non. Voluptas, ipsum, voluptatibus earum perferendis nihil amet iste quae quidem maiores dicta exercitationem, fuga est explicabo ex facere. Perferendis. Repudiandae laudantium aliquid deleniti eum quas corporis. Deserunt, sunt! Sit rerum rem, odio libero, facere ab amet minima modi harum pariatur accusantium laboriosam tempora repudiandae? Iste veniam et officiis ratione Deleniti recusandae consequuntur fugiat rerum nostrum perferendis atque dicta, officiis, enim in assumenda totam maxime fuga. Vero ut rem placeat vitae, recusandae similique exercitationem enim velit doloribus iusto natus beatae? Recusandae quasi asperiores ipsa aperiam totam qui voluptatibus animi explicabo obcaecati minus, aliquam perferendis quod ut est laborum. Porro exercitationem enim consectetur excepturi sequi facere ad? Consectetur voluptates deserunt officia! Dicta minus modi dolores, atque sapiente distinctio est ducimus voluptas quaerat dolor asperiores beatae veritatis, porro voluptatibus culpa tenetur similique modi odio, magni molestias atque nesciunt libero! Error, sint reprehenderit a architecto nisi deserunt voluptatum qui mollitia ratione natus adipisci corrupti nostrum sequi delectus quidem inventore maxime tempore voluptatibus sed, unde dolor libero! Vero quidem necessitatibus quas. Laudantium autem quis incidunt quisquam eligendi quaerat aspernatur? Laudantium, sunt neque? Nulla est quo aperiam, illo voluptatibus recusandae fuga optio rem enim adipisci culpa facere molestias eligendi quisquam ducimus corporis. Velit sit, repellat quam consequatur repudiandae ut vero vitae, praesentium esse quia sunt labore, placeat debitis cupiditate iure nam eligendi temporibus amet? Ullam praesentium, officiis magnam assumenda nesciunt ab unde? Facere cumque quas quis quae ex pariatur illum eaque necessitatibus dolorum? Eligendi in harum molestiae sequi sapiente voluptates inventore! Amet quia officia nostrum. Inventore voluptatum, harum consequatur ad mollitia nobis! Fuga cumque ipsum fugit pariatur sit voluptate! Eos earum dolorum possimus velit laborum dicta perferendis in maxime nesciunt voluptatem aut tempora, tenetur error reiciendis accusantium nisi fugit. Amet, dolore unde!', '2021-12-08 18:46:28'),
(5, 'bdsvc', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, reiciendis non. Voluptas, ipsum, voluptatibus earum perferendis nihil amet iste quae quidem maiores dicta exercitationem, fuga est explicabo ex facere. Perferendis. Repudiandae laudantium aliquid deleniti eum quas corporis. Deserunt, sunt! Sit rerum rem, odio libero, facere ab amet minima modi harum pariatur accusantium laboriosam tempora repudiandae? Iste veniam et officiis ratione Deleniti recusandae consequuntur fugiat rerum nostrum perferendis atque dicta, officiis, enim in assumenda totam maxime fuga. Vero ut rem placeat vitae, recusandae similique exercitationem enim velit doloribus iusto natus beatae? Recusandae quasi asperiores ipsa aperiam totam qui voluptatibus animi explicabo obcaecati minus, aliquam perferendis quod ut est laborum. Porro exercitationem enim consectetur excepturi sequi facere ad? Consectetur voluptates deserunt officia! Dicta minus modi dolores, atque sapiente distinctio est ducimus voluptas quaerat dolor asperiores beatae veritatis, porro voluptatibus culpa tenetur similique modi odio, magni molestias atque nesciunt libero! Error, sint reprehenderit a architecto nisi deserunt voluptatum qui mollitia ratione natus adipisci corrupti nostrum sequi delectus quidem inventore maxime tempore voluptatibus sed, unde dolor libero! Vero quidem necessitatibus quas. Laudantium autem quis incidunt quisquam eligendi quaerat aspernatur? Laudantium, sunt neque? Nulla est quo aperiam, illo voluptatibus recusandae fuga optio rem enim adipisci culpa facere molestias eligendi quisquam ducimus corporis. Velit sit, repellat quam consequatur repudiandae ut vero vitae, praesentium esse quia sunt labore, placeat debitis cupiditate iure nam eligendi temporibus amet? Ullam praesentium, officiis magnam assumenda nesciunt ab unde? Facere cumque quas quis quae ex pariatur illum eaque necessitatibus dolorum? Eligendi in harum molestiae sequi sapiente voluptates inventore! Amet quia officia nostrum. Inventore voluptatum, harum consequatur ad mollitia nobis! Fuga cumque ipsum fugit pariatur sit voluptate! Eos earum dolorum \r\n\r\n\r\npossimus velit laborum dicta perferendis in maxime nesciunt voluptatem aut tempora, tenetur error reiciendis accusantium nisi fugit. Amet, dolore unde!', '2021-12-08 18:46:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
