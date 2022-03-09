CREATE DATABASE lol DEFAULT CHARACTER SET latin1;

USE lol;

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `foto` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `foto`) VALUES
(1, 'ASSASSINS', 'img/Slayer_icon.webp'),
(2, 'MAGES', 'img/Mage_icon.webp'),
(3, 'MARKSMEN', 'img/Marksman_icon.webp'),
(4, 'SUPPORT', 'img/Tank_icon.webp'),
(5, 'TANK', 'img/Support_icon.webp'),
(6, 'SKIRMISHER', 'img/Fighter_icon.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_alta` date DEFAULT NULL,
  `telefono` int(9) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `foto` varchar(122) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `fecha_alta`, `telefono`, `direccion`, `foto`) VALUES
(1, 'Ahri', '', NULL, 76675432, 'alcobendas 12', 'img/Ahri.png'),
(2, 'Braum', '', NULL, 12321546, 'Estados Unidos', 'img/Braum.png'),
(3, 'Veigar', '', NULL, 133321546, 'Bélgica', 'img/Veigar.png'),
(4, 'Silco', '', NULL, 66621546, 'Italia', 'img/Silco.png'),
(5, 'Jinx', '', NULL, 976211546, 'Brasil', 'img/Jinx.png'),
(6, 'Kaisa', '', NULL, 556211546, 'España', 'img/Kaisa.png'),
(7, 'Irelia', '', NULL, 3214677, 'Dinamarca', 'img/Irelia.png'),
(8, 'Gnar', '', NULL, 311214677, 'Noruega', 'img/Gnar.png'),
(9, 'Gangplank', '', NULL, 311214677, 'Reino Unido', 'img/Gangplank.png'),
(10, 'Corki', '', NULL, 31114677, 'Reino Unido', 'img/Corki.png'),
(11, 'Orianna', '', NULL, 87814677, 'Reino Unido', 'img/Orianna.png'),
(12, 'Renata', 'Glasc', NULL, 137814677, 'India', 'img/RenataGlasc.png'),
(13, 'Leona', '', NULL, 99814677, 'Brasil', 'img/Leona.png'),
(14, 'Sivir', '', NULL, 559814677, 'España', 'img/Sivir.png'),
(15, 'Zeri', '', NULL, 459814677, 'España', 'img/Zeri.png'),
(16, 'Vi', '', NULL, 559814677, 'España', 'img/Vi.png'),
(17, 'Tahm', 'Kench', NULL, 559814677, 'Bélgica', 'img/TahmKench.png'),
(18, 'Draven', '', NULL, 51123377, 'Bélgica', 'img/Draven.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `importe` int(200) NOT NULL,
  `cliente` int(11) DEFAULT NULL,
  `empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(90) NOT NULL,
  `admin` boolean DEFAULT NULL,
  `foto` varchar(1024) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `email`, `username`, `pass`, `admin`, `foto`, `fecha_alta`, `fecha_baja`) VALUES
(1, 'admin@admin.com', 'admin', '123', true, 'img/tft.png', NULL, NULL),
(2, 'dionny@gmail.com', 'dionny', '123', false, 'img/tft.png', NULL, NULL),
(3, 'miguel@gmail.com', 'miguel', '123', false, 'img/tft.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `cantidad` int(200) NOT NULL,
  `total` int(200) NOT NULL,
  `producto` int(11) NOT NULL,
  `compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `descripcion` varchar(9999) DEFAULT NULL,
  `precio` int(200) NOT NULL,
  `foto` varchar(1024) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `cantidad`, `descripcion`, `precio`, `foto`, `categoria`) VALUES
