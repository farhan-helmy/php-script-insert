<?php

$data = '{
    "sections": [
        {
            "section_key": "a",
            "name": "Bahagian A (Demografi)",
            "fields": [
                {
                    "key": "a_1",
                    "no": "1",
                    "text": "Umur pada tahun 2021",
                    "type": "number",
                    "required": "true",
                    "prependText": "Tahun"
                },
                {
                    "key": "a_2",
                    "no": "2",
                    "text": "Jantina",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Lelaki",
                            "value": "Lelaki",
                            "icon": "male"
                        },
                        {
                            "text": "Perempuan",
                            "value": "Perempuan",
                            "icon": "female"
                        }
                    ]
                },
                {
                    "key": "a_3",
                    "no": "3",
                    "text": "Bangsa",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Melayu",
                            "value": "Melayu"
                        },
                        {
                            "text": "India",
                            "value": "India"
                        },
                        {
                            "text": "Cina",
                            "value": "Cina"
                        },
                        {
                            "text": "Bumiputera Sabah",
                            "value": "Bumiputera Sabah"
                        },
                        {
                            "text": "Bumiputera Sarawak",
                            "value": "Bumiputera Sarawak"
                        },
                        {
                            "text": "Orang Asli",
                            "value": "Orang Asli"
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text"
                                }
                            ]
                        }
                    ]
                },
                {
                    "key": "a_4",
                    "no": "4",
                    "text": "Agama",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Islam",
                            "value": "Islam"
                        },
                        {
                            "text": "Hindu",
                            "value": "Hindu"
                        },
                        {
                            "text": "Kristian",
                            "value": "Kristian"
                        },
                        {
                            "text": "Buddha",
                            "value": "Buddha"
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text"
                                }
                            ]
                        }
                    ]
                },
                {
                    "key": "a_5",
                    "no": "5",
                    "text": "Kawasan tempat tinggal",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Bandar",
                            "value": "Bandar"
                        },
                        {
                            "text": "Luar bandar",
                            "value": "Luar bandar"
                        }
                    ]
                },
                {
                    "key": "a_6",
                    "no": "6",
                    "text": "Status pemilikan rumah",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Sendiri",
                            "value": "Sendiri"
                        },
                        {
                            "text": "Rumah keluarga",
                            "value": "Rumah keluarga"
                        },
                        {
                            "text": "Harta pusaka",
                            "value": "Harta pusaka"
                        },
                        {
                            "text": "Sewa",
                            "value": "Sewa"
                        },
                        {
                            "text": "Saudara-mara",
                            "value": "Saudara-mara"
                        },
                        {
                            "text": "Rakan",
                            "value": "Rakan"
                        },
                        {
                            "text": "Kuarters",
                            "value": "Kuarters"
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text"
                                }
                            ]
                        }
                    ]
                },
                {
                    "key": "a_7",
                    "no": "7",
                    "text": "Jenis kediaman",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Rumah kampung",
                            "value": "Rumah kampung"
                        },
                        {
                            "text": "Rumah panjang",
                            "value": "Rumah panjang"
                        },
                        {
                            "text": "Rumah teres",
                            "value": "Rumah teres"
                        },
                        {
                            "text": "Rumah Semi-D",
                            "value": "Rumah Semi-D"
                        },
                        {
                            "text": "Ruumah Banglo",
                            "value": "Ruumah Banglo"
                        },
                        {
                            "text": "Flat",
                            "value": "Flat"
                        },
                        {
                            "text": "Pangsapuri",
                            "value": "Pangsapuri"
                        },
                        {
                            "text": "Kondominium",
                            "value": "Kondominium"
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text"
                                }
                            ]
                        }
                    ]
                },
                {
                    "key": "a_8",
                    "no": "8",
                    "text": "Berat badan",
                    "type": "number",
                    "required": "true",
                    "prependText": "kg"
                },
                {
                    "key": "a_9",
                    "no": "9",
                    "text": "Tinggi",
                    "type": "number",
                    "required": "true",
                    "prependText": "cm"
                },
                {
                    "key": "a_16a",
                    "no": "16a",
                    "text": "Adakah anda memiliki rumah sendiri?",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Ya",
                            "value": "Ya",
                            "inner_icon": "check"
                        },
                        {
                            "text": "Tidak",
                            "value": "Tidak",
                            "inner_icon": "cancel"
                        }
                    ]
                },
                {
                    "key": "a_16b",
                    "no": "16b",
                    "text": "JIKA TIDAK, kenapa? (Sila tandakan SATU JAWAPAN sahaja)",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Belum mampu",
                            "value": "Belum mampu"
                        },
                        {
                            "text": "Lokasi tidak sesuai",
                            "value": "Lokasi tidak sesuai"
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text"
                                }
                            ]
                        }
                    ]
                },
                {
                    "key": "a_23",
                    "no": "23",
                    "text": "Sila tandakan (√) pada pernyataan di bawah mengikut skala yang diberikan",
                    "type": "multiquestion",
                    "required": "true",
                    "questions": [
                        {
                            "text": "Saya mengambil pinjaman baharu untuk menampung hutang lama",
                            "required": "true"
                        },
                        {
                            "text": "Pendapatan yang saya peroleh sepadan/setimpal dengan pekerjaan saya",
                            "required": "true"
                        },
                        {
                            "text": "Saya perlu melakukan kerja lebih masa bagi menampung keperluan bulanan",
                            "required": "true"
                        },
                        {
                            "text": "Pekerjaan saya adalah sepadan dengan kelayakan saya",
                            "required": "true"
                        },
                        {
                            "text": "Mudah untuk saya mendapat pekerjaan yang setara dengan kelayakan saya",
                            "required": "true"
                        }
                    ],
                    "answers": [
                        {
                            "text": "Sangat tidak setuju",
                            "value": "1"
                        },
                        {
                            "text": "Tidak setuju",
                            "value": "2"
                        },
                        {
                            "text": "Setuju",
                            "value": "3"
                        },
                        {
                            "text": "Sangat setuju",
                            "value": "4"
                        }
                    ]
                },
                {
                    "key": "a_24",
                    "no": "24",
                    "text": "Berdasarkan pilihan jawapan berikut, yang manakah menggambarkan tentang kecukupan pendapatan anda? (Sila tandakan SATU JAWAPAN sahaja)",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Tidak mencukupi",
                            "value": "Tidak mencukupi"
                        },
                        {
                            "text": "Cukup untuk keperluan asas sahaja",
                            "value": "Cukup untuk keperluan asas sahaja"
                        },
                        {
                            "text": "Cukup untuk kebanyakan perkara",
                            "value": "Cukup untuk kebanyakan perkara"
                        },
                        {
                            "text": "Cukup untuk membeli semua barang dan mampu membuat simpanan",
                            "value": "Cukup untuk membeli semua barang dan mampu membuat simpanan"
                        }
                    ]
                },
                {
                    "key": "a_25",
                    "no": "25",
                    "text": "Apakah yang mendorong anda untuk melanjutkan pelajaran? (Sila tandakan SATU JAWAPAN sahaja)",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Menambah ilmu pengetahuan",
                            "value": "Menambah ilmu pengetahuan"
                        },
                        {
                            "text": "Peluang mendapat kerja yang lebih baik/ kenaikan pangkat",
                            "value": "Peluang mendapat kerja yang lebih baik/ kenaikan pangkat"
                        },
                        {
                            "text": "Dorongan rakan-rakan",
                            "value": "Dorongan rakan-rakan"
                        },
                        {
                            "text": "Dorongan ibu bapa/ ahli keluarga",
                            "value": "Dorongan ibu bapa/ ahli keluarga"
                        },
                        {
                            "text": "Dorongan guru",
                            "value": "Dorongan guru"
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text"
                                }
                            ]
                        }
                    ]
                },
                {
                    "key": "a_26",
                    "no": "26",
                    "text": "Bagaimanakah anda mendapatkan maklumat berkaitan peluang melanjutkan pelajaran? (Boleh tanda LEBIH daripada SATU JAWAPAN)",
                    "type": "checkbox",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Internet",
                            "value": "Internet"
                        },
                        {
                            "text": "Blog",
                            "value": "Blog"
                        },
                        {
                            "text": "Pameran pendidikan",
                            "value": "Pameran pendidikan"
                        },
                        {
                            "text": "Ibu bapa/ penjaga ",
                            "value": "Ibu bapa/ penjaga "
                        },
                        {
                            "text": "Risalah",
                            "value": "Risalah"
                        },
                        {
                            "text": "Rakan-rakan",
                            "value": "Rakan-rakan"
                        },
                        {
                            "text": "Surat khabar",
                            "value": "Surat khabar"
                        },
                        {
                            "text": "Televisyen",
                            "value": "Televisyen"
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text"
                                }
                            ]
                        }
                    ]
                },
                {
                    "key": "a_27",
                    "no": "27",
                    "text": "Berdasarkan penglibatan anda SEKARANG di sekolah/kolej/universiti/dll, sila tandakan pada ruang yang berkenaan",
                    "type": "multiquestion",
                    "required": "true",
                    "questions": [
                        {
                            "text": "Saya terlibat secara aktif dalam aktiviti kokurikulum",
                            "type": "scale",
                            "required": "true"
                        },
                        {
                            "text": "Aktiviti kokurikulum banyak memberi manfaat kepada saya",
                            "type": "scale",
                            "required": "true"
                        }
                    ],
                    "answers": [
                        {
                            "text": "Sangat tidak setuju",
                            "value": "1"
                        },
                        {
                            "text": "Tidak setuju",
                            "value": "2"
                        },
                        {
                            "text": "Setuju",
                            "value": "3"
                        },
                        {
                            "text": "Sangat setuju",
                            "value": "4"
                        }
                    ]
                },
                {
                    "key": "a_28",
                    "no": "28",
                    "text": "Sila tandakan peringkat penglibatan tertinggi anda dalam kokurikulum. (Sila tandakan SATU JAWAPAN sahaja)",
                    "type": "radio",
                    "required": "true",
                    "answers": [
                        {
                            "text": "Sekolah",
                            "value": "Sekolah"
                        },
                        {
                            "text": "Daerah",
                            "value": "Daerah"
                        },
                        {
                            "text": "Negeri",
                            "value": "Negeri"
                        },
                        {
                            "text": "Negara",
                            "value": "Negara"
                        },
                        {
                            "text": "Antarabangsa",
                            "value": "Antarabangsa"
                        }
                    ]
                },
                {
                    "key": "a_29",
                    "no": "29",
                    "text": "Nyatakan tahap penguasaan anda dalam kemahiran berikut mengikut skala yang diberikan",
                    "type": "multiquestion",
                    "required": true,
                    "questions": [
                        {
                            "text": "Membaca dalam Bahasa Melayu",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Menulis dalam Bahasa Melayu",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Bertutur dalam Bahasa Melayu",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Memahami maksud apa yang dibaca dalam Bahasa Melayu",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Membaca dalam Bahasa Inggeris",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Menulis dalam Bahasa Inggeris",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Bertutur dalam Bahasa Inggeris",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Memahami maksud apa yang dibaca dalam Bahasa Inggeris",
                            "type": "scale",
                            "required": true
                        },
                        {
                            "text": "Mengira",
                            "type": "scale",
                            "required": true
                        }
                    ],
                    "answers": [
                        {
                            "text": "Tidak menguasai lansung",
                            "value": 0
                        },
                        {
                            "text": "Kurang baik",
                            "value": 1
                        },
                        {
                            "text": "Sederhana",
                            "value": 2
                        },
                        {
                            "text": "Baik",
                            "value": 3
                        },
                        {
                            "text": "Sangat baik",
                            "value": 4
                        }
                    ]
                }
            ]
        },
        {
            "section_key": "b",
            "name": "Bahagian B (Literasi Pendidikan)",
            "fields": 
            [
                    {
                        "key": "b_30a",
                        "no": "30a",
                        "text": "Pada masa ini, adakah anda mempunyai masalah untuk menyambung / menamatkan pengajian/ pembelajaran? Sila tandakan [] SATU jawapan sahaja pada ruang yang berkenaan",
                        "type": "radio",
                        "required": true,
                        "answers": [
                            {
                                "text": "Tiada masalah",
                                "value": "Tiada masalah"
                            },
                            {
                                "text": "Masalah menyambung pengajian/pelajaran",
                                "value": "Masalah menyambung pengajian/pelajaran"
                            },
                            {
                                "text": "Masalah menamatkan pengajian/pelajaran",
                                "value": "Masalah menamatkan pengajian/pelajaran"
                            }
                        ]
                    },
                    {
                        "key": "b_30b",
                        "no": "30b",
                        "text": "Bagi jawapan 30 (b) dan (c), sila tandakan [] pada pernyataan di bawah: (Boleh tanda LEBIH daripada SATU JAWAPAN)",
                        "type": "checkbox",
                        "required": true,
                        "hidden_variable": "30a",
                        "hidden_value": "Tiada masalah",
                        "answers": [
                            {
                                "text": "Tidak mampu daripada segi kewangan",
                                "value": "Tidak mampu daripada segi kewangan"
                            },
                            {
                                "text": "Diri sendiri (tidak berminat)",
                                "value": "Diri sendiri (tidak berminat)"
                            },
                            {
                                "text": "Masalah keluarga/ibu bapa",
                                "value": "Masalah keluarga/ibu bapa"
                            },
                            {
                                "text": "Rakan sebaya",
                                "value": "Rakan sebaya"
                            },
                            {
                                "text": "Kurang upaya (Fizikal)",
                                "value": "Kurang upaya (Fizikal)"
                            },
                            {
                                "text": "Kemudahan infrastruktur",
                                "value": "Kemudahan infrastruktur"
                            },
                            {
                                "text": "Jarak ke tempat pengajian (cth: jauh)",
                                "value": "Jarak ke tempat pengajian (cth: jauh)"
                            },
                            {
                                "text": "Persekitaran tempat pengajian",
                                "value": "Persekitaran tempat pengajian"
                            },
                            {
                                "text": "Kekangan masa",
                                "value": "Kekangan masa"
                            },
                            {
                                "text": "Perlu bekerja untuk menambah pendapatan keluarga",
                                "value": "Perlu bekerja untuk menambah pendapatan keluarga"
                            },
                            {
                                "text": "Lain-lain",
                                "value": "Lain-lain",
                                "questions": [
                                    {
                                        "text": "Nyatakan",
                                        "type": "text",
                                        "required": true
                                    }
                                ]
                            }
                        ]
                    },
                {
                    "key": "b_139",
                    "no": "139",
                    "text": "Sila tandakan [] pada ruang yang berkenaan mengikut skala di bawah ini.",
                    "type": "multistepquestion",
                    "required": true,
                    "questions": [
                        {
                            "text": "Angkat berat (weight lifting)",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Badminton",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Bola jaring",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Bola keranjang",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Bola sepak",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Street soccer",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Bola tampar",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Futsal",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Boling",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Gimnastik",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Golf",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Hoki",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Kriket",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Lawan pedang",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Lumba basikal",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Memanah",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Menembak",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Olahraga",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Perahu layar",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Ping pong",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Ragbi",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Seni mempertahankan diri",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Sepak Takraw",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Skuasy",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Snooker",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Sukan akuatik (cth: renang dll)",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Sukan berkuda (Equestrian)",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Sukan bermotor",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Sukan tradisional/ rakyat (tarik tali,layang-layang, dll)",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Tenis",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Joging",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Aerobik/ Zumba",
                            "type": "scale",
                            "required": true,
                            "question": {
                                "text": "Minit",
                                "type": "text",
                                "required": true
                            }
                        },
                        {
                            "text": "Lain-lain",
                            "value": "Lain-lain",
                            "questions": [
                                {
                                    "text": "Nyatakan",
                                    "type": "text",
                                    "required": true,
                                    "question": {
                                        "text": "Minit",
                                        "type": "text",
                                        "required": true
                                    }
                                }
                            ]
                        }
                    ]
                }
            ]
        }
    ]
}';


