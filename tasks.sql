-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jan-2023 às 23:00
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `userId` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `completed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tasks`
--

INSERT INTO `tasks` (`userId`, `id`, `title`, `completed`) VALUES
(1, 1, 'delectus aut autem', 0),
(1, 2, 'delectus aut autem', 0),
(1, 4, 'et porro tempora', 1),
(1, 8, 'quo adipisci enim quam ut ab', 1),
(1, 10, 'illo est ratione doloremque quia maiores aut', 1),
(1, 11, 'vero rerum temporibus dolor', 1),
(1, 12, 'ipsa repellendus fugit nisi', 1),
(1, 14, 'repellendus sunt dolores architecto voluptatum', 1),
(1, 15, 'ab voluptatum amet voluptas', 1),
(1, 16, 'accusamus eos facilis sint et aut voluptatem', 1),
(1, 17, 'quo laboriosam deleniti aut qui', 1),
(1, 19, 'molestiae ipsa aut voluptatibus pariatur dolor nihil', 1),
(1, 20, 'ullam nobis libero sapiente ad optio sint', 1),
(2, 22, 'distinctio vitae autem nihil ut molestias quo', 1),
(2, 25, 'voluptas quo tenetur perspiciatis explicabo natus', 1),
(2, 26, 'aliquam aut quasi', 1),
(2, 27, 'veritatis pariatur delectus', 1),
(2, 30, 'nemo perspiciatis repellat ut dolor libero commodi blanditiis omnis', 1),
(2, 35, 'repellendus veritatis molestias dicta incidunt', 1),
(2, 36, 'excepturi deleniti adipisci voluptatem et neque optio illum ad', 1),
(2, 40, 'totam atque quo nesciunt', 1),
(3, 43, 'tempore ut sint quis recusandae', 1),
(3, 44, 'cum debitis quis accusamus doloremque ipsa natus sapiente omnis', 1),
(3, 50, 'cupiditate necessitatibus ullam aut quis dolor voluptate', 1),
(3, 54, 'quis et est ut voluptate quam dolor', 1),
(3, 55, 'voluptatum omnis minima qui occaecati provident nulla voluptatem ratione', 1),
(3, 56, 'deleniti ea temporibus enim', 1),
(3, 60, 'et sequi qui architecto ut adipisci', 1),
(4, 61, 'odit optio omnis qui sunt', 1),
(4, 63, 'doloremque aut dolores quidem fuga qui nulla', 1),
(4, 73, 'sint amet quia totam corporis qui exercitationem commodi', 1),
(4, 76, 'sequi dolorem sed', 1),
(4, 79, 'eum ipsa maxime ut', 1),
(4, 80, 'tempore molestias dolores rerum sequi voluptates ipsum consequatur', 1),
(5, 81, 'suscipit qui totam', 1),
(5, 83, 'quidem at rerum quis ex aut sit quam', 1),
(5, 85, 'et quia ad iste a', 1),
(5, 86, 'incidunt ut saepe autem', 1),
(5, 87, 'laudantium quae eligendi consequatur quia et vero autem', 1),
(5, 89, 'sequi ut omnis et', 1),
(5, 90, 'molestiae nisi accusantium tenetur dolorem et', 1),
(5, 91, 'nulla quis consequatur saepe qui id expedita', 1),
(5, 92, 'in omnis laboriosam', 1),
(5, 93, 'odio iure consequatur molestiae quibusdam necessitatibus quia sint', 1),
(5, 95, 'vel nihil et molestiae iusto assumenda nemo quo ut', 1),
(5, 98, 'debitis accusantium ut quo facilis nihil quis sapiente necessitatibus', 1),
(6, 105, 'totam quia dolorem et illum repellat voluptas optio', 1),
(6, 106, 'ad illo quis voluptatem temporibus', 1),
(6, 108, 'a eos eaque nihil et exercitationem incidunt delectus', 1),
(6, 109, 'autem temporibus harum quisquam in culpa', 1),
(6, 110, 'aut aut ea corporis', 1),
(6, 116, 'ipsa dolores vel facilis ut', 1),
(7, 121, 'inventore aut nihil minima laudantium hic qui omnis', 1),
(7, 122, 'provident aut nobis culpa', 1),
(7, 126, 'ut asperiores perspiciatis veniam ipsum rerum saepe', 1),
(7, 127, 'voluptatem libero consectetur rerum ut', 1),
(7, 130, 'nulla aliquid eveniet harum laborum libero alias ut unde', 1),
(7, 132, 'qui molestiae voluptatibus velit iure harum quisquam', 1),
(7, 133, 'et labore eos enim rerum consequatur sunt', 1),
(7, 138, 'placeat minima consequatur rem qui ut', 1),
(7, 140, 'aut consectetur in blanditiis deserunt quia sed laboriosam', 1),
(8, 141, 'explicabo consectetur debitis voluptates quas quae culpa rerum non', 1),
(8, 142, 'maiores accusantium architecto necessitatibus reiciendis ea aut', 1),
(8, 146, 'molestiae suscipit ratione nihil odio libero impedit vero totam', 1),
(8, 147, 'eum itaque quod reprehenderit et facilis dolor autem ut', 1),
(8, 151, 'accusamus adipisci dicta qui quo ea explicabo sed vero', 1),
(8, 154, 'rerum non ex sapiente', 1),
(8, 155, 'voluptatem nobis consequatur et assumenda magnam', 1),
(8, 156, 'nam quia quia nulla repellat assumenda quibusdam sit nobis', 1),
(8, 157, 'dolorem veniam quisquam deserunt repellendus', 1),
(8, 158, 'debitis vitae delectus et harum accusamus aut deleniti a', 1),
(8, 159, 'debitis adipisci quibusdam aliquam sed dolore ea praesentium nobis', 1),
(9, 161, 'ex hic consequuntur earum omnis alias ut occaecati culpa', 1),
(9, 162, 'omnis laboriosam molestias animi sunt dolore', 1),
(9, 169, 'ea odio perferendis officiis', 1),
(9, 171, 'fugiat aut voluptatibus corrupti deleniti velit iste odio', 1),
(9, 175, 'laudantium eius officia perferendis provident perspiciatis asperiores', 1),
(9, 178, 'nesciunt itaque commodi tempore', 1),
(9, 179, 'omnis consequuntur cupiditate impedit itaque ipsam quo', 1),
(9, 180, 'debitis nisi et dolorem repellat et', 1),
(10, 182, 'inventore saepe cumque et aut illum enim', 1),
(10, 183, 'omnis nulla eum aliquam distinctio', 1),
(10, 188, 'vel non beatae est', 1),
(10, 189, 'culpa eius et voluptatem et', 1),
(10, 190, 'accusamus sint iusto et voluptatem exercitationem', 1),
(10, 191, 'temporibus atque distinctio omnis eius impedit tempore molestias pariatur', 1),
(10, 193, 'rerum debitis voluptatem qui eveniet tempora distinctio a', 1),
(10, 195, 'rerum ex veniam mollitia voluptatibus pariatur', 1),
(10, 196, 'consequuntur aut ut fugit similique', 1),
(10, 197, 'dignissimos quo nobis earum saepe', 1),
(10, 198, 'quis eius est sint explicabo', 1),
(10, 199, 'numquam repellendus a magnam', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