(1, 'Debonair Emblem', 12, 'The holder gains the Debonair trait.', 300, 'img/DebonairEmblem.png', 1),
(2, 'Arcanist Emblem', 12, 'The holder gains the Arcanist trait.', 300, 'img/ArcanistEmblem.png', 2),
(3, 'Assassin Emblem', 12, 'The holder gains the Assassin trait.', 300, 'img/AssassinEmblem.png', 3),
(4, 'Challenger Emblem', 12, 'The holder gains the Challenger trait.', 300, 'img/ChallengerEmblem.png', 4),
(5, 'Chemtech Emblem', 12, 'The holder gains the Chemtech trait.', 300, 'img/ChemtechEmblem.png', 5),
(6, 'Hextech Emblem', 12, 'The holder gains the Hextech trait.', 300, 'img/HextechEmblem.png', 6),
(7, 'Mutant Emblem', 12, 'The holder gains the Mutant trait.', 300, 'img/MutantEmblem.png', 1),
(8, 'Striker Emblem', 12, 'The holder gains the Striker trait.', 300, 'img/StrikerEmblem.png', 2),
(9, 'Archangels Staff', 12, 'During combat, the holder gains 25 Ability Power every 5 seconds.', 300, 'img/ArchangelsStaff.png', 3),
(10, 'Banshees Claw', 12, 'When combat begins, the holder and all allies within 1 hex in the same row gain a shield that blocks the damage and effects of the first enemy Ability, up to 600 damage.\r\n', 300, 'img/BansheesClaw.png', 6),
(11, 'Bloodthirster', 12, 'Physical damage heals the holder for 33% of the damage dealt.\r\nUpon falling below 40% Health, the holder gains a 30% max Health ', 300, 'img/Bloodthirster.png', 4),
(12, 'Blue Buff', 12, 'The holder gains 50 Mana (including components). After casting their Ability, the holder gains 20 mana.', 300, 'img/BlueBuff.png', 5),
(13, 'Bramble Vest', 12, 'Grants 70 bonus Armor (including components). Negates bonus damage from incoming critical hits. On being hit by an attack, deal 60/80/120 magic damage to all nearby enemies (once every 2.5 seconds).\r\n', 300, 'img/BrambleVest.png', 2),
(14, 'Chalice of Power', 12, 'When combat begins, the holder and all allies within 1 hex in the same row gain 30 Ability Power for the rest of combat.\n', 300, 'img/ChaliceofPower.png', 3),
(15, 'Deathblade', 12, 'The holder gains 50/75/100 bonus Attack Damage (including components).\n', 300, 'img/Deathblade.png', 1),
(16, 'Dragons Claw', 12, 'Grants 200 bonus Magic Resist (including components). On being hit by magic or true damage from an Ability, launch a fireball at the Abilitys caster that deals magic damage equal to 18% of their max Health (0.5 second cooldown).\n', 300, 'img/DragonsClaw.png', 4),
(17, 'Frozen Heart\n', 12, 'Reduces the Attack Speed of enemies within 2 hexes by 35%.\n', 300, 'img/FrozenHeart.png', 2),
(18, 'Gargoyle Stoneplate', 12, 'The holder gains 18 Armor and 18 Magic Resist for each enemy targeting them.\n', 300, 'img/GargoyleStoneplate.png', 2),
(19, 'Giant Slayer\n', 12, 'The holders Abilities and attacks do 20% bonus damage. If the target has more than 1600 maximum Health, the bonus increases to 60%.\n', 300, 'img/GiantSlayer.png', 1),
(20, 'Guardian Angel', 12, 'Prevents the holders first death, placing them in stasis instead. After 2 seconds, they return with 250 Health and shed all negative effects.\n', 300, 'img/GuardianAngel.png', 2),
(21, 'Guinsoos Rageblade\n', 12, 'Attacks grant +6% bonus Attack Speed for the rest of combat.\n', 300, 'img/GuinsoosRageblade.png', 3),
(22, 'Hand of Justice\n', 12, 'The holder gains both of the following:\n+10 Attack Damage and +10 Ability Power.\nAttacks and Abilities heal for 10% of damage dealt.\n\nAt the beginning of each planning phase, one of these buffs is increased to 33%.\n', 300, 'img/HandofJustice.png', 2),
(23, 'Hextech Gunblade\n', 12, 'The holders magic and true damage from Abilities heal them for 33% of the damage dealt. The holder also heals their lowest health ally for the same amount.\n', 300, 'img/HextechGunblade.png', 4),
(24, 'Infinity Edge\n', 12, 'The holder gains 75% Critical Strike Chance and 10% Critical Strike Damage. Each point of Critical Strike Chance above 100% becomes +1% Critical Strike Damage.\n', 300, 'img/InfinityEdge.png', 5),
(25, 'Ionic Spark\n', 12, 'Enemies within 3 hexes have their Magic Resist reduced by 50%. When they cast an Ability, they are zapped taking magic damage equal to 200% of their max Mana.\n', 300, 'img/IonicSpark.png', 6),
(26, 'Jeweled Gauntlet\n', 12, 'The holders magic and true damage from their Ability can critically strike. The holder gains 40% bonus Critical Strike Damage and 10 bonus Ability Power.\n', 300, 'img/JeweledGauntlet.png', 1),
(27, 'Last Whisper\n', 12, 'When the holder inflicts a critical hit, the targets Armor is reduced by 70% for 5 seconds. This effect does not stack.\n', 300, 'img/LastWhisper.png', 1),
(28, 'Locket of the Iron Solari\n', 12, 'When combat begins, the holder and all allies within 2 hexes in the same row gain a shield that blocks 300/350/400 damage for 15 seconds.\n', 300, 'img/LocketoftheIronSolari.png', 2),
(29, 'Morellonomicon\n', 12, 'When the holder deals magic or true damage with their Ability, they burn the target, dealing 20% of the targets maximum Health as true damage over 10 seconds and reducing healing by 50% for the duration of the burn.\n', 300, 'img/Morellonomicon.png',3),
(30, 'Quicksilver\n', 12, 'The holder gains 20% bonus Attack Speed. The holder is immune to crowd control in combat for 15 seconds\n', 300, 'img/Quicksilver.png', 5),
(31, 'Rabadons Deathcap\n', 12, 'The holder gains 75 bonus Ability Power (including components).\n', 300, 'img/RabadonsDeathcap.png', 1),
(32, 'Rapid Firecannon\n', 12, 'Increases the holders Attack Range by 1 hex and grants 55% bonus Attack Speed (including components).\n', 300, 'img/RapidFirecannon.png', 6),
(33, 'Redemption\n', 12, 'Every 5 seconds, the holder radiates an aura to allies within 1 hex, healing them for 18% of their missing Health. Affected allies take 25% reduced damage from multi-target abilities and attacks for 5 seconds.\n', 300, 'img/Redemption.png', 4),
(34, 'Runaans Hurricane\n', 12, 'The holder gains 15 bonus Attack Damage. The holders attacks fire a bolt at another nearby enemy, dealing 75% of the wearers Attack Damage as physical damage.\n', 300, 'img/RunaansHurricane.png', 2),
(35, 'Shroud of Stillness\n', 12, 'When combat begins, the holder shoots a beam straight ahead that delays affected enemies first cast, increasing their max Mana by 35% until they cast.\n', 300, 'img/ShroudofStillness.png', 3),
(36, 'Spear of Shojin\n', 12, 'The holders attacks restore 8 additional Mana.\n', 300, 'img/SpearofShojin.png', 1),
(37, 'Statikk Shiv\n', 12, 'The holder gains 10% bonus Attack Speed. Every third attack from the holder unleashes a chain lightning that bounces to 4 enemies, dealing 70 magic damage and reducing their Magic Resist by 50% for 5 seconds.\n', 300, 'img/StatikkShiv.png', 4),
(38, 'Sunfire Cape\n', 12, 'Every 2 seconds, a random enemy within 2 hexes is burned for 16% of their maximum health as true damage over 8 seconds. Any healing they receive is reduced by 50%.\n', 300, 'img/SunfireCape.png', 3),
(39, 'Tacticians Crown\n', 12, 'Wearers team gains +1 maximum team size.\n', 300, 'img/TacticiansCrown.png', 1),
(40, 'Thiefs Gloves\n', 12, 'At the beginning of each planning phase, the holder equips 2 temporary items. Temporary items increase in power based on your player level.\n', 300, 'img/ThiefsGloves.png', 2),
(41, 'Titans Resolve\n', 12, 'When the holder attacks or takes damage, they gain 2 Attack Damage and Ability Power. \n\nThis stacks up to 25 times, at which point the holder gains 25 Armor and Magic Resist.', 300, 'img/TitansResolve.png', 4),
(42, 'Warmogs Armor\n', 12, 'Grants 1000 bonus Health (including components).\n', 300, 'img/WarmogsArmor.png', 6),
(43, 'Zekes Herald\n', 12, 'When combat begins, the holder and all allies within 1 hexes in the same row gain +30% Attack Speed for the rest of combat.\n', 300, 'img/ZekesHerald.png', 5),
(44, 'Zephyr\n', 12, 'When combat begins, the holder summons a whirlwind on the opposite side of the arena that removes the closest enemy from combat for 5 seconds.\n', 300, 'img/Zephyr.png', 5),
(45, 'ZzRot Portal\n', 12, 'At the start of combat, the holder taunts enemies within 4 hexes. \n\nWhen the holder dies, a Voidspawn arises taunting nearby enemies.', 300, 'img/ZzRotPortal.png', 2),
(46, 'B.F. Sword', 12, NULL, 300, 'img/BFSword.png', 1),
(47, 'Chain Vest', 12, NULL, 300, 'img/ChainVest.png', 1),
(48, 'Giants Belt', 12, NULL, 300, 'img/GiantsBelt.png', 2),
(49, 'Needlessly Large Rod', 12, NULL, 300, 'img/NeedlesslyLargeRod.png', 3),
(50, 'Negatron Cloak', 12, NULL, 300, 'img/NegatronCloak.png', 2),
(51, 'Recurve Bow', 12, NULL, 300, 'img/RecurveBow.png', 3),
(52, 'Sparring Gloves', 12, NULL, 300, 'img/SparringGloves.png', 5),
(53, 'Spatula', 12, NULL, 300, 'img/Spatula.png', 4),
(54, 'Tear of the Goddess', 12, NULL, 300, 'img/TearoftheGoddess.png', 6),
(55, 'Edge of Night', 12, 'When the holder first drops below 50% health, they briefly enter stealth, becoming untargetable and shedding negative effects. After coming out of stealth, the holder gains an additional 40% bonus Attack Speed.', 300, 'img/EdgeofNight.png', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `empleado` (`empleado`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`producto`,`compra`),
  ADD KEY `compra` (`compra`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`empleado`) REFERENCES `empleados` (`id_empleado`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`compra`) REFERENCES `compras` (`id_compra`);
COMMIT;

