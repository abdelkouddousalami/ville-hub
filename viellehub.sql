

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `calendrier` (
  `id_calendrier` int(11) NOT NULL,
  `date_de_presentation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `enseignant` (
  `id_enseignant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `enseignant_sujet` (
  `id_enseignant` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `etudiant` (
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `etudiant_sujet` (
  `id_etudiant` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `date_envoi` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `presentations` (
  `id_presentation` int(11) NOT NULL,
  `sujet_id` int(11) NOT NULL,
  `presentation_date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','completed','cancelled') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `presentations` (`id_presentation`, `sujet_id`, `presentation_date`, `created_at`, `status`) VALUES
(2, 6, '2025-01-31 02:15:00', '2025-02-06 22:26:42', 'completed'),
(3, 1, '2025-02-15 08:45:00', '2025-02-06 22:27:58', 'pending'),
(4, 7, '2025-02-06 16:00:00', '2025-02-07 08:35:08', 'cancelled');


CREATE TABLE `subject_assignments` (
  `id` int(11) NOT NULL,
  `sujet_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `assigned_date` datetime DEFAULT current_timestamp(),
  `presentation_date` date DEFAULT NULL,
  `status` enum('pending','completed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `subject_assignments` (`id`, `sujet_id`, `student_id`, `assigned_date`, `presentation_date`, `status`, `created_at`) VALUES
(1, 1, 6, '2025-02-08 22:19:52', NULL, 'pending', '2025-02-08 21:19:52'),
(3, 6, 6, '2025-02-09 01:24:21', NULL, 'pending', '2025-02-09 00:24:21'),
(4, 6, 11, '2025-02-09 01:24:21', NULL, 'pending', '2025-02-09 00:24:21'),
(5, 7, 6, '2025-02-17 11:49:50', NULL, 'pending', '2025-02-17 10:49:50'),
(6, 7, 11, '2025-02-17 11:49:50', NULL, 'pending', '2025-02-17 10:49:50');


CREATE TABLE `sujet` (
  `id_sujet` int(11) NOT NULL,
  `description` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  `status` enum('Proposé','Validé','Rejeté') NOT NULL,
  `id_student` int(11) DEFAULT NULL,
  `date_creation` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `sujet` (`id_sujet`, `description`, `titre`, `status`, `id_student`, `date_creation`) VALUES
(1, 'What is WebSockets', 'WebSockets', 'Validé', 6, '2025-02-06'),
(6, 'What is SQL', 'SQL', 'Validé', 6, '2025-02-06'),
(7, 'Omnis eu in sapiente', 'mohdoctor', 'Validé', 6, '2025-02-06'),
(11, 'Dolores ea illo sed ', 'Quia neque irure ame', 'Rejeté', 6, '2025-02-09');

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Formateur','Apprenant') NOT NULL,
  `status` enum('Actif','inactif') DEFAULT 'inactif',
  `reset_token` varchar(64) DEFAULT NULL,
  `reset_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id_calendrier`);

ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_enseignant`);

ALTER TABLE `enseignant_sujet`
  ADD PRIMARY KEY (`id_enseignant`,`id_sujet`),
  ADD KEY `id_sujet` (`id_sujet`);

ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`);

ALTER TABLE `etudiant_sujet`
  ADD PRIMARY KEY (`id_etudiant`,`id_sujet`),
  ADD KEY `id_sujet` (`id_sujet`);


ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`);


ALTER TABLE `presentations`
  ADD PRIMARY KEY (`id_presentation`),
  ADD KEY `sujet_id` (`sujet_id`);


ALTER TABLE `subject_assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sujet_id` (`sujet_id`),
  ADD KEY `student_id` (`student_id`);

ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id_sujet`),
  ADD KEY `fk_sujet_student` (`id_student`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `calendrier`
  MODIFY `id_calendrier` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `presentations`
  MODIFY `id_presentation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `subject_assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `sujet`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`id_enseignant`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `enseignant_sujet`
  ADD CONSTRAINT `enseignant_sujet_ibfk_1` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enseignant_sujet_ibfk_2` FOREIGN KEY (`id_sujet`) REFERENCES `sujet` (`id_sujet`) ON DELETE CASCADE ON UPDATE CASCADE;
