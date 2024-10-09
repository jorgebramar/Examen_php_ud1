<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $menu = [
            "entrantes" => [
                "jamon" => [
                    "nombre_completo" => "Jamón Ibérico de Bellota",
                    "precio" => 15,
                    "alergenos" => ["gluten"]
                ],
                "ensalada" => [
                    "nombre_completo" => "Ensalada de Mariscos Frescos",
                    "precio" => 10,
                    "alergenos" => ["crustáceos", "pescado"]
                ],
                "croquetas" => [
                    "nombre_completo" => "Croquetas Variadas (Jamón y Setas)",
                    "precio" => 8,
                    "alergenos" => ["lácteos", "gluten"]
                ],
                "quesos" => [
                    "nombre_completo" => "Tabla de Quesos Artesanales",
                    "precio" => 12,
                    "alergenos" => ["lácteos"]
                ],
                "gazpacho" => [
                    "nombre_completo" => "Gazpacho Andaluz",
                    "precio" => 7,
                    "alergenos" => []
                ]
            ],
            "principales" => [
                "solomillo" => [
                    "nombre_completo" => "Solomillo de Ternera con Salsa de Trufas",
                    "precio" => 30,
                    "alergenos" => []
                ],
                "lubina" => [
                    "nombre_completo" => "Lubina a la Plancha con Verduras",
                    "precio" => 25,
                    "alergenos" => ["pescado"]
                ],
                "risotto" => [
                    "nombre_completo" => "Risotto Cremoso de Setas",
                    "precio" => 20,
                    "alergenos" => ["lácteos"]
                ],
                "paella" => [
                    "nombre_completo" => "Paella de Mariscos",
                    "precio" => 28,
                    "alergenos" => ["crustáceos"]
                ]
            ],
            "secundarios" => [
                "cordero" => [
                    "nombre_completo" => "Cordero Asado con Romero",
                    "precio" => 25,
                    "alergenos" => []
                ],
                "pollo" => [
                    "nombre_completo" => "Pollo al Horno con Patatas",
                    "precio" => 18,
                    "alergenos" => []
                ],
                "quiche" => [
                    "nombre_completo" => "Quiche de Verduras y Queso",
                    "precio" => 15,
                    "alergenos" => ["gluten", "lácteos"]
                ],
                "berenjenas_rellenas" => [
                    "nombre_completo" => "Berenjenas Rellenas al Horno",
                    "precio" => 17,
                    "alergenos" => ["gluten"]
                ]
            ],
            "postres" => [
                "tarta_chocolate" => [
                    "nombre_completo" => "Tarta de Chocolate Negro",
                    "precio" => 10,
                    "alergenos" => ["gluten", "lácteos"]
                ],
                "fruta_fresca" => [
                    "nombre_completo" => "Selección de Fruta Fresca de Temporada",
                    "precio" => 7,
                    "alergenos" => []
                ],
                "helado" => [
                    "nombre_completo" => "Helado Artesanal de Vainilla",
                    "precio" => 8,
                    "alergenos" => ["lácteos"]
                ],
                "tiramisu" => [
                    "nombre_completo" => "Tiramisú Tradicional Italiano",
                    "precio" => 12,
                    "alergenos" => ["gluten", "lácteos", "huevo"]
                ]
            ],
            "vinos" => [
                "rioja" => [
                    "nombre_completo" => "Vino Tinto Rioja Reserva",
                    "precio" => 15,
                    "alergenos" => ["sulfitos"]
                ],
                "ribera" => [
                    "nombre_completo" => "Vino Tinto Ribera del Duero",
                    "precio" => 18,
                    "alergenos" => ["sulfitos"]
                ],
                "blanco" => [
                    "nombre_completo" => "Vino Blanco Albariño",
                    "precio" => 12,
                    "alergenos" => ["sulfitos"]
                ],
                "champagne" => [
                    "nombre_completo" => "Champagne Brut",
                    "precio" => 20,
                    "alergenos" => ["sulfitos"]
                ],
                "rosado" => [
                    "nombre_completo" => "Vino Rosado de Navarra",
                    "precio" => 14,
                    "alergenos" => ["sulfitos"]
                ]
            ]
        ];
    }