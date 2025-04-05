

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE database productos;
use productos;


CREATE TABLE `amuebladocomedor_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `amuebladocomedor_productos`
--

INSERT INTO `amuebladocomedor_productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(211, 'caldo de pollo ', '', 143434.99, '../img/mesa1.PNG'),
(212, 'Mesa Candida', 'Con una altura de 1.10 m y de 170*100 cm', 300.00, '../img/amdc/mesa2.PNG'),
(213, 'Mesa Continental', 'Con una altura de 1.10 m y de 170*100 cm', 500.00, '../img/amdc/mesa3.PNG'),
(214, 'Mesa Lina', 'Con una altura de 1.10 m y de 170 cm de diametro', 700.00, '../img/amdc/mesa4.PNG'),
(215, 'Mesa Malena', 'Con una altura de 1.10 m y de 170*100 cm', 200.00, '../img/amdc/mesa5.PNG'),
(216, 'Mesa Lidia', 'Con una altura de 1.10 m y de 170*100 cm', 599.99, '../img/amdc/mesa6.PNG'),
(217, 'Mesa Roble', 'Con una altura de 1.10 m y de 170*100 cm', 4999.99, '../img/amdc/mesa7.PNG'),
(218, 'Mesa Libiana', 'Con una altura de 1.10 m y de 170 cm de diametro', 199.99, '../img/amdc/mesa8.PNG'),
(219, 'Cielo', 'Incluye todo el kit.', 9999.99, '../img/amdc/juegocomdor1.PNG'),
(220, 'Coffe', 'Incluye todo el kit.', 5999.99, '../img/amdc/juegocomdor2.PNG'),
(221, 'Lina', 'Incluye todo el kit.', 9999.99, '../img/amdc/juegocomdor3.PNG'),
(222, 'Mostaza', 'Incluye todo el kit.', 9999.99, '../img/amdc/juegocomdor4.PNG'),
(223, 'DiMango', 'Incluye todo el kit.', 9999.99, '../img/amdc/juegocomdor5.PNG'),
(224, 'Dalmata', 'Incluye todo el kit.', 10999.99, '../img/amdc/juegocomdor6.PNG'),
(225, 'Beige', 'Incluye todo el kit.', 9999.99, '../img/amdc/juegocomdor7.PNG'),
(226, 'Finali', 'Incluye todo el kit.', 9999.99, '../img/amdc/juegocomdor8.PNG'),
(227, 'Consola Metal', 'Con una altura de 60cm de altura y 70*70 cm', 549.99, '../img/amdc/consola1.PNG'),
(228, 'Consola Roble', 'Con una altura de 60cm de altura y 70*70 cm', 549.99, '../img/amdc/consola2.PNG'),
(229, 'Consola Nocturna', 'Con una altura de 60cm de altura y 70*70 cm', 549.99, '../img/amdc/consola3.PNG'),
(230, 'Consola Bety', 'Con una altura de 60cm de altura y 70*70 cm', 499.99, '../img/amdc/consola4.PNG'),
(231, 'Consola Madie', 'Con una altura de 60cm de altura y 70*30 cm', 549.99, '../img/amdc/consola5.PNG'),
(232, 'Consola Fontana', 'Con una altura de 60cm de altura y 70*30 cm', 399.99, '../img/amdc/consola6.PNG'),
(233, 'Consola Liliana', 'Con una altura de 60cm de altura y 70*70 cm', 699.99, '../img/amdc/consola7.PNG'),
(234, 'Consola Inti', 'Con una altura de 60cm de altura y 70*70 cm', 739.99, '../img/amdc/consola8.PNG'),
(235, 'Taburet Madie', 'Incluye el set', 549.99, '../img/amdc/taburet1.PNG'),
(236, 'Taburet MadiIrmae', 'Incluye el set', 1999.99, '../img/amdc/taburet2.PNG'),
(237, 'Taburet Elli', 'Incluye el set', 2999.99, '../img/amdc/taburet3.PNG'),
(238, 'Taburet Indigo', 'Incluye el set', 549.99, '../img/amdc/taburet4.PNG'),
(239, 'Taburet Alina', 'Incluye el set', 909.99, '../img/amdc/taburet5.PNG'),
(240, 'Taburet Dilia', 'Incluye el set', 1300.00, '../img/amdc/taburet6.PNG'),
(241, 'Taburet Ilia', 'Incluye el set', 909.99, '../img/amdc/taburet7.PNG'),
(242, 'Taburet Lib', 'Incluye el set', 899.99, '../img/amdc/taburet8.PNG'),
(243, 'Alacena Lia', 'Incluye el set', 999.99, '../img/amdc/alacena1.PNG'),
(244, 'Alacena Delia', 'Incluye el set', 1299.99, '../img/amdc/alacena2.PNG'),
(245, 'Alacena Kam', 'Incluye el set', 999.99, '../img/amdc/alacena3.PNG'),
(246, 'Alacena Ila', 'Incluye el set', 1399.99, '../img/amdc/alacena4.PNG'),
(247, 'Alacena Din', 'Incluye el set', 1599.99, '../img/amdc/alacena5.PNG'),
(248, 'Alacena Dir', 'Incluye el set', 1899.99, '../img/amdc/alacena6.PNG'),
(249, 'Alacena DirUp', 'Incluye el set', 499.99, '../img/amdc/alacena7.PNG'),
(250, 'Alacena LiaUP', 'Incluye el set', 399.99, '../img/amdc/alacena8.PNG'),
(251, 'Banca Blanca', 'Incluye un tapete', 399.99, '../img/amdc/banco1.PNG'),
(252, 'Banca Beige', 'Incluye un tapete', 399.99, '../img/amdc/banco2.PNG'),
(253, 'Respaldo Blanco', 'Incluye un tapete', 599.99, '../img/amdc/banco3.PNG'),
(254, 'Banco Soft', 'Incluye un tapete', 599.99, '../img/amdc/banco4.PNG'),
(255, 'Banco Madera', 'Incluye un tapete', 99.99, '../img/amdc/banco5.PNG'),
(256, 'Respaldo Browni', 'Incluye un tapete', 299.99, '../img/amdc/banco6.PNG'),
(257, 'Banco Whitey', 'Incluye un tapete', 399.99, '../img/amdc/banco7.PNG'),
(258, 'Banco Rustic', 'Incluye tepete', 700.00, '../img/amdc/banco8.PNG'),
(259, 'Bar rodante', 'Incluye la cristaleria', 11999.99, '../img/amdc/bar1.PNG'),
(260, 'Bar Station', 'Incluye la cristaleria', 11999.99, '../img/amdc/bar2.PNG'),
(261, 'Bar Esquinero', 'Incluye la cristaleria y las botellas', 79999.99, '../img/amdc/bar3.PNG'),
(262, 'Bar delantero', 'Incluye la cristaleria', 5999.99, '../img/amdc/bar4.PNG'),
(263, 'Bar de esquina', 'Incluye un tapete', 5999.99, '../img/amdc/bar5.PNG'),
(264, 'Bar cubo', 'Incluye la cristaleria', 24999.99, '../img/amdc/bar6.PNG'),
(265, 'Bar desplazado', 'Incluye la cristaleria', 24999.99, '../img/amdc/bar7.PNG'),
(266, 'Bar carreta', 'No incluye cristaleria ni botellas', 1999.99, '../img/amdc/bar8.PNG'),
(267, 'Bufetera Stonk', 'Incluye un tapete', 2999.99, '../img/amdc/buf1.PNG'),
(268, 'Bufetera oriental', 'Incluye un tapete', 4999.99, '../img/amdc/buf2.PNG'),
(269, 'Bufetera Beige', 'Incluye un tapete', 4999.99, '../img/amdc/buf3.PNG'),
(270, 'Bufetera Neutral', 'Incluye un tapete', 3999.99, '../img/amdc/buf4.PNG'),
(271, 'Bufetera Boho', 'Incluye un tapete', 3999.99, '../img/amdc/buf5.PNG'),
(272, 'Bufetera Brownie', 'Incluye un tapete', 4999.99, '../img/amdc/buf6.PNG'),
(273, 'Bufetera Cartoon', 'Incluye un tapete', 2999.99, '../img/amdc/buf7.PNG'),
(274, 'Bufetera Roble', 'Incluye un tapete', 4999.99, '../img/amdc/buf8.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `araticulosmesa_productos`
--

CREATE TABLE `mesa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `araticulosmesa_productos`
--

INSERT INTO `mesa` (`id`, `nombre`, `precio`, `imagen`) VALUES
(84, 'Platanos En Mole',  30.00, '../img/almu1.png'),
(85, 'Pinol',  55.00, '../img/almu2.png'),
(86, 'Fiambre', 80.00, '../img/almu3.png'),
(87, 'Pepian', 70.00, '../img/almu4.png'),
(88, 'Chojin Bataneco', 55.00, '../img/almu5.png'),
(89, 'Jocon', 75.00, '../img/almu6.png'),
(90, 'Kak´ik', 60.00, '../img/almu7.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compraefectivo`
--

CREATE TABLE `compraefectivo` (
  `IdCompraEfetivo` int(11) NOT NULL,
  `Clientes` varchar(50) NOT NULL,
  `Facturacion` int(11) NOT NULL,
  `RetirarTienda` int(11) NOT NULL,
  `PagoEfectivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compratarjeta`
--

CREATE TABLE `compratarjeta` (
  `IdCompraTarjeta` int(11) NOT NULL,
  `Clientes` varchar(50) NOT NULL,
  `Facturacion` int(11) NOT NULL,
  `Envio` int(11) NOT NULL,
  `PagarTarjeta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscliente`
--

CREATE TABLE `datoscliente` (
  `correo` varchar(50) NOT NULL,
  `Nombres` varchar(59) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Telfono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electrodomesticos_productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `electrodomesticos_productos`
--

INSERT INTO `productos` (`id`, `nombre`,  `precio`, `imagen`) VALUES
(1, 'Tortillas Ahogadas', 49.00, '../img/desa1.PNG'),
(2, 'Cacerola Con Pollo',  60.00, '../img/desa2PNG'),
(3, 'Huevos Indecisos',  40.00, '../img/desa3.PNG'),
(4, 'Omelette De La Casa', 55.00, '../img/desa4.png'),
(5, 'Desayuno Finquero', 45.00, '../img/desa5.PNG'),
(6, 'Chilaquiles 3 Timepos', 40.00, '../img/desa6.PNG'),
(7, 'Panqueques De Elote', 40.00, '../img/desa7.PNG');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id` int(11) NOT NULL,
  `Departamento` varchar(50) DEFAULT NULL,
  `Municipio` varchar(50) DEFAULT NULL,
  `DireccionExacta` varchar(50) DEFAULT NULL,
  `Destinatario` varchar(50) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `Nfactura` int(11) NOT NULL,
  `Documento` varchar(5) DEFAULT NULL,
  `NombreparaFactura` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_productos`
--

CREATE TABLE `ofertas_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoefectivo`
--

CREATE TABLE `pagoefectivo` (
  `id` int(11) NOT NULL,
  `Estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagotarjeta`
--

CREATE TABLE `pagotarjeta` (
  `idpago` int(11) NOT NULL,
  `Ntarjeta` int(11) DEFAULT NULL,
  `NombreyApellido` varchar(50) DEFAULT NULL,
  `FechadeVencimiento` varchar(50) DEFAULT NULL,
  `cv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_seleccionados`
--

CREATE TABLE `productos_seleccionados` (
  `Id` int(11) NOT NULL,
  `codigoProducto` int(11) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retirartienda`
--

CREATE TABLE `retirartienda` (
  `idpedido` int(11) NOT NULL,
  `fechaRetiro` date DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vajillas_productos`
--

CREATE TABLE `vajillas_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vajillas_productos`
--

INSERT INTO `vajillas_productos` (`id`, `nombre`, `precio`, `imagen`) VALUES
(147, 'Fresco De Suchiles', 15.00, '../img/bebida1.png'),
(148, 'Horchata', 10.00, '../img/bebida2.png'),
(149, 'ROMPOPE', 20.00, '../img/bebida3.png'),
(150, 'Arroz Con Leche', 15.00, '../img/bebida4.png'),
(151, 'Boj', 25.00, '../img/bebida5.png'),
(152, 'Atol Blanco', 15.00, '../img/bebida6.png'),
(153, 'Atol De Elote', 15.00, '../img/bebida7.png');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amuebladocomedor_productos`
--
ALTER TABLE `amuebladocomedor_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `araticulosmesa_productos`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compraefectivo`
--
ALTER TABLE `compraefectivo`
  ADD PRIMARY KEY (`IdCompraEfetivo`),
  ADD KEY `Clientes` (`Clientes`),
  ADD KEY `Facturacion` (`Facturacion`),
  ADD KEY `RetirarTienda` (`RetirarTienda`),
  ADD KEY `PagoEfectivo` (`PagoEfectivo`);

--
-- Indices de la tabla `compratarjeta`
--
ALTER TABLE `compratarjeta`
  ADD PRIMARY KEY (`IdCompraTarjeta`),
  ADD KEY `Clientes` (`Clientes`),
  ADD KEY `Facturacion` (`Facturacion`),
  ADD KEY `Envio` (`Envio`),
  ADD KEY `PagarTarjeta` (`PagarTarjeta`);

--
-- Indices de la tabla `datoscliente`
--
ALTER TABLE `datoscliente`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `electrodomesticos_productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`Nfactura`);

--
-- Indices de la tabla `ofertas_productos`
--
ALTER TABLE `ofertas_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagoefectivo`
--
ALTER TABLE `pagoefectivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagotarjeta`
--
ALTER TABLE `pagotarjeta`
  ADD PRIMARY KEY (`idpago`);

--
-- Indices de la tabla `productos_seleccionados`
--
ALTER TABLE `productos_seleccionados`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `retirartienda`
--
ALTER TABLE `retirartienda`
  ADD PRIMARY KEY (`idpedido`);

--
-- Indices de la tabla `vajillas_productos`
--
ALTER TABLE `vajillas_productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  MODIFY `Nfactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagoefectivo`
--
ALTER TABLE `pagoefectivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagotarjeta`
--
ALTER TABLE `pagotarjeta`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos_seleccionados`
--
ALTER TABLE `productos_seleccionados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `retirartienda`
--
ALTER TABLE `retirartienda`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compraefectivo`
--
ALTER TABLE `compraefectivo`
  ADD CONSTRAINT `compraefectivo_ibfk_1` FOREIGN KEY (`Clientes`) REFERENCES `datoscliente` (`correo`),
  ADD CONSTRAINT `compraefectivo_ibfk_2` FOREIGN KEY (`Facturacion`) REFERENCES `facturacion` (`Nfactura`),
  ADD CONSTRAINT `compraefectivo_ibfk_3` FOREIGN KEY (`RetirarTienda`) REFERENCES `retirartienda` (`idpedido`),
  ADD CONSTRAINT `compraefectivo_ibfk_4` FOREIGN KEY (`PagoEfectivo`) REFERENCES `pagoefectivo` (`id`);

--
-- Filtros para la tabla `compratarjeta`
--
ALTER TABLE `compratarjeta`
  ADD CONSTRAINT `compratarjeta_ibfk_1` FOREIGN KEY (`Clientes`) REFERENCES `datoscliente` (`correo`),
  ADD CONSTRAINT `compratarjeta_ibfk_2` FOREIGN KEY (`Facturacion`) REFERENCES `facturacion` (`Nfactura`),
  ADD CONSTRAINT `compratarjeta_ibfk_3` FOREIGN KEY (`Envio`) REFERENCES `envio` (`id`),
  ADD CONSTRAINT `compratarjeta_ibfk_4` FOREIGN KEY (`PagarTarjeta`) REFERENCES `pagotarjeta` (`idpago`);
COMMIT;

