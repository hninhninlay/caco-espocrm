<?php
return (object) [
    'table' => (object) [
        'Lead' => (object) [
            'read' => 'all',
            'stream' => 'all',
            'edit' => 'own',
            'delete' => 'no',
            'create' => 'yes'
        ],
        'User' => (object) [
            'read' => 'own',
            'edit' => 'no'
        ],
        'Team' => (object) [
            'read' => 'team'
        ],
        'Import' => false,
        'Webhook' => false,
        'Currency' => false,
        'Email' => false,
        'EmailAccountScope' => false,
        'EmailTemplate' => false,
        'EmailTemplateCategory' => false,
        'ExternalAccount' => false,
        'Template' => false,
        'Account' => false,
        'Activities' => false,
        'Calendar' => false,
        'Call' => false,
        'Campaign' => false,
        'Case' => false,
        'Contact' => false,
        'Document' => false,
        'DocumentFolder' => false,
        'KnowledgeBaseArticle' => false,
        'KnowledgeBaseCategory' => false,
        'Meeting' => false,
        'Opportunity' => false,
        'TargetList' => false,
        'Task' => false,
        'Note' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'Portal' => (object) [
            'read' => 'all',
            'edit' => 'no',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Attachment' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'EmailAccount' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'EmailFilter' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'EmailFolder' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'Preferences' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Notification' => (object) [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'own',
            'create' => 'no'
        ],
        'ActionHistoryRecord' => (object) [
            'read' => 'no',
            'edit' => 'no',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Role' => false,
        'PortalRole' => false,
        'MassEmail' => false,
        'CampaignLogRecord' => false,
        'CampaignTrackingUrl' => false,
        'EmailQueueItem' => false
    ],
    'fieldTable' => (object) [
        'Currency' => (object) [
            
        ],
        'Email' => (object) [
            
        ],
        'EmailTemplate' => (object) [
            
        ],
        'EmailTemplateCategory' => (object) [
            
        ],
        'ExternalAccount' => (object) [
            
        ],
        'Import' => (object) [
            
        ],
        'Team' => (object) [
            
        ],
        'Template' => (object) [
            
        ],
        'User' => (object) [
            'gender' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'dashboardTemplate' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'password' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'passwordConfirm' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'authMethod' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'apiKey' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'secretKey' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'token' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ]
        ],
        'Webhook' => (object) [
            
        ],
        'Account' => (object) [
            
        ],
        'Call' => (object) [
            
        ],
        'Campaign' => (object) [
            
        ],
        'Case' => (object) [
            
        ],
        'Contact' => (object) [
            
        ],
        'Document' => (object) [
            
        ],
        'DocumentFolder' => (object) [
            
        ],
        'KnowledgeBaseArticle' => (object) [
            
        ],
        'KnowledgeBaseCategory' => (object) [
            
        ],
        'Lead' => (object) [
            
        ],
        'Meeting' => (object) [
            
        ],
        'Opportunity' => (object) [
            
        ],
        'TargetList' => (object) [
            
        ],
        'Task' => (object) [
            
        ],
        'Attachment' => (object) [
            'parent' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ]
        ]
    ],
    'fieldTableQuickAccess' => (object) [
        'Currency' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Email' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'EmailTemplate' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'EmailTemplateCategory' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ExternalAccount' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Import' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Team' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Template' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'User' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'dashboardTemplateId',
                        2 => 'dashboardTemplateName',
                        3 => 'password',
                        4 => 'passwordConfirm',
                        5 => 'authMethod',
                        6 => 'apiKey',
                        7 => 'secretKey',
                        8 => 'token'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'dashboardTemplateId',
                        2 => 'dashboardTemplateName',
                        3 => 'password',
                        4 => 'passwordConfirm',
                        5 => 'authMethod',
                        6 => 'apiKey',
                        7 => 'secretKey',
                        8 => 'token'
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'dashboardTemplate',
                        2 => 'password',
                        3 => 'passwordConfirm',
                        4 => 'authMethod',
                        5 => 'apiKey',
                        6 => 'secretKey',
                        7 => 'token'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'dashboardTemplate',
                        2 => 'password',
                        3 => 'passwordConfirm',
                        4 => 'authMethod',
                        5 => 'apiKey',
                        6 => 'secretKey',
                        7 => 'token'
                    ]
                ]
            ]
        ],
        'Webhook' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Account' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Call' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Campaign' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Case' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Contact' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Document' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'DocumentFolder' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'KnowledgeBaseArticle' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'KnowledgeBaseCategory' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Lead' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Meeting' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Opportunity' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'TargetList' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Task' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Attachment' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parentId',
                        1 => 'parentType',
                        2 => 'parentName'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parentId',
                        1 => 'parentType',
                        2 => 'parentName'
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parent'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parent'
                    ]
                ]
            ]
        ]
    ],
    'assignmentPermission' => 'no',
    'userPermission' => 'no',
    'portalPermission' => 'no',
    'groupEmailAccountPermission' => 'no',
    'exportPermission' => 'no',
    'massUpdatePermission' => 'no',
    'dataPrivacyPermission' => 'no'
];
?>