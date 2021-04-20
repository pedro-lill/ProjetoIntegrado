SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS eventos (
  id INTEGER AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  data DATETIME NOT NULL,
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO eventos (id, titulo, data) VALUES
(1, 'Evento exemplo 1', '2021-05-14 16:59:00'),
(2, 'Evento numero dois', '2021-05-17 15:59:00');

/*!40101 SET CHARACTER_SETs_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;