// INSERT INTO question_sets(question_collections) VALUES('{
//     "sections": [
//         {
//             "section_key": "a",
//             "name": "Bahagian A (Demografi)",
//             "fields": [
//                 {
//                     "key": "a_1",
//                     "no": "1",
//                     "text": "Umur pada tahun 2021",
//                     "type": "number",
//                     "required": "true",
//                     "prependText": "Tahun"
//                 },
//                 {
//                     "key": "a_2",
//                     "no": "2",
//                     "text": "Jantina",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Lelaki",
//                             "value": "Lelaki",
//                             "icon": "male"
//                         },
//                         {
//                             "text": "Perempuan",
//                             "value": "Perempuan",
//                             "icon": "female"
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_3",
//                     "no": "3",
//                     "text": "Bangsa",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Melayu",
//                             "value": "Melayu"
//                         },
//                         {
//                             "text": "India",
//                             "value": "India"
//                         },
//                         {
//                             "text": "Cina",
//                             "value": "Cina"
//                         },
//                         {
//                             "text": "Bumiputera Sabah",
//                             "value": "Bumiputera Sabah"
//                         },
//                         {
//                             "text": "Bumiputera Sarawak",
//                             "value": "Bumiputera Sarawak"
//                         },
//                         {
//                             "text": "Orang Asli",
//                             "value": "Orang Asli"
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text"
//                                 }
//                             ]
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_4",
//                     "no": "4",
//                     "text": "Agama",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Islam",
//                             "value": "Islam"
//                         },
//                         {
//                             "text": "Hindu",
//                             "value": "Hindu"
//                         },
//                         {
//                             "text": "Kristian",
//                             "value": "Kristian"
//                         },
//                         {
//                             "text": "Buddha",
//                             "value": "Buddha"
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text"
//                                 }
//                             ]
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_5",
//                     "no": "5",
//                     "text": "Kawasan tempat tinggal",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Bandar",
//                             "value": "Bandar"
//                         },
//                         {
//                             "text": "Luar bandar",
//                             "value": "Luar bandar"
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_6",
//                     "no": "6",
//                     "text": "Status pemilikan rumah",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Sendiri",
//                             "value": "Sendiri"
//                         },
//                         {
//                             "text": "Rumah keluarga",
//                             "value": "Rumah keluarga"
//                         },
//                         {
//                             "text": "Harta pusaka",
//                             "value": "Harta pusaka"
//                         },
//                         {
//                             "text": "Sewa",
//                             "value": "Sewa"
//                         },
//                         {
//                             "text": "Saudara-mara",
//                             "value": "Saudara-mara"
//                         },
//                         {
//                             "text": "Rakan",
//                             "value": "Rakan"
//                         },
//                         {
//                             "text": "Kuarters",
//                             "value": "Kuarters"
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text"
//                                 }
//                             ]
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_7",
//                     "no": "7",
//                     "text": "Jenis kediaman",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Rumah kampung",
//                             "value": "Rumah kampung"
//                         },
//                         {
//                             "text": "Rumah panjang",
//                             "value": "Rumah panjang"
//                         },
//                         {
//                             "text": "Rumah teres",
//                             "value": "Rumah teres"
//                         },
//                         {
//                             "text": "Rumah Semi-D",
//                             "value": "Rumah Semi-D"
//                         },
//                         {
//                             "text": "Ruumah Banglo",
//                             "value": "Ruumah Banglo"
//                         },
//                         {
//                             "text": "Flat",
//                             "value": "Flat"
//                         },
//                         {
//                             "text": "Pangsapuri",
//                             "value": "Pangsapuri"
//                         },
//                         {
//                             "text": "Kondominium",
//                             "value": "Kondominium"
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text"
//                                 }
//                             ]
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_8",
//                     "no": "8",
//                     "text": "Berat badan",
//                     "type": "number",
//                     "required": "true",
//                     "prependText": "kg"
//                 },
//                 {
//                     "key": "a_9",
//                     "no": "9",
//                     "text": "Tinggi",
//                     "type": "number",
//                     "required": "true",
//                     "prependText": "cm"
//                 },
//                 {
//                     "key": "a_16a",
//                     "no": "16a",
//                     "text": "Adakah anda memiliki rumah sendiri?",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Ya",
//                             "value": "Ya",
//                             "inner_icon": "check"
//                         },
//                         {
//                             "text": "Tidak",
//                             "value": "Tidak",
//                             "inner_icon": "cancel"
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_16b",
//                     "no": "16b",
//                     "text": "JIKA TIDAK, kenapa? (Sila tandakan SATU JAWAPAN sahaja)",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Belum mampu",
//                             "value": "Belum mampu"
//                         },
//                         {
//                             "text": "Lokasi tidak sesuai",
//                             "value": "Lokasi tidak sesuai"
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text"
//                                 }
//                             ]
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_23",
//                     "no": "23",
//                     "text": "Sila tandakan (√) pada pernyataan di bawah mengikut skala yang diberikan",
//                     "type": "multiquestion",
//                     "required": "true",
//                     "questions": [
//                         {
//                             "text": "Saya mengambil pinjaman baharu untuk menampung hutang lama",
//                             "required": "true"
//                         },
//                         {
//                             "text": "Pendapatan yang saya peroleh sepadan/setimpal dengan pekerjaan saya",
//                             "required": "true"
//                         },
//                         {
//                             "text": "Saya perlu melakukan kerja lebih masa bagi menampung keperluan bulanan",
//                             "required": "true"
//                         },
//                         {
//                             "text": "Pekerjaan saya adalah sepadan dengan kelayakan saya",
//                             "required": "true"
//                         },
//                         {
//                             "text": "Mudah untuk saya mendapat pekerjaan yang setara dengan kelayakan saya",
//                             "required": "true"
//                         }
//                     ],
//                     "answers": [
//                         {
//                             "text": "Sangat tidak setuju",
//                             "value": "1"
//                         },
//                         {
//                             "text": "Tidak setuju",
//                             "value": "2"
//                         },
//                         {
//                             "text": "Setuju",
//                             "value": "3"
//                         },
//                         {
//                             "text": "Sangat setuju",
//                             "value": "4"
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_24",
//                     "no": "24",
//                     "text": "Berdasarkan pilihan jawapan berikut, yang manakah menggambarkan tentang kecukupan pendapatan anda? (Sila tandakan SATU JAWAPAN sahaja)",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Tidak mencukupi",
//                             "value": "Tidak mencukupi"
//                         },
//                         {
//                             "text": "Cukup untuk keperluan asas sahaja",
//                             "value": "Cukup untuk keperluan asas sahaja"
//                         },
//                         {
//                             "text": "Cukup untuk kebanyakan perkara",
//                             "value": "Cukup untuk kebanyakan perkara"
//                         },
//                         {
//                             "text": "Cukup untuk membeli semua barang dan mampu membuat simpanan",
//                             "value": "Cukup untuk membeli semua barang dan mampu membuat simpanan"
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_25",
//                     "no": "25",
//                     "text": "Apakah yang mendorong anda untuk melanjutkan pelajaran? (Sila tandakan SATU JAWAPAN sahaja)",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Menambah ilmu pengetahuan",
//                             "value": "Menambah ilmu pengetahuan"
//                         },
//                         {
//                             "text": "Peluang mendapat kerja yang lebih baik/ kenaikan pangkat",
//                             "value": "Peluang mendapat kerja yang lebih baik/ kenaikan pangkat"
//                         },
//                         {
//                             "text": "Dorongan rakan-rakan",
//                             "value": "Dorongan rakan-rakan"
//                         },
//                         {
//                             "text": "Dorongan ibu bapa/ ahli keluarga",
//                             "value": "Dorongan ibu bapa/ ahli keluarga"
//                         },
//                         {
//                             "text": "Dorongan guru",
//                             "value": "Dorongan guru"
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text"
//                                 }
//                             ]
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_26",
//                     "no": "26",
//                     "text": "Bagaimanakah anda mendapatkan maklumat berkaitan peluang melanjutkan pelajaran? (Boleh tanda LEBIH daripada SATU JAWAPAN)",
//                     "type": "checkbox",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Internet",
//                             "value": "Internet"
//                         },
//                         {
//                             "text": "Blog",
//                             "value": "Blog"
//                         },
//                         {
//                             "text": "Pameran pendidikan",
//                             "value": "Pameran pendidikan"
//                         },
//                         {
//                             "text": "Ibu bapa/ penjaga ",
//                             "value": "Ibu bapa/ penjaga "
//                         },
//                         {
//                             "text": "Risalah",
//                             "value": "Risalah"
//                         },
//                         {
//                             "text": "Rakan-rakan",
//                             "value": "Rakan-rakan"
//                         },
//                         {
//                             "text": "Surat khabar",
//                             "value": "Surat khabar"
//                         },
//                         {
//                             "text": "Televisyen",
//                             "value": "Televisyen"
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text"
//                                 }
//                             ]
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_27",
//                     "no": "27",
//                     "text": "Berdasarkan penglibatan anda SEKARANG di sekolah/kolej/universiti/dll, sila tandakan pada ruang yang berkenaan",
//                     "type": "multiquestion",
//                     "required": "true",
//                     "questions": [
//                         {
//                             "text": "Saya terlibat secara aktif dalam aktiviti kokurikulum",
//                             "type": "scale",
//                             "required": "true"
//                         },
//                         {
//                             "text": "Aktiviti kokurikulum banyak memberi manfaat kepada saya",
//                             "type": "scale",
//                             "required": "true"
//                         }
//                     ],
//                     "answers": [
//                         {
//                             "text": "Sangat tidak setuju",
//                             "value": "1"
//                         },
//                         {
//                             "text": "Tidak setuju",
//                             "value": "2"
//                         },
//                         {
//                             "text": "Setuju",
//                             "value": "3"
//                         },
//                         {
//                             "text": "Sangat setuju",
//                             "value": "4"
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_28",
//                     "no": "28",
//                     "text": "Sila tandakan peringkat penglibatan tertinggi anda dalam kokurikulum. (Sila tandakan SATU JAWAPAN sahaja)",
//                     "type": "radio",
//                     "required": "true",
//                     "answers": [
//                         {
//                             "text": "Sekolah",
//                             "value": "Sekolah"
//                         },
//                         {
//                             "text": "Daerah",
//                             "value": "Daerah"
//                         },
//                         {
//                             "text": "Negeri",
//                             "value": "Negeri"
//                         },
//                         {
//                             "text": "Negara",
//                             "value": "Negara"
//                         },
//                         {
//                             "text": "Antarabangsa",
//                             "value": "Antarabangsa"
//                         }
//                     ]
//                 },
//                 {
//                     "key": "a_29",
//                     "no": "29",
//                     "text": "Nyatakan tahap penguasaan anda dalam kemahiran berikut mengikut skala yang diberikan",
//                     "type": "multiquestion",
//                     "required": true,
//                     "questions": [
//                         {
//                             "text": "Membaca dalam Bahasa Melayu",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Menulis dalam Bahasa Melayu",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Bertutur dalam Bahasa Melayu",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Memahami maksud apa yang dibaca dalam Bahasa Melayu",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Membaca dalam Bahasa Inggeris",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Menulis dalam Bahasa Inggeris",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Bertutur dalam Bahasa Inggeris",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Memahami maksud apa yang dibaca dalam Bahasa Inggeris",
//                             "type": "scale",
//                             "required": true
//                         },
//                         {
//                             "text": "Mengira",
//                             "type": "scale",
//                             "required": true
//                         }
//                     ],
//                     "answers": [
//                         {
//                             "text": "Tidak menguasai lansung",
//                             "value": 0
//                         },
//                         {
//                             "text": "Kurang baik",
//                             "value": 1
//                         },
//                         {
//                             "text": "Sederhana",
//                             "value": 2
//                         },
//                         {
//                             "text": "Baik",
//                             "value": 3
//                         },
//                         {
//                             "text": "Sangat baik",
//                             "value": 4
//                         }
//                     ]
//                 }
//             ]
//         },
//         {
//             "section_key": "b",
//             "name": "Bahagian B (Literasi Pendidikan)",
//             "fields": 
//             [
//                     {
//                         "key": "b_30a",
//                         "no": "30a",
//                         "text": "Pada masa ini, adakah anda mempunyai masalah untuk menyambung / menamatkan pengajian/ pembelajaran? Sila tandakan [] SATU jawapan sahaja pada ruang yang berkenaan",
//                         "type": "radio",
//                         "required": true,
//                         "answers": [
//                             {
//                                 "text": "Tiada masalah",
//                                 "value": "Tiada masalah"
//                             },
//                             {
//                                 "text": "Masalah menyambung pengajian/pelajaran",
//                                 "value": "Masalah menyambung pengajian/pelajaran"
//                             },
//                             {
//                                 "text": "Masalah menamatkan pengajian/pelajaran",
//                                 "value": "Masalah menamatkan pengajian/pelajaran"
//                             }
//                         ]
//                     },
//                     {
//                         "key": "b_30b",
//                         "no": "30b",
//                         "text": "Bagi jawapan 30 (b) dan (c), sila tandakan [] pada pernyataan di bawah: (Boleh tanda LEBIH daripada SATU JAWAPAN)",
//                         "type": "checkbox",
//                         "required": true,
//                         "hidden_variable": "30a",
//                         "hidden_value": "Tiada masalah",
//                         "answers": [
//                             {
//                                 "text": "Tidak mampu daripada segi kewangan",
//                                 "value": "Tidak mampu daripada segi kewangan"
//                             },
//                             {
//                                 "text": "Diri sendiri (tidak berminat)",
//                                 "value": "Diri sendiri (tidak berminat)"
//                             },
//                             {
//                                 "text": "Masalah keluarga/ibu bapa",
//                                 "value": "Masalah keluarga/ibu bapa"
//                             },
//                             {
//                                 "text": "Rakan sebaya",
//                                 "value": "Rakan sebaya"
//                             },
//                             {
//                                 "text": "Kurang upaya (Fizikal)",
//                                 "value": "Kurang upaya (Fizikal)"
//                             },
//                             {
//                                 "text": "Kemudahan infrastruktur",
//                                 "value": "Kemudahan infrastruktur"
//                             },
//                             {
//                                 "text": "Jarak ke tempat pengajian (cth: jauh)",
//                                 "value": "Jarak ke tempat pengajian (cth: jauh)"
//                             },
//                             {
//                                 "text": "Persekitaran tempat pengajian",
//                                 "value": "Persekitaran tempat pengajian"
//                             },
//                             {
//                                 "text": "Kekangan masa",
//                                 "value": "Kekangan masa"
//                             },
//                             {
//                                 "text": "Perlu bekerja untuk menambah pendapatan keluarga",
//                                 "value": "Perlu bekerja untuk menambah pendapatan keluarga"
//                             },
//                             {
//                                 "text": "Lain-lain",
//                                 "value": "Lain-lain",
//                                 "questions": [
//                                     {
//                                         "text": "Nyatakan",
//                                         "type": "text",
//                                         "required": true
//                                     }
//                                 ]
//                             }
//                         ]
//                     },
//                 {
//                     "key": "b_139",
//                     "no": "139",
//                     "text": "Sila tandakan [] pada ruang yang berkenaan mengikut skala di bawah ini.",
//                     "type": "multistepquestion",
//                     "required": true,
//                     "questions": [
//                         {
//                             "text": "Angkat berat (weight lifting)",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Badminton",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Bola jaring",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Bola keranjang",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Bola sepak",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Street soccer",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Bola tampar",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Futsal",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Boling",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Gimnastik",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Golf",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Hoki",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Kriket",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Lawan pedang",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Lumba basikal",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Memanah",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Menembak",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Olahraga",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Perahu layar",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Ping pong",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Ragbi",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Seni mempertahankan diri",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Sepak Takraw",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Skuasy",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Snooker",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Sukan akuatik (cth: renang dll)",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Sukan berkuda (Equestrian)",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Sukan bermotor",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Sukan tradisional/ rakyat (tarik tali,layang-layang, dll)",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Tenis",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Joging",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Aerobik/ Zumba",
//                             "type": "scale",
//                             "required": true,
//                             "question": {
//                                 "text": "Minit",
//                                 "type": "text",
//                                 "required": true
//                             }
//                         },
//                         {
//                             "text": "Lain-lain",
//                             "value": "Lain-lain",
//                             "questions": [
//                                 {
//                                     "text": "Nyatakan",
//                                     "type": "text",
//                                     "required": true,
//                                     "question": {
//                                         "text": "Minit",
//                                         "type": "text",
//                                         "required": true
//                                     }
//                                 }
//                             ]
//                         }
//                     ]
//                 }
//             ]
//         }
//     ]
// }');
    
