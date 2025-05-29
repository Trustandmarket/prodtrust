<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/translation' => [[['_route' => 'admin_translation', '_controller' => 'App\\Controller\\Admin\\AdminController::readFileTranslation'], null, null, null, false, false, null]],
        '/admin/writteTranslation' => [[['_route' => 'app_admin_admin_writtefiletranslation', '_controller' => 'App\\Controller\\Admin\\AdminController::writteFileTranslation'], null, null, null, false, false, null]],
        '/admin/menu' => [[['_route' => 'admin_menu', '_controller' => 'App\\Controller\\Admin\\AdminController::menu'], null, null, null, false, false, null]],
        '/admin/sous-menu-brouillon' => [[['_route' => 'admin_sous_menu_brouillon', '_controller' => 'App\\Controller\\Admin\\AdminController::sousMenuBrouillon'], null, null, null, false, false, null]],
        '/admin/sous-menu-trash' => [[['_route' => 'admin_sous_menu_trash', '_controller' => 'App\\Controller\\Admin\\AdminController::sousMenuTrash'], null, null, null, false, false, null]],
        '/admin/update_page' => [[['_route' => 'admin_update_page', '_controller' => 'App\\Controller\\Admin\\AdminController::updatePage'], null, null, null, false, false, null]],
        '/admin/update_menu' => [[['_route' => 'admin_update_menu', '_controller' => 'App\\Controller\\Admin\\AdminController::updateMenu'], null, null, null, false, false, null]],
        '/admin/update_category' => [[['_route' => 'app_admin_admin_updatecategorie', '_controller' => 'App\\Controller\\Admin\\AdminController::updateCategorie'], null, null, null, false, false, null]],
        '/admin/delete_post' => [[['_route' => 'admin_delete_post', '_controller' => 'App\\Controller\\Admin\\AdminController::deletePost'], null, null, null, false, false, null]],
        '/admin/delete_post_definitely' => [[['_route' => 'post_delete_get', '_controller' => 'App\\Controller\\Admin\\AdminController::deletePostDef'], null, ['GET' => 0], null, false, false, null]],
        '/admin/delete_categorie' => [[['_route' => 'admin_delete_categorie', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteCategorie'], null, null, null, false, false, null]],
        '/admin/delete_sub_categorie' => [[['_route' => 'admin_delete_sub_categorie', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteSubCategorie'], null, null, null, false, false, null]],
        '/admin/new_categorie' => [[['_route' => 'admin_new_categorie', '_controller' => 'App\\Controller\\Admin\\AdminController::newCategorie'], null, null, null, false, false, null]],
        '/admin/new_prestation_type' => [[['_route' => 'admin_new_prestation_type', '_controller' => 'App\\Controller\\Admin\\AdminController::newPrestationType'], null, null, null, false, false, null]],
        '/categorie/editer' => [[['_route' => 'category_edit_post', '_controller' => 'App\\Controller\\Admin\\AdminController::category_edit_post'], null, ['POST' => 0], null, false, false, null]],
        '/admin/new_menu' => [[['_route' => 'admin_new_menu', '_controller' => 'App\\Controller\\Admin\\AdminController::newMenu'], null, null, null, false, false, null]],
        '/new_page' => [[['_route' => 'app_admin_admin_newpage', '_controller' => 'App\\Controller\\Admin\\AdminController::newPage'], null, null, null, false, false, null]],
        '/admin/submit_page' => [[['_route' => 'admin_submit_page', '_controller' => 'App\\Controller\\Admin\\AdminController::submitPage'], null, null, null, false, false, null]],
        '/admin/login_register' => [[['_route' => 'admin_login_register', '_controller' => 'App\\Controller\\Admin\\AdminController::login_register'], null, null, null, false, false, null]],
        '/admin/recaptcha' => [[['_route' => 'admin_get_recaptcha', '_controller' => 'App\\Controller\\Admin\\AdminController::get_recaptcha'], null, null, null, false, false, null]],
        '/admin/recaptcha/post' => [[['_route' => 'post_recaptcha', '_controller' => 'App\\Controller\\Admin\\AdminController::post_recaptcha'], null, null, null, false, false, null]],
        '/admin/youtube' => [[['_route' => 'admin_get_youtube', '_controller' => 'App\\Controller\\Admin\\AdminController::get_youtube'], null, null, null, false, false, null]],
        '/admin/youtube/post' => [[['_route' => 'post_youtube', '_controller' => 'App\\Controller\\Admin\\AdminController::post_youtube'], null, null, null, false, false, null]],
        '/admin/recherche-vide/message' => [[['_route' => 'admin_get_empty_request_message', '_controller' => 'App\\Controller\\Admin\\AdminController::get_empty_request_message'], null, null, null, false, false, null]],
        '/admin/recherche-vide-nom-commercial/message' => [[['_route' => 'admin_get_empty_request_nom_commercial_message', '_controller' => 'App\\Controller\\Admin\\AdminController::admin_get_empty_request_nom_commercial_message'], null, null, null, false, false, null]],
        '/admin/recherche-vide/message/post' => [[['_route' => 'post_get_empty_request_message', '_controller' => 'App\\Controller\\Admin\\AdminController::post_get_empty_request_message'], null, null, null, false, false, null]],
        '/infos-bulle' => [[['_route' => 'get_infos_bulle', '_controller' => 'App\\Controller\\Admin\\AdminController::get_infos_bulle'], null, null, null, false, false, null]],
        '/calendar-infos-bulle' => [[['_route' => 'get_calendar_infos_bulle', '_controller' => 'App\\Controller\\Admin\\AdminController::get_calendar_infos_bulle'], null, null, null, false, false, null]],
        '/infos-bulle/post' => [[['_route' => 'post_infos_bulle', '_controller' => 'App\\Controller\\Admin\\AdminController::post_infos_bulle'], null, null, null, false, false, null]],
        '/calendar-infos-bulle/post' => [[['_route' => 'post_calendar_infos_bulle', '_controller' => 'App\\Controller\\Admin\\AdminController::post_calendar_infos_bulle'], null, null, null, false, false, null]],
        '/admin/slider' => [[['_route' => 'admin_slider', '_controller' => 'App\\Controller\\Admin\\AdminController::slider'], null, null, null, false, false, null]],
        '/all_prestation_type' => [[['_route' => 'app_admin_admin_all_prestation_type', '_controller' => 'App\\Controller\\Admin\\AdminController::all_prestation_type'], null, null, null, false, false, null]],
        '/admin/meta/delete' => [[['_route' => 'admin_meta_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteMeta'], null, null, null, false, false, null]],
        '/handle_category_product' => [[['_route' => 'handle_category_product', '_controller' => 'App\\Controller\\Admin\\AdminController::handle_category_product'], null, null, null, false, false, null]],
        '/add_image_home' => [[['_route' => 'add_image_home', '_controller' => 'App\\Controller\\Admin\\AdminController::submitImageHome'], null, null, null, false, false, null]],
        '/admin/slogan_homepage' => [[['_route' => 'slogan_homepage', '_controller' => 'App\\Controller\\Admin\\AdminController::slogan_homepage'], null, null, null, false, false, null]],
        '/admin/encart_homepage' => [[['_route' => 'encart_homepage', '_controller' => 'App\\Controller\\Admin\\AdminController::encartHomepage'], null, null, null, false, false, null]],
        '/admin/date_annonce' => [[['_route' => 'admin_date_annonce', '_controller' => 'App\\Controller\\Admin\\AdminController::dateAnnonce'], null, null, null, false, false, null]],
        '/admin/date_annonce1' => [[['_route' => 'admin_date_annonce1', '_controller' => 'App\\Controller\\Admin\\AdminController::dateAnnonce1'], null, null, null, false, false, null]],
        '/admin/admin_delete_service' => [[['_route' => 'admin_delete_service', '_controller' => 'App\\Controller\\Admin\\AdminController::adminDeleteService'], null, null, null, false, false, null]],
        '/admin/admin_add_service' => [[['_route' => 'admin_add_service', '_controller' => 'App\\Controller\\Admin\\AdminController::adminAddService'], null, null, null, false, false, null]],
        '/admin/admin_edit_commande' => [[['_route' => 'admin_edit_commande', '_controller' => 'App\\Controller\\Admin\\AdminController::adminupdatePost'], null, null, null, false, false, null]],
        '/admin/admin_update_user' => [[['_route' => 'admin_update_user', '_controller' => 'App\\Controller\\Admin\\AdminController::updateUserData'], null, null, null, false, false, null]],
        '/marketing/update_actualite' => [[['_route' => 'marketing_actualite_update', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_update_actualite'], null, ['POST' => 0], null, false, false, null]],
        '/marketing/create_actualite' => [[['_route' => 'marketing_actualite_create', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_create_actualite'], null, ['POST' => 0], null, false, false, null]],
        '/marketing/create_ops_speciales' => [[['_route' => 'marketing_ops_speciales_create', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_create_ops_speciales'], null, ['POST' => 0], null, false, false, null]],
        '/marketing/edit_ops_speciales' => [[['_route' => 'marketing_ops_speciales_edit', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_edit_ops_speciales'], null, ['POST' => 0], null, false, false, null]],
        '/marketing/create_ops_speciales/add_announce' => [[['_route' => 'marketing_ops_speciales_add_announce', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_ops_speciales_add_announce'], null, ['POST' => 0], null, false, false, null]],
        '/marketing/create_promo_com' => [[['_route' => 'marketing_promo_com_create', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_create_promo_com'], null, ['POST' => 0], null, false, false, null]],
        '/marketing/edit_promo_com' => [[['_route' => 'marketing_promo_com_edit', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_edit_promo_com'], null, ['POST' => 0], null, false, false, null]],
        '/marketing/create_promo_com/add_announce' => [[['_route' => 'marketing_promo_com_add_announce', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_promo_com_add_announce'], null, ['POST' => 0], null, false, false, null]],
        '/parcours_utilisateur/experience/update' => [[['_route' => 'parcours_utilisateur_experiences_update', '_controller' => 'App\\Controller\\Admin\\ParcoursUtilisateur\\ParcoursUtilisateurController::experience_update_actualite'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/delete-stripe-id' => [[['_route' => 'admin_user_delete_stripe_id', '_controller' => 'App\\Controller\\Admin\\UserCrudController::deleteStripeId'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/registration/confirmation_email' => [[['_route' => 'app_registration_confirmation_email', '_controller' => 'App\\Controller\\RegistrationController::appRegistrationConfirmationEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)/(?'
                    .'|a(?'
                        .'|bonnement(?'
                            .'|(?:/(\\d+))?(*:47)'
                            .'|/(?'
                                .'|factur(?'
                                    .'|e/(\\d+)(*:74)'
                                    .'|ation/create(?'
                                        .'|(*:96)'
                                        .'|_update(*:110)'
                                    .')'
                                .')'
                                .'|mise\\-a\\-jour/downgrade(*:143)'
                                .'|pricing_data(*:163)'
                                .'|create_(?'
                                    .'|card(*:185)'
                                    .'|recurring_payment(*:210)'
                                .')'
                                .'|update_card(*:230)'
                            .')'
                        .')'
                        .'|dmin/user/create_account(*:264)'
                    .')'
                    .'|server\\-action/renew\\-recurring\\-payment(*:313)'
                .')'
                .'|/categorie/editer/([^/]++)(*:348)'
                .'|/([^/]++)/admin(?'
                    .'|/(?'
                        .'|re(?'
                            .'|cherche_element(*:398)'
                            .'|ject_ref_request(*:422)'
                        .')'
                        .'|sous_categorie(*:445)'
                        .'|up(?'
                            .'|load(*:462)'
                            .'|dateUpload(*:480)'
                        .')'
                        .'|a(?'
                            .'|dmin_(?'
                                .'|create_post(*:512)'
                                .'|edit_post(*:529)'
                            .')'
                            .'|ccept_ref_request(*:555)'
                        .')'
                        .'|new_(?'
                            .'|critere_type(*:583)'
                            .'|delivery_type(*:604)'
                        .')'
                    .')'
                    .'|(*:614)'
                .')'
                .'|/(fr)/admin/new_critere_free_op(*:654)'
                .'|/marketing/all_actualite/([^/]++)(*:695)'
                .'|/([^/]++)/admin/(?'
                    .'|leads_gen/(?'
                        .'|create(*:741)'
                        .'|edit(*:753)'
                        .'|add_announce(*:773)'
                    .')'
                    .'|parcours_utilisateur/univers_trust/create(*:823)'
                .')'
                .'|/(fr)/admin/parcours_utilisateur/univers_trust/details/([^/]++)(*:895)'
                .'|/([^/]++)/admin/parcours_utilisateur/univers_trust/update(*:960)'
                .'|/(fr)/a(?'
                    .'|dmin/parcours_utilisateur/experiences/details/([^/]++)(*:1032)'
                    .'|nnonces/(?'
                        .'|liste(*:1057)'
                        .'|commercial/liste(*:1082)'
                    .')'
                .')'
                .'|/get/sous\\-categorie/xhr/(fr)(*:1122)'
                .'|/filtre/recherche/xhr/(fr)(*:1157)'
                .'|/(fr)/(?'
                    .'|annonces/(?'
                        .'|details/(.{8,300}?)(*:1206)'
                        .'|favoris(*:1222)'
                        .'|rupture/(.{8,300}?)(*:1250)'
                    .')'
                    .'|devis/details/([^/]++)(*:1282)'
                .')'
                .'|/annonces/(?'
                    .'|delete/([^/]++)/(fr)(*:1325)'
                    .'|change/moderation/([^/]++)/(fr)(*:1365)'
                .')'
                .'|/(fr)/annonces/panier(?'
                    .'|(*:1399)'
                    .'|/nombre(*:1415)'
                .')'
                .'|/annonce(?'
                    .'|/userComment/(fr)(*:1453)'
                    .'|s/(?'
                        .'|add_panier/(fr)(*:1482)'
                        .'|deleteItem/(fr)(*:1506)'
                    .')'
                .')'
                .'|/(fr)/(?'
                    .'|annonces/wishlist/add(*:1547)'
                    .'|blog(?'
                        .'|(*:1563)'
                        .'|/([^/]++)(*:1581)'
                    .')'
                .')'
                .'|/blog/details/ajout(?'
                    .'|er\\-commentaires/(fr)/([^/]++)(*:1644)'
                    .'|\\-rapide\\-commentaires/(fr)(*:1680)'
                .')'
                .'|/(fr)/chat(?'
                    .'|/(?'
                        .'|get/channel(?'
                            .'|/messages(*:1730)'
                            .'|s/xhr(*:1744)'
                        .')'
                        .'|mark/readed/message/xhr(*:1777)'
                        .'|i/have/new/messages/xhr(*:1809)'
                        .'|send/message(?'
                            .'|/to/not/connected/user/xhr(*:1859)'
                            .'|(*:1868)'
                        .')'
                    .')'
                    .'|(*:1879)'
                .')'
                .'|/([^/]++)/(?'
                    .'|devis(*:1907)'
                    .'|profil\\-utilisateur/devis/(?'
                        .'|ajouter_devis(*:1958)'
                        .'|editer\\-devis/([^/]++)(*:1989)'
                        .'|([^/]++)(*:2006)'
                    .')'
                .')'
                .'|/profil\\-utilisateur/([^/]++)/devis/(?'
                    .'|annuler\\-devis/([^/]++)(*:2079)'
                    .'|details/([^/]++)(*:2104)'
                .')'
                .'|/([^/]++)/devis(*:2129)'
                .'|/(fr)/(?'
                    .'|a(?'
                        .'|\\-propos/nous\\-contacter(*:2175)'
                        .'|ide/envoyez\\-nous\\-vos\\-commentaires(*:2220)'
                    .')'
                    .'|e(?'
                        .'|nvoyez\\-nous\\-vos\\-commentaires/email(*:2271)'
                        .'|xperience/experience\\-front/details/([^/]++)(*:2324)'
                    .')'
                    .'|feedbacks/email(*:2349)'
                    .'|creer\\-une\\-experience/(?'
                        .'|demarrer(*:2392)'
                        .'|lancez\\-vous(*:2413)'
                        .'|create(*:2428)'
                        .'|update(*:2443)'
                        .'|editer/([^/]++)(*:2467)'
                    .')'
                    .'|profil\\-utilisateur/experiences(*:2508)'
                .')'
                .'|/([^/]++)/profil\\-utilisateur/experiences/delete(*:2566)'
                .'|/(fr)(?'
                    .'|(*:2583)'
                    .'|/(?'
                        .'|(aide|nos-conditions|a-propos)/([^/]++)(*:2635)'
                        .'|((?:(?!connexion|login|creer-un-compte|register|votre-projet|contactez-nous|envoyez-nous-vos-commentaires|login_check|logout|confirmation_email|confirm|confirmed|request|reset|lostpassword_confirmation_email|send-email|change-password|blog|annonces|paiement|utilisateur|chat|admin|dashboard|devenir-pro|profil|devis|recherche|photographes|videastes|studio-audio|musiciens|chorales|studio-de-tournage|studio-photo-video|evenementiels|sitemap.xml|operations-speciales|promo-et-com|leads-gen|univers-trust|creer-une-experience|operations|annonces|newsletter|souscription|abonnement|server-action).)*)(*:3241)'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|home/sous_categorie(?'
                        .'|(*:3287)'
                        .'|1(*:3297)'
                    .')'
                    .'|recherche(?'
                        .'|(*:3319)'
                        .'|\\-user(*:3334)'
                    .')'
                .')'
                .'|/(fr)/updateProfil(*:3363)'
                .'|/likes/([^/]++)(*:3387)'
                .'|/unlike/([^/]++)(*:3412)'
                .'|/(fr)/(?'
                    .'|operations\\-speciales/([^/]++)(*:3460)'
                    .'|promo\\-et\\-com/([^/]++)(*:3492)'
                    .'|leads\\-gen/([^/]++)(*:3520)'
                .')'
                .'|/([^/]++)/leads\\-gen/email/send(*:3561)'
                .'|/(fr)/univers\\-trust/([^/]++)(*:3599)'
                .'|/([^/]++)/newsletter(?'
                    .'|(*:3631)'
                    .'|/inscription\\-reussie(*:3661)'
                .')'
                .'|/(fr)/newsletter/ajouter(*:3695)'
                .'|/paiement/(?'
                    .'|(fr)(*:3721)'
                    .'|commande/(?'
                        .'|(fr)(*:3746)'
                        .'|annuler/(fr)/([^/]++)/([^/]++)(*:3785)'
                    .')'
                .')'
                .'|/(fr)/profil\\-utilisateur/(?'
                    .'|de(?'
                        .'|tails/([^/]++)(*:3844)'
                        .'|lete(?'
                            .'|_(?'
                                .'|portfolio(*:3873)'
                                .'|video(*:3887)'
                            .')'
                            .'|ImagesSecondaires/([^/]++)/([^/]++)(*:3932)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|rofil(?'
                            .'|\\-abonne(*:3963)'
                            .'|(*:3972)'
                        .')'
                        .'|ortfolio(*:3990)'
                    .')'
                    .'|updateProfil(*:4012)'
                .')'
                .'|/profil\\-utilisateur/(fr)/sous_categorie/([^/]++)(*:4071)'
                .'|/(fr)/profil\\-utilisateur/(?'
                    .'|fournisseurs(*:4121)'
                    .'|abonne/fournisseurs(*:4149)'
                    .'|devenir\\-pro(*:4170)'
                .')'
                .'|/profil\\-utilisateur/(fr)/(?'
                    .'|add_date(*:4217)'
                    .'|updateBankingProfileData(*:4250)'
                .')'
                .'|/(fr)/profil\\-utilisateur/(?'
                    .'|d(?'
                        .'|eleteDraft/([^/]++)(*:4312)'
                        .'|ashboard(*:4329)'
                    .')'
                    .'|cancelReservation/([^/]++)(*:4365)'
                    .'|update/billing(*:4388)'
                    .'|parametres(*:4407)'
                    .'|abonne/parametres(*:4433)'
                .')'
                .'|/profil\\-utilisateur/(fr)/update/user(?'
                    .'|Notification(*:4495)'
                    .'|Password(*:4512)'
                .')'
                .'|/(fr)/profil\\-utilisateur/(?'
                    .'|comments(*:4559)'
                    .'|annonces(?'
                        .'|/(?'
                            .'|publier\\-annonce(*:4599)'
                            .'|editer\\-annonce/([^/]++)(*:4632)'
                        .')'
                        .'|(*:4642)'
                    .')'
                .')'
                .'|/profil\\-utilisateur/(fr)/annonces/([^/]++)(*:4696)'
                .'|/(en|fr)/profil\\-utilisateur/annoncesPagine(*:4748)'
                .'|/(fr)/profil\\-utilisateur/reservations(*:4795)'
                .'|/profil\\-utilisateur/(fr)/(?'
                    .'|annonces/(?'
                        .'|publier_annonce(*:4860)'
                        .'|editer_annonce(*:4883)'
                    .')'
                    .'|delete_profil(?'
                        .'|/([^/]++)(*:4918)'
                        .'|_all/([^/]++)(*:4940)'
                    .')'
                .')'
                .'|/(fr)/votre\\-projet(*:4970)'
                .'|/([^/]++)/(?'
                    .'|creer\\-un\\-compte(*:5009)'
                    .'|register(*:5026)'
                .')'
                .'|/reset\\-password/([^/]++)/(?'
                    .'|check\\-email(*:5077)'
                    .'|reset(?:/([^/]++))?(*:5105)'
                .')'
                .'|/([^/]++)/(?'
                    .'|connexion(*:5137)'
                    .'|login(*:5151)'
                    .'|souscription(?'
                        .'|(*:5175)'
                        .'|/offre_payante(*:5198)'
                    .')'
                .')'
                .'|/(fr)/admin(*:5220)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'app_abonnement', 'page' => 1, '_controller' => 'App\\Controller\\AbonnementController::index'], ['_locale', 'page'], null, null, false, true, null]],
        74 => [[['_route' => 'app_abonnement_facture', '_controller' => 'App\\Controller\\AbonnementController::app_abonnement_facture'], ['_locale', 'abonnement'], null, null, false, true, null]],
        96 => [[['_route' => 'app_abonnement_facturation_create', '_controller' => 'App\\Controller\\AbonnementController::createFacturation'], ['_locale'], ['POST' => 0], null, false, false, null]],
        110 => [[['_route' => 'app_abonnement_facturation_update', '_controller' => 'App\\Controller\\AbonnementController::createUpdateFacturation'], ['_locale'], ['POST' => 0], null, false, false, null]],
        143 => [[['_route' => 'app_abonnement_update_downgrade', '_controller' => 'App\\Controller\\AbonnementController::update'], ['_locale'], ['POST' => 0], null, false, false, null]],
        163 => [[['_route' => 'app_abonnement_pricing_data', '_controller' => 'App\\Controller\\AbonnementController::abonnementPricingData'], ['_locale'], ['POST' => 0], null, false, false, null]],
        185 => [[['_route' => 'app_abonnement_create_card', '_controller' => 'App\\Controller\\AbonnementController::abonnementCreateCard'], ['_locale'], ['POST' => 0], null, false, false, null]],
        210 => [[['_route' => 'app_abonnement_create_recurring_payment', '_controller' => 'App\\Controller\\AbonnementController::createRecurringPayment'], ['_locale'], ['POST' => 0], null, false, false, null]],
        230 => [[['_route' => 'app_abonnement_update_card', '_controller' => 'App\\Controller\\AbonnementController::abonnementUpdateCard'], ['_locale'], ['POST' => 0], null, false, false, null]],
        264 => [[['_route' => 'app_admin_create_account', '_controller' => 'App\\Controller\\Admin\\AdminController::submitUser'], ['_locale'], null, null, false, false, null]],
        313 => [[['_route' => 'app_abonnement_renew_recurring_payment', '_controller' => 'App\\Controller\\AbonnementController::renewRecurringPayinMit'], ['_locale'], ['GET' => 0], null, false, false, null]],
        348 => [[['_route' => 'category_edit_get', '_controller' => 'App\\Controller\\Admin\\AdminController::category_edit_get'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'recherche_element_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminController::recherche_element_dashboard'], ['_locale'], null, null, false, false, null]],
        422 => [[['_route' => 'admin_reject_ref_request', '_controller' => 'App\\Controller\\Admin\\Livraisons\\LivraisonController::reject_ref_request'], ['_locale'], null, null, false, false, null]],
        445 => [[['_route' => 'admin_sous_categorie', '_controller' => 'App\\Controller\\Admin\\Articles\\ArticleController::sousCategorie'], ['_locale'], null, null, false, false, null]],
        462 => [[['_route' => 'upload', '_controller' => 'App\\Controller\\Admin\\Articles\\ArticleController::uploads'], ['_locale'], null, null, false, false, null]],
        480 => [[['_route' => 'update_upload', '_controller' => 'App\\Controller\\Admin\\Articles\\ArticleController::updateUpload'], ['_locale'], null, null, false, false, null]],
        512 => [[['_route' => 'admin_create_post', '_controller' => 'App\\Controller\\Admin\\Articles\\ArticleController::submitAnnonce'], ['_locale'], null, null, false, false, null]],
        529 => [[['_route' => 'admin_edit_post', '_controller' => 'App\\Controller\\Admin\\Articles\\ArticleController::updateAnnonce'], ['_locale'], null, null, false, false, null]],
        555 => [[['_route' => 'admin_accept_ref_request', '_controller' => 'App\\Controller\\Admin\\Livraisons\\LivraisonController::accept_ref_request'], ['_locale'], null, null, false, false, null]],
        583 => [[['_route' => 'admin_new_critere_type', '_controller' => 'App\\Controller\\Admin\\Livraisons\\LivraisonController::newCritereType'], ['_locale'], null, null, false, false, null]],
        604 => [[['_route' => 'admin_new_delivery_type', '_controller' => 'App\\Controller\\Admin\\Livraisons\\LivraisonController::newDeliveryType'], ['_locale'], null, null, false, false, null]],
        614 => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::dashboard'], ['_locale'], null, null, false, false, null]],
        654 => [[['_route' => 'admin_livraison_new_critere_free_op', '_controller' => 'App\\Controller\\Admin\\Livraisons\\LivraisonController::newCritereFreeOp'], ['_locale'], ['POST' => 0], null, false, false, null]],
        695 => [[['_route' => 'marketing_actualite_list', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::all_actualite'], ['etat'], null, null, false, true, null]],
        741 => [[['_route' => 'marketing_leads_gen_create', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_create_leads_gen'], ['_locale'], ['POST' => 0], null, false, false, null]],
        753 => [[['_route' => 'marketing_leads_gen_edit', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_edit_leads_gen'], ['_locale'], ['POST' => 0], null, false, false, null]],
        773 => [[['_route' => 'marketing_leads_gen_add_announce', '_controller' => 'App\\Controller\\Admin\\Marketing\\MarketingController::marketing_leads_gen_add_announce'], ['_locale'], ['POST' => 0], null, false, false, null]],
        823 => [[['_route' => 'parcours_utilisateur_univers_create', '_controller' => 'App\\Controller\\Admin\\ParcoursUtilisateur\\ParcoursUtilisateurController::parcours_utilisateur_univers_create'], ['_locale'], ['POST' => 0], null, false, false, null]],
        895 => [[['_route' => 'parcours_utilisateur_univers_details', '_controller' => 'App\\Controller\\Admin\\ParcoursUtilisateur\\ParcoursUtilisateurController::parcours_utilisateur_univers_details'], ['_locale', 'id'], null, null, false, true, null]],
        960 => [[['_route' => 'parcours_utilisateur_univers_update', '_controller' => 'App\\Controller\\Admin\\ParcoursUtilisateur\\ParcoursUtilisateurController::parcours_utilisateur_univers_update'], ['_locale'], ['POST' => 0], null, false, false, null]],
        1032 => [[['_route' => 'parcours_utilisateur_experience_details', '_controller' => 'App\\Controller\\Admin\\ParcoursUtilisateur\\ParcoursUtilisateurController::parcours_utilisateur_experience_details'], ['_locale', 'id'], null, null, false, true, null]],
        1057 => [[['_route' => 'annonces_listeAnnonces', '_controller' => 'App\\Controller\\AnnoncesController::liste'], ['_locale'], null, null, false, false, null]],
        1082 => [[['_route' => 'annonces_listeAnnoncesCommercial', '_controller' => 'App\\Controller\\AnnoncesController::listeAnnoncesCommercial'], ['_locale'], null, null, false, false, null]],
        1122 => [[['_route' => 'annonces_get_sous_categories_xhr', '_controller' => 'App\\Controller\\AnnoncesController::get_sous_categories_xhr'], ['_locale'], null, null, false, true, null]],
        1157 => [[['_route' => 'annonces_filtre_recherche_xhr', '_controller' => 'App\\Controller\\AnnoncesController::filtre_recherche_xhr'], ['_locale'], null, null, false, true, null]],
        1206 => [[['_route' => 'annonces_detailsAnnonce', '_controller' => 'App\\Controller\\AnnoncesController::details'], ['_locale', 'id'], null, null, false, true, null]],
        1222 => [[['_route' => 'annonces_favoris', '_controller' => 'App\\Controller\\AnnoncesController::favoris'], ['_locale'], null, null, false, false, null]],
        1250 => [[['_route' => 'annonces_rupture', '_controller' => 'App\\Controller\\AnnoncesController::rupture'], ['_locale', 'slug'], null, null, false, true, null]],
        1282 => [[['_route' => 'annonces_detailsDevis', '_controller' => 'App\\Controller\\AnnoncesController::detailsDevis'], ['_locale', 'id'], null, null, false, true, null]],
        1325 => [[['_route' => 'annonces_deleteAnnounce', '_controller' => 'App\\Controller\\AnnoncesController::deleteAnnounce'], ['id', '_locale'], null, null, false, true, null]],
        1365 => [[['_route' => 'annonces_change_status', '_controller' => 'App\\Controller\\AnnoncesController::change_status'], ['tag', '_locale'], null, null, false, true, null]],
        1399 => [[['_route' => 'annonces_panier_user', '_controller' => 'App\\Controller\\AnnoncesController::gerer_panier'], ['_locale'], null, null, false, false, null]],
        1415 => [[['_route' => 'annonces_panier_user_number', '_controller' => 'App\\Controller\\AnnoncesController::getPanierNumber'], ['_locale'], null, null, false, false, null]],
        1453 => [[['_route' => 'annonces_addAnnounceComment', '_controller' => 'App\\Controller\\AnnoncesController::userNotificationData'], ['_locale'], null, null, false, true, null]],
        1482 => [[['_route' => 'annonces_panier', '_controller' => 'App\\Controller\\AnnoncesController::ajouterAnnoncePanier'], ['_locale'], null, null, true, true, null]],
        1506 => [[['_route' => 'annonces_deleteitem', '_controller' => 'App\\Controller\\AnnoncesController::deleteItemInCart'], ['_locale'], null, null, true, true, null]],
        1547 => [[['_route' => 'annonces_add_remove_to_user_wishlist', '_controller' => 'App\\Controller\\AnnoncesController::add_to_user_wishlist'], ['_locale'], null, null, false, false, null]],
        1563 => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'], ['_locale'], null, null, false, false, null]],
        1581 => [[['_route' => 'blog_details_postBlog', '_controller' => 'App\\Controller\\BlogController::details'], ['_locale', 'slug'], null, null, false, true, null]],
        1644 => [[['_route' => 'blog_addComment', '_controller' => 'App\\Controller\\BlogController::addComment'], ['_locale', 'id'], null, null, false, true, null]],
        1680 => [[['_route' => 'blog_rapid_add_Comment', '_controller' => 'App\\Controller\\BlogController::rapidAddComment'], ['_locale'], null, null, false, true, null]],
        1730 => [[['_route' => 'chat_get_channel_messages', '_controller' => 'App\\Controller\\ChatController::getChannelMessages'], ['_locale'], null, null, false, false, null]],
        1744 => [[['_route' => 'chat_get_all_channels_xhr', '_controller' => 'App\\Controller\\ChatController::getAllChannels'], ['_locale'], null, null, false, false, null]],
        1777 => [[['_route' => 'chat_mark_as_read_xhr', '_controller' => 'App\\Controller\\ChatController::MarkAsReadMessages'], ['_locale'], null, null, false, false, null]],
        1809 => [[['_route' => 'chat_i_have_new_messages_xhr', '_controller' => 'App\\Controller\\ChatController::iHaveNewMessages'], ['_locale'], null, null, false, false, null]],
        1859 => [[['_route' => 'chat_send_message_to_not_connected_user_xhr', '_controller' => 'App\\Controller\\ChatController::sendMessageToNotConnectedUser'], ['_locale'], null, null, false, false, null]],
        1868 => [[['_route' => 'chat_send_message', '_controller' => 'App\\Controller\\ChatController::sendMessage'], ['_locale'], null, null, false, false, null]],
        1879 => [[['_route' => 'chat_chat', '_controller' => 'App\\Controller\\ChatController::index'], ['_locale'], null, null, false, false, null]],
        1907 => [[['_route' => 'devis_devis', '_controller' => 'App\\Controller\\DevisController::index'], ['_locale'], null, null, false, false, null]],
        1958 => [[['_route' => 'devis_ajouter_devis', '_controller' => 'App\\Controller\\DevisController::ajouterDevis'], ['_locale'], ['POST' => 0], null, false, false, null]],
        1989 => [[['_route' => 'devis_EditDraftDevis', '_controller' => 'App\\Controller\\DevisController::EditDraftAnnounce'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2006 => [[['_route' => 'devis_devisTag', '_controller' => 'App\\Controller\\DevisController::mesannoncesTag'], ['_locale', 'tag'], ['GET' => 0], null, false, true, null]],
        2079 => [[['_route' => 'devis_annulerDevis', '_controller' => 'App\\Controller\\DevisController::annulerDevis'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2104 => [[['_route' => 'devis_detailsDevis', '_controller' => 'App\\Controller\\DevisController::detailsDevis'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2129 => [[['_route' => 'devis_payment_devis', '_controller' => 'App\\Controller\\DevisController::devisPayment'], ['_locale'], ['POST' => 0], null, true, false, null]],
        2175 => [[['_route' => 'experience_index', '_controller' => 'App\\Controller\\ExperienceController::index'], ['_locale'], null, null, false, false, null]],
        2220 => [[['_route' => 'experience_envoyez_commentaires', '_controller' => 'App\\Controller\\ExperienceController::envoyez_commentaires'], ['_locale'], null, null, false, false, null]],
        2271 => [[['_route' => 'experience_sendComment', '_controller' => 'App\\Controller\\ExperienceController::sendCommentsEmails'], ['_locale'], null, null, false, false, null]],
        2324 => [[['_route' => 'experiences_details_experience', '_controller' => 'App\\Controller\\ExperiencesController::detailsExperience'], ['_locale', 'id'], null, null, false, true, null]],
        2349 => [[['_route' => 'experience_sendFeedbacks', '_controller' => 'App\\Controller\\ExperienceController::feedbacks'], ['_locale'], null, null, false, false, null]],
        2392 => [[['_route' => 'experiences_index', '_controller' => 'App\\Controller\\ExperiencesController::index'], ['_locale'], null, null, false, false, null]],
        2413 => [[['_route' => 'experiences_creer_experience', '_controller' => 'App\\Controller\\ExperiencesController::creerExperience'], ['_locale'], null, null, false, false, null]],
        2428 => [[['_route' => 'experiences_create_experience', '_controller' => 'App\\Controller\\ExperiencesController::submitExperience'], ['_locale'], ['POST' => 0], null, false, false, null]],
        2443 => [[['_route' => 'experiences_update_experience', '_controller' => 'App\\Controller\\ExperiencesController::updateExperience'], ['_locale'], ['POST' => 0], null, false, false, null]],
        2467 => [[['_route' => 'experiences_edit_experience', '_controller' => 'App\\Controller\\ExperiencesController::editExperience'], ['_locale', 'id'], null, null, false, true, null]],
        2508 => [[['_route' => 'experiences_liste_experience', '_controller' => 'App\\Controller\\ExperiencesController::listeExperience'], ['_locale'], null, null, false, false, null]],
        2566 => [[['_route' => 'experiences_post_delete_get', '_controller' => 'App\\Controller\\ExperiencesController::deletePostDef'], ['_locale'], ['GET' => 0], null, false, false, null]],
        2583 => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::accueil'], ['_locale'], null, null, false, true, null]],
        2635 => [[['_route' => 'page_navigation', '_controller' => 'App\\Controller\\HomeController::page_navigation'], ['_locale', 'idPage', 'id'], null, null, false, true, null]],
        3241 => [[['_route' => 'site_navigation', '_controller' => 'App\\Controller\\HomeController::nos_prestations_page'], ['_locale', 'navigation'], null, null, false, true, null]],
        3287 => [[['_route' => 'sous_categorie', '_controller' => 'App\\Controller\\HomeController::sousCategorie'], ['_locale'], null, null, false, false, null]],
        3297 => [[['_route' => 'sous_categorie1', '_controller' => 'App\\Controller\\HomeController::sousCategorie1'], ['_locale'], null, null, false, false, null]],
        3319 => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\HomeController::recherche'], ['_locale'], null, null, false, false, null]],
        3334 => [[['_route' => 'recherche-user', '_controller' => 'App\\Controller\\HomeController::recherche_user'], ['_locale'], null, null, false, false, null]],
        3363 => [[['_route' => 'updateProfileAbonne', '_controller' => 'App\\Controller\\HomeController::updateUserData'], ['_locale'], null, null, false, false, null]],
        3387 => [[['_route' => 'likes_like', '_controller' => 'App\\Controller\\LikesController::like'], ['id'], null, null, false, true, null]],
        3412 => [[['_route' => 'likes_unlike', '_controller' => 'App\\Controller\\LikesController::unlike'], ['id'], null, null, false, true, null]],
        3460 => [[['_route' => 'marketing_details_ops_speciales', '_controller' => 'App\\Controller\\MarketingController::details'], ['_locale', 'slug'], null, null, false, true, null]],
        3492 => [[['_route' => 'marketing_details_promo_com', '_controller' => 'App\\Controller\\MarketingController::details_promo_com'], ['_locale', 'slug'], null, null, false, true, null]],
        3520 => [[['_route' => 'marketing_details_leads_gen', '_controller' => 'App\\Controller\\MarketingController::details_leads_gen'], ['_locale', 'slug'], null, null, false, true, null]],
        3561 => [[['_route' => 'marketing_leads_gen_send_email', '_controller' => 'App\\Controller\\MarketingController::marketing_leads_gen_send_email'], ['_locale'], ['POST' => 0], null, false, false, null]],
        3599 => [[['_route' => 'marketing_details_univers_trust', '_controller' => 'App\\Controller\\MarketingController::details_univers_trust'], ['_locale', 'slug'], null, null, false, true, null]],
        3631 => [[['_route' => 'app_newsletter', '_controller' => 'App\\Controller\\NewsletterController::index'], ['_locale'], null, null, false, false, null]],
        3661 => [[['_route' => 'app_newsletter_success', '_controller' => 'App\\Controller\\NewsletterController::app_newsletter_success'], ['_locale'], null, null, false, false, null]],
        3695 => [[['_route' => 'newsletterUser', '_controller' => 'App\\Controller\\NewsletterController::newsletterUser'], ['_locale'], null, null, false, false, null]],
        3721 => [[['_route' => 'payment_payment', '_controller' => 'App\\Controller\\PaymentController::index'], ['_locale'], null, null, false, true, null]],
        3746 => [[['_route' => 'payment_pre_command', '_controller' => 'App\\Controller\\PaymentController::commande'], ['_locale'], ['POST' => 0], null, false, true, null]],
        3785 => [[['_route' => 'payment_annulerCommande', '_controller' => 'App\\Controller\\PaymentController::annulerCommande'], ['_locale', 'idPost', 'idCommande'], ['GET' => 0], null, false, true, null]],
        3844 => [[['_route' => 'profile_detailsProfessionnel', '_controller' => 'App\\Controller\\ProfileController::detailsProfessionnel'], ['_locale', 'id'], null, null, false, true, null]],
        3873 => [[['_route' => 'profile_delete_portfolio', '_controller' => 'App\\Controller\\ProfileController::deletePortfolio'], ['_locale'], null, null, false, false, null]],
        3887 => [[['_route' => 'profile_delete_video', '_controller' => 'App\\Controller\\ProfileController::deleteVideo'], ['_locale'], null, null, false, false, null]],
        3932 => [[['_route' => 'profile_delete_images_secondaires', '_controller' => 'App\\Controller\\ProfileController::deleteImagesSecondaires'], ['_locale', 'id', 'postId'], null, null, false, true, null]],
        3963 => [[['_route' => 'profile_home_profil', '_controller' => 'App\\Controller\\ProfileController::profil'], ['_locale'], null, null, false, false, null]],
        3972 => [[['_route' => 'profile_profile', '_controller' => 'App\\Controller\\ProfileController::index'], ['_locale'], null, null, false, false, null]],
        3990 => [[['_route' => 'profile_portfolio', '_controller' => 'App\\Controller\\ProfileController::portfolio'], ['_locale'], null, null, false, false, null]],
        4012 => [[['_route' => 'profile_updateProfile', '_controller' => 'App\\Controller\\ProfileController::updateUserData'], ['_locale'], null, null, false, false, null]],
        4071 => [[['_route' => 'profile_liste_sous_categorie', '_controller' => 'App\\Controller\\ProfileController::sousCategorie'], ['_locale', 'id'], null, null, false, true, null]],
        4121 => [[['_route' => 'profile_fournisseurs', '_controller' => 'App\\Controller\\ProfileController::fournisseurs'], ['_locale'], null, null, false, false, null]],
        4149 => [[['_route' => 'profile_fournisseursAbonne', '_controller' => 'App\\Controller\\ProfileController::fournisseursAbonne'], ['_locale'], null, null, false, false, null]],
        4170 => [[['_route' => 'profile_app_switch', '_controller' => 'App\\Controller\\ProfileController::devenirPro'], ['_locale'], ['POST' => 0, 'PUT' => 1], null, false, false, null]],
        4217 => [[['_route' => 'profile_calendrier_ajouter_date', '_controller' => 'App\\Controller\\ProfileController::addDate'], ['_locale'], null, null, false, false, null]],
        4250 => [[['_route' => 'profile_updateBankingProfileData', '_controller' => 'App\\Controller\\ProfileController::updateBankingProfileData'], ['_locale'], null, null, false, false, null]],
        4312 => [[['_route' => 'profile_deleteDraftAnnounce', '_controller' => 'App\\Controller\\ProfileController::deleteDraftAnnounce'], ['_locale', 'id'], null, null, false, true, null]],
        4329 => [[['_route' => 'profile_dashboard', '_controller' => 'App\\Controller\\ProfileController::dashboard'], ['_locale'], null, null, false, false, null]],
        4365 => [[['_route' => 'profile_cancelledReservationAnnounce', '_controller' => 'App\\Controller\\ProfileController::cancelReservationAnnounce'], ['_locale', 'id'], null, null, false, true, null]],
        4388 => [[['_route' => 'profile_updateBillingProfileData', '_controller' => 'App\\Controller\\ProfileController::updateBillingProfileData'], ['_locale'], null, null, false, false, null]],
        4407 => [[['_route' => 'profile_parameters', '_controller' => 'App\\Controller\\ProfileController::parametersForPageRender'], ['_locale'], null, null, false, false, null]],
        4433 => [[['_route' => 'profile_parameters_abonne', '_controller' => 'App\\Controller\\ProfileController::parametersAbonneForPageRender'], ['_locale'], null, null, false, false, null]],
        4495 => [[['_route' => 'profile_userNotificationData', '_controller' => 'App\\Controller\\ProfileController::userNotificationData'], ['_locale'], null, null, false, false, null]],
        4512 => [[['_route' => 'profile_updateUserPassword', '_controller' => 'App\\Controller\\ProfileController::updateUserPassword'], ['_locale'], null, null, false, false, null]],
        4559 => [[['_route' => 'profile_comments', '_controller' => 'App\\Controller\\ProfileController::comments'], ['_locale'], null, null, false, false, null]],
        4599 => [[['_route' => 'profile_creerAnnonces', '_controller' => 'App\\Controller\\ProfileController::annonces'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4632 => [[['_route' => 'profile_EditDraftAnnounce', '_controller' => 'App\\Controller\\ProfileController::EditDraftAnnounce'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        4642 => [[['_route' => 'profile_annonces', '_controller' => 'App\\Controller\\ProfileController::mesannonces'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4696 => [[['_route' => 'profile_annoncesTag', '_controller' => 'App\\Controller\\ProfileController::mesannoncesTag'], ['_locale', 'tag'], ['GET' => 0], null, false, true, null]],
        4748 => [[['_route' => 'profile_listeAnnoncesPagine', '_controller' => 'App\\Controller\\ProfileController::annoncesPagine'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4795 => [[['_route' => 'profile_reservations', '_controller' => 'App\\Controller\\ProfileController::reservations'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4860 => [[['_route' => 'profile_ajouter_annonce', '_controller' => 'App\\Controller\\ProfileController::ajouterAnnonce'], ['_locale'], ['POST' => 0], null, false, false, null]],
        4883 => [[['_route' => 'profile_editer_annonce', '_controller' => 'App\\Controller\\ProfileController::editerAnnonce'], ['_locale'], ['POST' => 0], null, false, false, null]],
        4918 => [[['_route' => 'profile_delete_profil', '_controller' => 'App\\Controller\\ProfileController::supprimerProfil'], ['_locale', 'id'], null, null, false, true, null]],
        4940 => [[['_route' => 'profile_delete_profil_all', '_controller' => 'App\\Controller\\ProfileController::supprimerProfilDefinitivement'], ['_locale', 'id'], null, null, false, true, null]],
        4970 => [[['_route' => 'project_index', '_controller' => 'App\\Controller\\ProjectController::index'], ['_locale'], null, null, false, false, null]],
        5009 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['_locale'], null, null, false, false, null]],
        5026 => [[['_route' => 'old_register_redirection', '_controller' => 'App\\Controller\\RegistrationController::old_register_redirection'], ['_locale'], null, null, false, false, null]],
        5077 => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], ['_locale'], null, null, false, false, null]],
        5105 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['_locale', 'token'], null, null, false, true, null]],
        5137 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        5151 => [[['_route' => 'old_login_redirection', '_controller' => 'App\\Controller\\SecurityController::old_login_redirection'], ['_locale'], null, null, false, false, null]],
        5175 => [[['_route' => 'app_souscription', '_controller' => 'App\\Controller\\SouscriptionController::index'], ['_locale'], null, null, false, false, null]],
        5198 => [[['_route' => 'app_souscription_offre_payante_get', '_controller' => 'App\\Controller\\SouscriptionController::app_souscription_offre_payante_get'], ['_locale'], ['GET' => 0], null, false, false, null]],
        5220 => [
            [['_route' => 'app_admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], ['_locale'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
