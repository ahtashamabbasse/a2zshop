<?php
$config=[
        "add_article_rules"=>[
                                [
                                    "field"=>"title",
                                    "label"=>"Title",
                                    "rules"=>"required"
                                ],
                                [
                                    "field"=>"body",
                                    "label"=>"Article Body",
                                    "rules"=>"required"
                                ]
                        ],
        "adminlogin"=>[
                                [
                                    "field"=>"email",
                                    "label"=>"Email",
                                    "rules"=>"required|trim"
                                ],
                                [
                                    "field"=>"pass",
                                    "label"=>"Password",
                                    "rules"=>"required|trim"
                                ]
                        ]

    
]



?>