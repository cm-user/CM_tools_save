<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            '1_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c' => 'get1528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5cService',
            '2_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c' => 'get2528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5cService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.annotations.recorder_inner' => 'getCache_Annotations_RecorderInnerService',
            'cache.app' => 'getCache_AppService',
            'cache.app.recorder_inner' => 'getCache_App_RecorderInnerService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.serializer.recorder_inner' => 'getCache_Serializer_RecorderInnerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system.recorder_inner' => 'getCache_System_RecorderInnerService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache.validator.recorder_inner' => 'getCache_Validator_RecorderInnerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'css_to_inline_email_converter' => 'getCssToInlineEmailConverterService',
            'css_to_inline_email_twig_extension' => 'getCssToInlineEmailTwigExtensionService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.cm_connection' => 'getDoctrine_Dbal_CmConnectionService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.logger' => 'getDoctrine_Dbal_LoggerService',
            'doctrine.dbal.logger.profiling.cm' => 'getDoctrine_Dbal_Logger_Profiling_CmService',
            'doctrine.dbal.logger.profiling.marketing' => 'getDoctrine_Dbal_Logger_Profiling_MarketingService',
            'doctrine.dbal.marketing_connection' => 'getDoctrine_Dbal_MarketingConnectionService',
            'doctrine.orm.cm_entity_listener_resolver' => 'getDoctrine_Orm_CmEntityListenerResolverService',
            'doctrine.orm.cm_entity_manager' => 'getDoctrine_Orm_CmEntityManagerService',
            'doctrine.orm.cm_entity_manager.property_info_extractor' => 'getDoctrine_Orm_CmEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.cm_listeners.attach_entity_listeners' => 'getDoctrine_Orm_CmListeners_AttachEntityListenersService',
            'doctrine.orm.cm_manager_configurator' => 'getDoctrine_Orm_CmManagerConfiguratorService',
            'doctrine.orm.marketing_entity_listener_resolver' => 'getDoctrine_Orm_MarketingEntityListenerResolverService',
            'doctrine.orm.marketing_entity_manager' => 'getDoctrine_Orm_MarketingEntityManagerService',
            'doctrine.orm.marketing_entity_manager.property_info_extractor' => 'getDoctrine_Orm_MarketingEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.marketing_listeners.attach_entity_listeners' => 'getDoctrine_Orm_MarketingListeners_AttachEntityListenersService',
            'doctrine.orm.marketing_manager_configurator' => 'getDoctrine_Orm_MarketingManagerConfiguratorService',
            'doctrine.orm.naming_strategy.underscore' => 'getDoctrine_Orm_NamingStrategy_UnderscoreService',
            'doctrine.orm.quote_strategy.default' => 'getDoctrine_Orm_QuoteStrategy_DefaultService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.cm_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_CmMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.cm_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_CmQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.cm_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_CmResultCacheService',
            'doctrine_cache.providers.doctrine.orm.marketing_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_MarketingMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.marketing_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_MarketingQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.marketing_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_MarketingResultCacheService',
            'faulty.command.reportmail' => 'getFaulty_Command_ReportmailService',
            'faulty.configure_menu_listener' => 'getFaulty_ConfigureMenuListenerService',
            'faulty.doctrine_banner_listener' => 'getFaulty_DoctrineBannerListenerService',
            'faulty.product_image_uploader' => 'getFaulty_ProductImageUploaderService',
            'faulty.repository.faulty' => 'getFaulty_Repository_FaultyService',
            'faulty.repository.faulty_action' => 'getFaulty_Repository_FaultyActionService',
            'faulty.repository.mail' => 'getFaulty_Repository_MailService',
            'faulty.repository.product' => 'getFaulty_Repository_ProductService',
            'faulty.repository.product_image' => 'getFaulty_Repository_ProductImageService',
            'faulty.repository.supplier' => 'getFaulty_Repository_SupplierService',
            'faulty.repository.user' => 'getFaulty_Repository_UserService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.inflector' => 'getFosRest_InflectorService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'image.handling' => 'getImage_HandlingService',
            'iq2i_prestashop_web_service' => 'getIq2iPrestashopWebServiceService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'mail_signature.configure_menu_listener' => 'getMailSignature_ConfigureMenuListenerService',
            'marketingbundle.admin_configure_menu_listener' => 'getMarketingbundle_AdminConfigureMenuListenerService',
            'marketingbundle.banner_uploader' => 'getMarketingbundle_BannerUploaderService',
            'marketingbundle.doctrine_banner_listener' => 'getMarketingbundle_DoctrineBannerListenerService',
            'marketingbundle.doctrine_product_listener' => 'getMarketingbundle_DoctrineProductListenerService',
            'marketingbundle.form.type.search_button' => 'getMarketingbundle_Form_Type_SearchButtonService',
            'marketingbundle.product_uploader' => 'getMarketingbundle_ProductUploaderService',
            'marketingbundle.repository.model.newsletter' => 'getMarketingbundle_Repository_Model_NewsletterService',
            'marketingbundle.repository.newsletter' => 'getMarketingbundle_Repository_NewsletterService',
            'marketingbundle.repository.newsletter.block' => 'getMarketingbundle_Repository_Newsletter_BlockService',
            'marketingbundle.repository.newsletter.block.type' => 'getMarketingbundle_Repository_Newsletter_Block_TypeService',
            'marketingbundle.repository.newsletter.header' => 'getMarketingbundle_Repository_Newsletter_HeaderService',
            'marketingbundle.repository.newsletter.menu' => 'getMarketingbundle_Repository_Newsletter_MenuService',
            'marketingbundle.repository.newsletter.product' => 'getMarketingbundle_Repository_Newsletter_ProductService',
            'marketingbundle.repository.newsletter.provider' => 'getMarketingbundle_Repository_Newsletter_ProviderService',
            'marketingbundle.repository.provider' => 'getMarketingbundle_Repository_ProviderService',
            'marketingbundle.repository.shop' => 'getMarketingbundle_Repository_ShopService',
            'marketingbundle.repository.shop.configuration' => 'getMarketingbundle_Repository_Shop_ConfigurationService',
            'moderate_review.configure_menu_listener' => 'getModerateReview_ConfigureMenuListenerService',
            'moderate_review.repository.order' => 'getModerateReview_Repository_OrderService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'picture_crawler.configure_menu_listener' => 'getPictureCrawler_ConfigureMenuListenerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'sc.configure_menu_listener' => 'getSc_ConfigureMenuListenerService',
            'sc.repository.branch' => 'getSc_Repository_BranchService',
            'sc.repository.mail' => 'getSc_Repository_MailService',
            'sc.repository.solution' => 'getSc_Repository_SolutionService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.user_secured_area' => 'getSecurity_Authentication_Provider_Anonymous_UserSecuredAreaService',
            'security.authentication.provider.dao.user_secured_area' => 'getSecurity_Authentication_Provider_Dao_UserSecuredAreaService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.firewall.map.context.user_secured_area' => 'getSecurity_Firewall_Map_Context_UserSecuredAreaService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' => 'getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer' => 'getSerializerService',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'shop.admin_configure_menu_listener' => 'getShop_AdminConfigureMenuListenerService',
            'shop.doctrine_banner_listener' => 'getShop_DoctrineBannerListenerService',
            'shop.product_image_uploader' => 'getShop_ProductImageUploaderService',
            'shop.repository.carousel.picture' => 'getShop_Repository_Carousel_PictureService',
            'shop.repository.carousel.product' => 'getShop_Repository_Carousel_ProductService',
            'shop.repository.carousel.video' => 'getShop_Repository_Carousel_VideoService',
            'shop.repository.shopconfiguration' => 'getShop_Repository_ShopconfigurationService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'symfony3serverload.example' => 'getSymfony3serverload_ExampleService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'tinypng.command_listener' => 'getTinypng_CommandListenerService',
            'tinypng.request_listener' => 'getTinypng_RequestListenerService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.image' => 'getTwig_Extension_ImageService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'unicorn_user.entity.roles' => 'getUnicornUser_Entity_RolesService',
            'unicorn_user.repository.user' => 'getUnicornUser_Repository_UserService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'zurb_ink.inky' => 'getZurbInk_InkyService',
            'zurb_ink.inky.twig' => 'getZurbInk_Inky_TwigService',
            'zurb_ink.inlinecss' => 'getZurbInk_InlinecssService',
            'zurb_ink.inlinecss.twig' => 'getZurbInk_Inlinecss_TwigService',
        );
        $this->privates = array(
            '1_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c' => true,
            '2_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'cache.annotations' => true,
            'cache.annotations.recorder_inner' => true,
            'cache.app.recorder_inner' => true,
            'cache.serializer' => true,
            'cache.serializer.recorder_inner' => true,
            'cache.system.recorder_inner' => true,
            'cache.validator' => true,
            'cache.validator.recorder_inner' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.profiling.cm' => true,
            'doctrine.dbal.logger.profiling.marketing' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'fos_rest.request.param_fetcher.reader' => true,
            'monolog.processor.psr_log_message' => true,
            'resolve_controller_name_subscriber' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.user_secured_area' => true,
            'security.authentication.provider.dao.user_secured_area' => true,
            'security.authentication.trust_resolver' => true,
            'security.firewall.map' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' => true,
            'security.role_hierarchy' => true,
            'security.user_value_resolver' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'session.storage.metadata_bag' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
            'web_profiler.csp.handler' => true,
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.marketing_connection',
            'doctrine.orm.cm_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.cm_metadata_cache',
            'doctrine.orm.cm_query_cache' => 'doctrine_cache.providers.doctrine.orm.cm_query_cache',
            'doctrine.orm.cm_result_cache' => 'doctrine_cache.providers.doctrine.orm.cm_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.marketing_entity_manager',
            'doctrine.orm.marketing_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.marketing_metadata_cache',
            'doctrine.orm.marketing_query_cache' => 'doctrine_cache.providers.doctrine.orm.marketing_query_cache',
            'doctrine.orm.marketing_result_cache' => 'doctrine_cache.providers.doctrine.orm.marketing_result_cache',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /**
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter A Symfony\Component\Cache\Adapter\TraceableAdapter instance
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.app.recorder_inner']) ? $this->services['cache.app.recorder_inner'] : $this->getCache_App_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the 'cache.default_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the 'cache.global_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter A Symfony\Component\Cache\Adapter\TraceableAdapter instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.system.recorder_inner']) ? $this->services['cache.system.recorder_inner'] : $this->getCache_System_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'\\app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'})), (__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'\\app'), array())), 7 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'})));
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['1_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c']) ? $this->services['1_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c'] : $this->get1528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5cService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['2_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c']) ? $this->services['2_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c'] : $this->get2528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5cService()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand A Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand instance
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array(0 => 'FaultyProductBundle\\Entity\\User'));
    }

    /**
     * Gets the 'css_to_inline_email_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \RobertoTru\ToInlineStyleEmailBundle\Converter\ToInlineStyleEmailConverter A RobertoTru\ToInlineStyleEmailBundle\Converter\ToInlineStyleEmailConverter instance
     */
    protected function getCssToInlineEmailConverterService()
    {
        return $this->services['css_to_inline_email_converter'] = new \RobertoTru\ToInlineStyleEmailBundle\Converter\ToInlineStyleEmailConverter($this);
    }

    /**
     * Gets the 'css_to_inline_email_twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \RobertoTru\ToInlineStyleEmailBundle\Twig\InlineCssExtension A RobertoTru\ToInlineStyleEmailBundle\Twig\InlineCssExtension instance
     */
    protected function getCssToInlineEmailTwigExtensionService()
    {
        return $this->services['css_to_inline_email_twig_extension'] = new \RobertoTru\ToInlineStyleEmailBundle\Twig\InlineCssExtension(${($_ = isset($this->services['css_to_inline_email_converter']) ? $this->services['css_to_inline_email_converter'] : $this->get('css_to_inline_email_converter')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ($this->targetDirs[3].'\\app'), true);
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->get('data_collector.form.extractor')) && false ?: '_'});
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector instance
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.argument_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver A Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver instance
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, ${($_ = isset($this->services['var_dumper.cli_dumper']) ? $this->services['var_dumper.cli_dumper'] : $this->get('var_dumper.cli_dumper')) && false ?: '_'});
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->addListener('unicorn.user.main_menu_logged', array(0 => function () {
            return ${($_ = isset($this->services['shop.admin_configure_menu_listener']) ? $this->services['shop.admin_configure_menu_listener'] : $this->get('shop.admin_configure_menu_listener')) && false ?: '_'};
        }, 1 => 'onMainMenuLoggedConfigure'), 0);
        $instance->addListener('unicorn.user.main_menu_logged', array(0 => function () {
            return ${($_ = isset($this->services['faulty.configure_menu_listener']) ? $this->services['faulty.configure_menu_listener'] : $this->get('faulty.configure_menu_listener')) && false ?: '_'};
        }, 1 => 'onMainMenuLoggedConfigure'), 0);
        $instance->addListener('unicorn.user.main_menu_logged', array(0 => function () {
            return ${($_ = isset($this->services['marketingbundle.admin_configure_menu_listener']) ? $this->services['marketingbundle.admin_configure_menu_listener'] : $this->get('marketingbundle.admin_configure_menu_listener')) && false ?: '_'};
        }, 1 => 'onMainMenuLoggedConfigure'), 0);
        $instance->addListener('unicorn.user.main_menu_logged', array(0 => function () {
            return ${($_ = isset($this->services['moderate_review.configure_menu_listener']) ? $this->services['moderate_review.configure_menu_listener'] : $this->get('moderate_review.configure_menu_listener')) && false ?: '_'};
        }, 1 => 'onMainMenuLoggedConfigure'), 0);
        $instance->addListener('unicorn.user.main_menu_logged', array(0 => function () {
            return ${($_ = isset($this->services['picture_crawler.configure_menu_listener']) ? $this->services['picture_crawler.configure_menu_listener'] : $this->get('picture_crawler.configure_menu_listener')) && false ?: '_'};
        }, 1 => 'onMainMenuLoggedConfigure'), 0);
        $instance->addListener('unicorn.user.main_menu_logged', array(0 => function () {
            return ${($_ = isset($this->services['mail_signature.configure_menu_listener']) ? $this->services['mail_signature.configure_menu_listener'] : $this->get('mail_signature.configure_menu_listener')) && false ?: '_'};
        }, 1 => 'onMainMenuLoggedConfigure'), 0);
        $instance->addListener('unicorn.user.main_menu_logged', array(0 => function () {
            return ${($_ = isset($this->services['sc.configure_menu_listener']) ? $this->services['sc.configure_menu_listener'] : $this->get('sc.configure_menu_listener')) && false ?: '_'};
        }, 1 => 'onMainMenuLoggedConfigure'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['knp_menu.listener.voters']) ? $this->services['knp_menu.listener.voters'] : $this->get('knp_menu.listener.voters')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.sliding_pagination']) ? $this->services['knp_paginator.subscriber.sliding_pagination'] : $this->get('knp_paginator.subscriber.sliding_pagination')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['tinypng.request_listener']) ? $this->services['tinypng.request_listener'] : $this->get('tinypng.request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['tinypng.command_listener']) ? $this->services['tinypng.command_listener'] : $this->get('tinypng.command_listener')) && false ?: '_'};
        }, 1 => 'onConsoleCommand'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.body_listener']) ? $this->services['fos_rest.body_listener'] : $this->get('fos_rest.body_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->get('fragment.listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->get('debug.dump_listener')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->get('web_profiler.debug_toolbar')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);
        $instance->addListener('knp_pager.before', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.paginate']) ? $this->services['knp_paginator.subscriber.paginate'] : $this->get('knp_paginator.subscriber.paginate')) && false ?: '_'};
        }, 1 => 'before'), 0);
        $instance->addListener('knp_pager.pagination', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.paginate']) ? $this->services['knp_paginator.subscriber.paginate'] : $this->get('knp_paginator.subscriber.paginate')) && false ?: '_'};
        }, 1 => 'pagination'), 0);
        $instance->addListener('knp_pager.before', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.sortable']) ? $this->services['knp_paginator.subscriber.sortable'] : $this->get('knp_paginator.subscriber.sortable')) && false ?: '_'};
        }, 1 => 'before'), 1);
        $instance->addListener('knp_pager.before', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.filtration']) ? $this->services['knp_paginator.subscriber.filtration'] : $this->get('knp_paginator.subscriber.filtration')) && false ?: '_'};
        }, 1 => 'before'), 1);
        $instance->addListener('knp_pager.pagination', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.sliding_pagination']) ? $this->services['knp_paginator.subscriber.sliding_pagination'] : $this->get('knp_paginator.subscriber.sliding_pagination')) && false ?: '_'};
        }, 1 => 'pagination'), 1);

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'deprecated.form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \stdClass A stdClass instance
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'deprecated.form.registry.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \stdClass A stdClass instance
     *
     * @deprecated The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_Registry_CsrfService()
    {
        @trigger_error('The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry.csrf'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('marketing' => 'doctrine.dbal.marketing_connection', 'cm' => 'doctrine.dbal.cm_connection'), array('marketing' => 'doctrine.orm.marketing_entity_manager', 'cm' => 'doctrine.orm.cm_entity_manager'), 'marketing', 'marketing');
    }

    /**
     * Gets the 'doctrine.dbal.cm_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_CmConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger']) ? $this->services['doctrine.dbal.logger'] : $this->getDoctrine_Dbal_LoggerService()) && false ?: '_'});
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.cm']) ? $this->services['doctrine.dbal.logger.profiling.cm'] : $this->getDoctrine_Dbal_Logger_Profiling_CmService()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.cm_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.cm_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.cm_listeners.attach_entity_listeners')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['marketingbundle.doctrine_product_listener']) ? $this->services['marketingbundle.doctrine_product_listener'] : $this->get('marketingbundle.doctrine_product_listener')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['faulty.doctrine_banner_listener']) ? $this->services['faulty.doctrine_banner_listener'] : $this->get('faulty.doctrine_banner_listener')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['marketingbundle.doctrine_banner_listener']) ? $this->services['marketingbundle.doctrine_banner_listener'] : $this->get('marketingbundle.doctrine_banner_listener')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['shop.doctrine_banner_listener']) ? $this->services['shop.doctrine_banner_listener'] : $this->get('shop.doctrine_banner_listener')) && false ?: '_'});

        return $this->services['doctrine.dbal.cm_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'cadeaumaestro_prod', 'user' => 'cadeau_prod', 'password' => 'Jnd671fARFv12', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.marketing_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_MarketingConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger']) ? $this->services['doctrine.dbal.logger'] : $this->getDoctrine_Dbal_LoggerService()) && false ?: '_'});
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.marketing']) ? $this->services['doctrine.dbal.logger.profiling.marketing'] : $this->getDoctrine_Dbal_Logger_Profiling_MarketingService()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.marketing_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.marketing_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.marketing_listeners.attach_entity_listeners')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['marketingbundle.doctrine_product_listener']) ? $this->services['marketingbundle.doctrine_product_listener'] : $this->get('marketingbundle.doctrine_product_listener')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['faulty.doctrine_banner_listener']) ? $this->services['faulty.doctrine_banner_listener'] : $this->get('faulty.doctrine_banner_listener')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['marketingbundle.doctrine_banner_listener']) ? $this->services['marketingbundle.doctrine_banner_listener'] : $this->get('marketingbundle.doctrine_banner_listener')) && false ?: '_'});
        $c->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), ${($_ = isset($this->services['shop.doctrine_banner_listener']) ? $this->services['shop.doctrine_banner_listener'] : $this->get('shop.doctrine_banner_listener')) && false ?: '_'});

        return $this->services['doctrine.dbal.marketing_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'cm_divers', 'user' => 'cm_divers', 'password' => 'FVezV1RvEZA', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the 'doctrine.orm.cm_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_CmEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.cm_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the 'doctrine.orm.cm_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_CmEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, array(0 => ($this->targetDirs[3].'\\src\\ModerateReviewBundle\\Entity'))), 'ModerateReviewBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('ModerateReviewBundle' => 'ModerateReviewBundle\\Entity'));
        $b->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.cm_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.cm_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.cm_metadata_cache')) && false ?: '_'});
        $b->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.cm_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.cm_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.cm_query_cache')) && false ?: '_'});
        $b->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.cm_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.cm_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.cm_result_cache')) && false ?: '_'});
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(${($_ = isset($this->services['doctrine.orm.naming_strategy.underscore']) ? $this->services['doctrine.orm.naming_strategy.underscore'] : $this->getDoctrine_Orm_NamingStrategy_UnderscoreService()) && false ?: '_'});
        $b->setQuoteStrategy(${($_ = isset($this->services['doctrine.orm.quote_strategy.default']) ? $this->services['doctrine.orm.quote_strategy.default'] : $this->getDoctrine_Orm_QuoteStrategy_DefaultService()) && false ?: '_'});
        $b->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.cm_entity_listener_resolver']) ? $this->services['doctrine.orm.cm_entity_listener_resolver'] : $this->get('doctrine.orm.cm_entity_listener_resolver')) && false ?: '_'});

        $this->services['doctrine.orm.cm_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.cm_connection']) ? $this->services['doctrine.dbal.cm_connection'] : $this->get('doctrine.dbal.cm_connection')) && false ?: '_'}, $b);

        ${($_ = isset($this->services['doctrine.orm.cm_manager_configurator']) ? $this->services['doctrine.orm.cm_manager_configurator'] : $this->get('doctrine.orm.cm_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.cm_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_CmEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.cm_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.cm_entity_manager']) ? $this->services['doctrine.orm.cm_entity_manager'] : $this->get('doctrine.orm.cm_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the 'doctrine.orm.cm_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_CmListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.cm_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.cm_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_CmManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.cm_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.marketing_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_MarketingEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.marketing_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the 'doctrine.orm.marketing_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_MarketingEntityManagerService($lazyLoad = true)
    {
        $a = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'\\src\\Unicorn\\Bundle\\UserBundle\\Entity'), 1 => ($this->targetDirs[3].'\\src\\MarketingBundle\\Entity'), 2 => ($this->targetDirs[3].'\\src\\FaultyProductBundle\\Entity'), 3 => ($this->targetDirs[3].'\\src\\ShopBundle\\Entity'), 4 => ($this->targetDirs[3].'\\src\\CM\\ServiceClientBundle\\Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'Unicorn\\Bundle\\UserBundle\\Entity');
        $c->addDriver($b, 'MarketingBundle\\Entity');
        $c->addDriver($b, 'FaultyProductBundle\\Entity');
        $c->addDriver($b, 'ShopBundle\\Entity');
        $c->addDriver($b, 'CM\\ServiceClientBundle\\Entity');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('UserBundle' => 'Unicorn\\Bundle\\UserBundle\\Entity', 'MarketingBundle' => 'MarketingBundle\\Entity', 'FaultyProductBundle' => 'FaultyProductBundle\\Entity', 'ShopBundle' => 'ShopBundle\\Entity', 'ServiceClientBundle' => 'CM\\ServiceClientBundle\\Entity'));
        $d->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.marketing_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.marketing_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.marketing_metadata_cache')) && false ?: '_'});
        $d->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.marketing_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.marketing_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.marketing_query_cache')) && false ?: '_'});
        $d->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.marketing_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.marketing_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.marketing_result_cache')) && false ?: '_'});
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(true);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(${($_ = isset($this->services['doctrine.orm.naming_strategy.underscore']) ? $this->services['doctrine.orm.naming_strategy.underscore'] : $this->getDoctrine_Orm_NamingStrategy_UnderscoreService()) && false ?: '_'});
        $d->setQuoteStrategy(${($_ = isset($this->services['doctrine.orm.quote_strategy.default']) ? $this->services['doctrine.orm.quote_strategy.default'] : $this->getDoctrine_Orm_QuoteStrategy_DefaultService()) && false ?: '_'});
        $d->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.marketing_entity_listener_resolver']) ? $this->services['doctrine.orm.marketing_entity_listener_resolver'] : $this->get('doctrine.orm.marketing_entity_listener_resolver')) && false ?: '_'});
        $d->addCustomStringFunction('group_concat', 'Oro\\ORM\\Query\\AST\\Functions\\String\\GroupConcat');
        $d->addCustomStringFunction('concat_ws', 'Oro\\ORM\\Query\\AST\\Functions\\String\\ConcatWs');
        $d->addCustomStringFunction('cast', 'Oro\\ORM\\Query\\AST\\Functions\\Cast');
        $d->addCustomNumericFunction('timestampdiff', 'Oro\\ORM\\Query\\AST\\Functions\\Numeric\\TimestampDiff');
        $d->addCustomNumericFunction('dayofyear', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('dayofmonth', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('dayofweek', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('week', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('day', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('hour', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('minute', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('month', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('quarter', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('second', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('year', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomNumericFunction('sign', 'Oro\\ORM\\Query\\AST\\Functions\\Numeric\\Sign');
        $d->addCustomNumericFunction('pow', 'Oro\\ORM\\Query\\AST\\Functions\\Numeric\\Pow');
        $d->addCustomDatetimeFunction('date', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomDatetimeFunction('time', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomDatetimeFunction('timestamp', 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction');
        $d->addCustomDatetimeFunction('convert_tz', 'Oro\\ORM\\Query\\AST\\Functions\\DateTime\\ConvertTz');

        $this->services['doctrine.orm.marketing_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.marketing_connection']) ? $this->services['doctrine.dbal.marketing_connection'] : $this->get('doctrine.dbal.marketing_connection')) && false ?: '_'}, $d);

        ${($_ = isset($this->services['doctrine.orm.marketing_manager_configurator']) ? $this->services['doctrine.orm.marketing_manager_configurator'] : $this->get('doctrine.orm.marketing_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.marketing_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_MarketingEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.marketing_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the 'doctrine.orm.marketing_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_MarketingListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.marketing_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.marketing_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_MarketingManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.marketing_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.cm_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_CmMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.cm_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_cm_da6329b4365dfbbde5dab4a66d27506671e4bc2151e34fec4bbc2d3575809690');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.cm_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_CmQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.cm_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_cm_da6329b4365dfbbde5dab4a66d27506671e4bc2151e34fec4bbc2d3575809690');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.cm_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_CmResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.cm_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_cm_da6329b4365dfbbde5dab4a66d27506671e4bc2151e34fec4bbc2d3575809690');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.marketing_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_MarketingMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.marketing_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_marketing_da6329b4365dfbbde5dab4a66d27506671e4bc2151e34fec4bbc2d3575809690');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.marketing_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_MarketingQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.marketing_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_marketing_da6329b4365dfbbde5dab4a66d27506671e4bc2151e34fec4bbc2d3575809690');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.marketing_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_MarketingResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.marketing_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_marketing_da6329b4365dfbbde5dab4a66d27506671e4bc2151e34fec4bbc2d3575809690');

        return $instance;
    }

    /**
     * Gets the 'faulty.command.reportmail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Command\FaultyReportMail A FaultyProductBundle\Command\FaultyReportMail instance
     */
    protected function getFaulty_Command_ReportmailService()
    {
        return $this->services['faulty.command.reportmail'] = new \FaultyProductBundle\Command\FaultyReportMail();
    }

    /**
     * Gets the 'faulty.configure_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\EventListener\ConfigureMenuListener A FaultyProductBundle\EventListener\ConfigureMenuListener instance
     */
    protected function getFaulty_ConfigureMenuListenerService()
    {
        return $this->services['faulty.configure_menu_listener'] = new \FaultyProductBundle\EventListener\ConfigureMenuListener($this);
    }

    /**
     * Gets the 'faulty.doctrine_banner_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\EventListener\ProductImageListener A FaultyProductBundle\EventListener\ProductImageListener instance
     */
    protected function getFaulty_DoctrineBannerListenerService()
    {
        return $this->services['faulty.doctrine_banner_listener'] = new \FaultyProductBundle\EventListener\ProductImageListener(${($_ = isset($this->services['faulty.product_image_uploader']) ? $this->services['faulty.product_image_uploader'] : $this->get('faulty.product_image_uploader')) && false ?: '_'}, $this);
    }

    /**
     * Gets the 'faulty.product_image_uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Uploader\ProductImageUploader A FaultyProductBundle\Uploader\ProductImageUploader instance
     */
    protected function getFaulty_ProductImageUploaderService()
    {
        return $this->services['faulty.product_image_uploader'] = new \FaultyProductBundle\Uploader\ProductImageUploader(($this->targetDirs[3].'\\app/../web/faulty'));
    }

    /**
     * Gets the 'faulty.repository.faulty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Repository\FaultyRepository A FaultyProductBundle\Repository\FaultyRepository instance
     */
    protected function getFaulty_Repository_FaultyService()
    {
        return $this->services['faulty.repository.faulty'] = new \FaultyProductBundle\Repository\FaultyRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'faulty.repository.faulty_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Repository\FaultyActionRepository A FaultyProductBundle\Repository\FaultyActionRepository instance
     */
    protected function getFaulty_Repository_FaultyActionService()
    {
        return $this->services['faulty.repository.faulty_action'] = new \FaultyProductBundle\Repository\FaultyActionRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'faulty.repository.mail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Repository\FaultyMailRepository A FaultyProductBundle\Repository\FaultyMailRepository instance
     */
    protected function getFaulty_Repository_MailService()
    {
        return $this->services['faulty.repository.mail'] = new \FaultyProductBundle\Repository\FaultyMailRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'faulty.repository.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Repository\ProductRepository A FaultyProductBundle\Repository\ProductRepository instance
     */
    protected function getFaulty_Repository_ProductService()
    {
        return $this->services['faulty.repository.product'] = new \FaultyProductBundle\Repository\ProductRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'faulty.repository.product_image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Repository\ProductImageRepository A FaultyProductBundle\Repository\ProductImageRepository instance
     */
    protected function getFaulty_Repository_ProductImageService()
    {
        return $this->services['faulty.repository.product_image'] = new \FaultyProductBundle\Repository\ProductImageRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'faulty.repository.supplier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Repository\SupplierRepository A FaultyProductBundle\Repository\SupplierRepository instance
     */
    protected function getFaulty_Repository_SupplierService()
    {
        return $this->services['faulty.repository.supplier'] = new \FaultyProductBundle\Repository\SupplierRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'faulty.repository.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaultyProductBundle\Repository\UserRepository A FaultyProductBundle\Repository\UserRepository instance
     */
    protected function getFaulty_Repository_UserService()
    {
        return $this->services['faulty.repository.user'] = new \FaultyProductBundle\Repository\UserRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'}, $this, 'FaultyProductBundle\\Entity\\User');
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), array(0 => ($this->targetDirs[3].'\\app')));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('MarketingBundle\\Form\\Extension\\SearchButtonType' => function () {
            return ${($_ = isset($this->services['marketingbundle.form.type.search_button']) ? $this->services['marketingbundle.form.type.search_button'] : $this->get('marketingbundle.form.type.search_button')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->get('form.type.entity')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->getForm_TypeExtension_Form_DataCollectorService()) && false ?: '_'};
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->get('form.type_guesser.doctrine')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the 'fos_js_routing.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller A FOS\JsRoutingBundle\Controller\Controller instance
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller(${($_ = isset($this->services['fos_js_routing.serializer']) ? $this->services['fos_js_routing.serializer'] : $this->get('fos_js_routing.serializer')) && false ?: '_'}, ${($_ = isset($this->services['fos_js_routing.extractor']) ? $this->services['fos_js_routing.extractor'] : $this->get('fos_js_routing.extractor')) && false ?: '_'}, array('enabled' => false), true);
    }

    /**
     * Gets the 'fos_js_routing.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor A FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor instance
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle', 'UserBundle' => 'Unicorn\\Bundle\\UserBundle\\UserBundle', 'MarketingBundle' => 'MarketingBundle\\MarketingBundle', 'IQ2iPrestaShopWebServiceBundle' => 'IQ2i\\PrestaShopWebServiceBundle\\IQ2iPrestaShopWebServiceBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'HampeZurbInkBundle' => 'Hampe\\Bundle\\ZurbInkBundle\\HampeZurbInkBundle', 'RobertoTruToInlineStyleEmailBundle' => 'RobertoTru\\ToInlineStyleEmailBundle\\RobertoTruToInlineStyleEmailBundle', 'GregwarImageBundle' => 'Gregwar\\ImageBundle\\GregwarImageBundle', 'ModerateReviewBundle' => 'ModerateReviewBundle\\ModerateReviewBundle', 'PictureCrawlerBundle' => 'PictureCrawlerBundle\\PictureCrawlerBundle', 'ShopBundle' => 'ShopBundle\\ShopBundle', 'FaultyProductBundle' => 'FaultyProductBundle\\FaultyProductBundle', 'MailSignatureBundle' => 'MailSignatureBundle\\MailSignatureBundle', 'TinypngBundle' => 'Tinypng\\Bundle\\TinypngBundle', 'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle', 'ServiceClientBundle' => 'CM\\ServiceClientBundle\\ServiceClientBundle', 'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'ServerLoadBundle' => 'Rem42\\Bundle\\ServerLoadBundle\\ServerLoadBundle'));
    }

    /**
     * Gets the 'fos_js_routing.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(${($_ = isset($this->services['fos_rest.decoder_provider']) ? $this->services['fos_rest.decoder_provider'] : $this->get('fos_rest.decoder_provider')) && false ?: '_'}, false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder A FOS\RestBundle\Decoder\JsonDecoder instance
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.jsontoform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder A FOS\RestBundle\Decoder\JsonToFormDecoder instance
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder A FOS\RestBundle\Decoder\XmlDecoder instance
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider($this, array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the 'fos_rest.inflector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Inflector\DoctrineInflector A FOS\RestBundle\Inflector\DoctrineInflector instance
     */
    protected function getFosRest_InflectorService()
    {
        return $this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer A FOS\RestBundle\Normalizer\CamelKeysNormalizer instance
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys_with_leading_underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore A FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore instance
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher A FOS\RestBundle\Request\ParamFetcher instance
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'fos_rest.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \FOS\RestBundle\Serializer\SymfonySerializerAdapter A FOS\RestBundle\Serializer\SymfonySerializerAdapter instance
     */
    protected function getFosRest_SerializerService($lazyLoad = true)
    {
        return $this->services['fos_rest.serializer'] = new \FOS\RestBundle\Serializer\SymfonySerializerAdapter(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->get('serializer')) && false ?: '_'});
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.serializer']) ? $this->services['fos_rest.serializer'] : $this->get('fos_rest.serializer')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setSerializeNullStrategy(false);

        return $instance;
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, true);
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->get('debug.controller_resolver')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the 'image.handling' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\ImageBundle\Services\ImageHandling A Gregwar\ImageBundle\Services\ImageHandling instance
     */
    protected function getImage_HandlingService()
    {
        return $this->services['image.handling'] = new \Gregwar\ImageBundle\Services\ImageHandling('cache', NULL, 'Gregwar\\ImageBundle\\ImageHandler', $this, ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, true, NULL);
    }

    /**
     * Gets the 'iq2i_prestashop_web_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \IQ2i\PrestaShopWebServiceBundle\Services\IQ2iPrestaShopWebService A IQ2i\PrestaShopWebServiceBundle\Services\IQ2iPrestaShopWebService instance
     */
    protected function getIq2iPrestashopWebServiceService()
    {
        return $this->services['iq2i_prestashop_web_service'] = new \IQ2i\PrestaShopWebServiceBundle\Services\IQ2iPrestaShopWebService($this);
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 0);

        return $instance;
    }

    /**
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter(${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->get('knp_menu.voter.router')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter(${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->get('knp_menu.voter.router')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, $this, ${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->get('knp_menu.factory')) && false ?: '_'})));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'}, array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, 'KnpMenuBundle::menu.html.twig', ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'}, array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter A Knp\Menu\Matcher\Voter\RouteVoter instance
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the 'knp_paginator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Paginator A Knp\Component\Pager\Paginator instance
     */
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /**
     * Gets the 'knp_paginator.helper.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor A Knp\Bundle\PaginatorBundle\Helper\Processor instance
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the 'knp_paginator.subscriber.filtration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber A Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.paginate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber A Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.sliding_pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber A Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }

    /**
     * Gets the 'knp_paginator.subscriber.sortable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber A Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the 'knp_paginator.twig.extension.pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension A Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension instance
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(${($_ = isset($this->services['knp_paginator.helper.processor']) ? $this->services['knp_paginator.helper.processor'] : $this->get('knp_paginator.helper.processor')) && false ?: '_'});
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'fr', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'mail_signature.configure_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MailSignatureBundle\EventListener\ConfigureMenuListener A MailSignatureBundle\EventListener\ConfigureMenuListener instance
     */
    protected function getMailSignature_ConfigureMenuListenerService()
    {
        return $this->services['mail_signature.configure_menu_listener'] = new \MailSignatureBundle\EventListener\ConfigureMenuListener($this);
    }

    /**
     * Gets the 'marketingbundle.admin_configure_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\EventListener\ConfigureMenuListener A MarketingBundle\EventListener\ConfigureMenuListener instance
     */
    protected function getMarketingbundle_AdminConfigureMenuListenerService()
    {
        return $this->services['marketingbundle.admin_configure_menu_listener'] = new \MarketingBundle\EventListener\ConfigureMenuListener($this);
    }

    /**
     * Gets the 'marketingbundle.banner_uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Uploader\BannerUploader A MarketingBundle\Uploader\BannerUploader instance
     */
    protected function getMarketingbundle_BannerUploaderService()
    {
        return $this->services['marketingbundle.banner_uploader'] = new \MarketingBundle\Uploader\BannerUploader(($this->targetDirs[3].'\\app/../web/upload'));
    }

    /**
     * Gets the 'marketingbundle.doctrine_banner_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\EventListener\BannerUploadListener A MarketingBundle\EventListener\BannerUploadListener instance
     */
    protected function getMarketingbundle_DoctrineBannerListenerService()
    {
        return $this->services['marketingbundle.doctrine_banner_listener'] = new \MarketingBundle\EventListener\BannerUploadListener(${($_ = isset($this->services['marketingbundle.banner_uploader']) ? $this->services['marketingbundle.banner_uploader'] : $this->get('marketingbundle.banner_uploader')) && false ?: '_'}, $this);
    }

    /**
     * Gets the 'marketingbundle.doctrine_product_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\EventListener\ProductUploadListener A MarketingBundle\EventListener\ProductUploadListener instance
     */
    protected function getMarketingbundle_DoctrineProductListenerService()
    {
        return $this->services['marketingbundle.doctrine_product_listener'] = new \MarketingBundle\EventListener\ProductUploadListener(${($_ = isset($this->services['marketingbundle.product_uploader']) ? $this->services['marketingbundle.product_uploader'] : $this->get('marketingbundle.product_uploader')) && false ?: '_'}, $this);
    }

    /**
     * Gets the 'marketingbundle.form.type.search_button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Form\Extension\SearchButtonType A MarketingBundle\Form\Extension\SearchButtonType instance
     */
    protected function getMarketingbundle_Form_Type_SearchButtonService()
    {
        return $this->services['marketingbundle.form.type.search_button'] = new \MarketingBundle\Form\Extension\SearchButtonType();
    }

    /**
     * Gets the 'marketingbundle.product_uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Uploader\ProductUploader A MarketingBundle\Uploader\ProductUploader instance
     */
    protected function getMarketingbundle_ProductUploaderService()
    {
        return $this->services['marketingbundle.product_uploader'] = new \MarketingBundle\Uploader\ProductUploader(($this->targetDirs[3].'\\app/../web/upload'));
    }

    /**
     * Gets the 'marketingbundle.repository.model.newsletter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\ModelNewsletterRepository A MarketingBundle\Repository\ModelNewsletterRepository instance
     */
    protected function getMarketingbundle_Repository_Model_NewsletterService()
    {
        return $this->services['marketingbundle.repository.model.newsletter'] = new \MarketingBundle\Repository\ModelNewsletterRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.newsletter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\NewsletterRepository A MarketingBundle\Repository\NewsletterRepository instance
     */
    protected function getMarketingbundle_Repository_NewsletterService()
    {
        return $this->services['marketingbundle.repository.newsletter'] = new \MarketingBundle\Repository\NewsletterRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.newsletter.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\NewsletterBlockRepository A MarketingBundle\Repository\NewsletterBlockRepository instance
     */
    protected function getMarketingbundle_Repository_Newsletter_BlockService()
    {
        return $this->services['marketingbundle.repository.newsletter.block'] = new \MarketingBundle\Repository\NewsletterBlockRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.newsletter.block.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\NewsletterBlockTypeRepository A MarketingBundle\Repository\NewsletterBlockTypeRepository instance
     */
    protected function getMarketingbundle_Repository_Newsletter_Block_TypeService()
    {
        return $this->services['marketingbundle.repository.newsletter.block.type'] = new \MarketingBundle\Repository\NewsletterBlockTypeRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.newsletter.header' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\NewsletterHeaderRepository A MarketingBundle\Repository\NewsletterHeaderRepository instance
     */
    protected function getMarketingbundle_Repository_Newsletter_HeaderService()
    {
        return $this->services['marketingbundle.repository.newsletter.header'] = new \MarketingBundle\Repository\NewsletterHeaderRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.newsletter.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\NewsletterMenuRepository A MarketingBundle\Repository\NewsletterMenuRepository instance
     */
    protected function getMarketingbundle_Repository_Newsletter_MenuService()
    {
        return $this->services['marketingbundle.repository.newsletter.menu'] = new \MarketingBundle\Repository\NewsletterMenuRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.newsletter.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\NewsletterProductRepository A MarketingBundle\Repository\NewsletterProductRepository instance
     */
    protected function getMarketingbundle_Repository_Newsletter_ProductService()
    {
        return $this->services['marketingbundle.repository.newsletter.product'] = new \MarketingBundle\Repository\NewsletterProductRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.newsletter.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\NewsletterProviderRepository A MarketingBundle\Repository\NewsletterProviderRepository instance
     */
    protected function getMarketingbundle_Repository_Newsletter_ProviderService()
    {
        return $this->services['marketingbundle.repository.newsletter.provider'] = new \MarketingBundle\Repository\NewsletterProviderRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\ProviderRepository A MarketingBundle\Repository\ProviderRepository instance
     */
    protected function getMarketingbundle_Repository_ProviderService()
    {
        return $this->services['marketingbundle.repository.provider'] = new \MarketingBundle\Repository\ProviderRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.shop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\ShopRepository A MarketingBundle\Repository\ShopRepository instance
     */
    protected function getMarketingbundle_Repository_ShopService()
    {
        return $this->services['marketingbundle.repository.shop'] = new \MarketingBundle\Repository\ShopRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'marketingbundle.repository.shop.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MarketingBundle\Repository\ShopConfigurationRepository A MarketingBundle\Repository\ShopConfigurationRepository instance
     */
    protected function getMarketingbundle_Repository_Shop_ConfigurationService()
    {
        return $this->services['marketingbundle.repository.shop.configuration'] = new \MarketingBundle\Repository\ShopConfigurationRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'moderate_review.configure_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ModerateReviewBundle\EventListener\ConfigureMenuListener A ModerateReviewBundle\EventListener\ConfigureMenuListener instance
     */
    protected function getModerateReview_ConfigureMenuListenerService()
    {
        return $this->services['moderate_review.configure_menu_listener'] = new \ModerateReviewBundle\EventListener\ConfigureMenuListener($this);
    }

    /**
     * Gets the 'moderate_review.repository.order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ModerateReviewBundle\Repository\OrderRepository A ModerateReviewBundle\Repository\OrderRepository instance
     */
    protected function getModerateReview_Repository_OrderService()
    {
        return $this->services['moderate_review.repository.order'] = new \ModerateReviewBundle\Repository\OrderRepository(${($_ = isset($this->services['doctrine.dbal.cm_connection']) ? $this->services['doctrine.dbal.cm_connection'] : $this->get('doctrine.dbal.cm_connection')) && false ?: '_'});
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'picture_crawler.configure_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PictureCrawlerBundle\EventListener\ConfigureMenuListener A PictureCrawlerBundle\EventListener\ConfigureMenuListener instance
     */
    protected function getPictureCrawler_ConfigureMenuListenerService()
    {
        return $this->services['picture_crawler.configure_menu_listener'] = new \PictureCrawlerBundle\EventListener\ConfigureMenuListener($this);
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
        $d->addLogger('marketing', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.marketing']) ? $this->services['doctrine.dbal.logger.profiling.marketing'] : $this->getDoctrine_Dbal_Logger_Profiling_MarketingService()) && false ?: '_'});
        $d->addLogger('cm', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.cm']) ? $this->services['doctrine.dbal.logger.profiling.cm'] : $this->getDoctrine_Dbal_Logger_Profiling_CmService()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, (__DIR__.'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'});
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->get('data_collector.dump')) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'\\app/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($c);

        $e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();

        $f = new \Symfony\Component\Config\Loader\LoaderResolver();
        $f->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $f->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));
        $f->addLoader($d);
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($b, $e));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $b, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($c, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.inflector']) ? $this->services['fos_rest.inflector'] : $this->get('fos_rest.inflector')) && false ?: '_'}, true, array('json' => false, 'xml' => false, 'html' => true)), $c), NULL));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($b, $e, true, array('json' => false, 'xml' => false, 'html' => true), NULL));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($b, $e, true, array('json' => false, 'xml' => false, 'html' => true), NULL));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $f);
    }

    /**
     * Gets the 'sc.configure_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CM\ServiceClientBundle\EventListener\ConfigureMenuListener A CM\ServiceClientBundle\EventListener\ConfigureMenuListener instance
     */
    protected function getSc_ConfigureMenuListenerService()
    {
        return $this->services['sc.configure_menu_listener'] = new \CM\ServiceClientBundle\EventListener\ConfigureMenuListener($this);
    }

    /**
     * Gets the 'sc.repository.branch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CM\ServiceClientBundle\Repository\BranchRepository A CM\ServiceClientBundle\Repository\BranchRepository instance
     */
    protected function getSc_Repository_BranchService()
    {
        return $this->services['sc.repository.branch'] = new \CM\ServiceClientBundle\Repository\BranchRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'sc.repository.mail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CM\ServiceClientBundle\Repository\MailRepository A CM\ServiceClientBundle\Repository\MailRepository instance
     */
    protected function getSc_Repository_MailService()
    {
        return $this->services['sc.repository.mail'] = new \CM\ServiceClientBundle\Repository\MailRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'sc.repository.solution' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CM\ServiceClientBundle\Repository\SolutionRepository A CM\ServiceClientBundle\Repository\SolutionRepository instance
     */
    protected function getSc_Repository_SolutionService()
    {
        return $this->services['sc.repository.solution'] = new \CM\ServiceClientBundle\Repository\SolutionRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FaultyProductBundle\\Entity\\User' => array('algorithm' => 'sha512', 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => 13)));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener A Symfony\Bundle\SecurityBundle\EventListener\FirewallListener instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the 'security.firewall.map.context.user_secured_area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_UserSecuredAreaService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['faulty.repository.user']) ? $this->services['faulty.repository.user'] : $this->get('faulty.repository.user')) && false ?: '_'};
        $c = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $d = ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $e = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $f = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $g = ${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'};
        $h = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/login', NULL, array(), array(0 => '176.145.237.59', 1 => '37.58.179.194', 2 => '127.0.0.1', 3 => '192.168.1.7', 4 => '31.36.170.230'));

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/register', NULL, array(), array(0 => '176.145.237.59', 1 => '37.58.179.194', 2 => '127.0.0.1', 3 => '192.168.1.7', 4 => '31.36.170.230'));

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/marketing');

        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/moderate_review');

        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/picture_crawler');

        $o = new \Symfony\Component\HttpFoundation\RequestMatcher('^/faulty');

        $p = new \Symfony\Component\HttpFoundation\RequestMatcher('^/shop');

        $q = new \Symfony\Component\HttpFoundation\RequestMatcher('^/mail_signature');

        $r = new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, array(), array(0 => '176.145.237.59', 1 => '37.58.179.194', 2 => '127.0.0.1', 3 => '192.168.1.7', 4 => '31.36.170.230'));

        $s = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');

        $t = new \Symfony\Component\Security\Http\AccessMap();
        $t->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $t->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $t->add($k, array(0 => 'ROLE_USER'), NULL);
        $t->add($l, array(0 => 'ROLE_USER'), NULL);
        $t->add($m, array(0 => 'ROLE_USER'), NULL);
        $t->add($n, array(0 => 'ROLE_USER'), NULL);
        $t->add($o, array(0 => 'ROLE_USER'), NULL);
        $t->add($p, array(0 => 'ROLE_USER'), NULL);
        $t->add($q, array(0 => 'ROLE_USER'), NULL);
        $t->add($r, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $t->add($s, array(0 => 'ROLE_NO_ACCESS'), NULL);

        $u = new \Symfony\Component\Security\Http\HttpUtils($f, $f);

        $v = new \Symfony\Component\Security\Http\Firewall\LogoutListener($c, $u, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($u, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/user/logout'));
        $v->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $w = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($u, array());
        $w->setOptions(array('login_path' => '/user/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $w->setProviderKey('user_secured_area');

        $x = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($g, $u, array(), $a);
        $x->setOptions(array('login_path' => '/user/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.user_secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($t, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($c, array(0 => new \Symfony\Component\Security\Core\User\ChainUserProvider(array(0 => $b)), 1 => $b), 'user', $a, $d, $e), 2 => $v, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($c, $h, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $u, 'user_secured_area', $w, $x, array('check_path' => '/user/login', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $d, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($c, '595b6943067296.06070238', $a, $h), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($c, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, $t, $h)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($c, $e, $u, 'user_secured_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($g, $u, '/user/login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('user_secured_area', 'security.user_checker', 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db', true, false, 'security.user.provider.concrete.chain_provider', 'user', 'security.authentication.form_entry_point.user_secured_area', NULL, NULL, array(0 => 'logout', 1 => 'form_login', 2 => 'anonymous')));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand(${($_ = isset($this->services['sensio_distribution.security_checker']) ? $this->services['sensio_distribution.security_checker'] : $this->get('sensio_distribution.security_checker')) && false ?: '_'});
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getSerializerService()
    {
        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \FOS\RestBundle\Serializer\Normalizer\FormErrorNormalizer(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}))), NULL), NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, NULL)), array(0 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the 'serializer.mapping.cache.symfony' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter A Symfony\Component\Cache\Adapter\PhpArrayAdapter instance
     */
    protected function getSerializer_Mapping_Cache_SymfonyService()
    {
        return $this->services['serializer.mapping.cache.symfony'] = \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->get('session.storage.native')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'\\app/../var/sessions/dev'));
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener A Symfony\Component\HttpKernel\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /**
     * Gets the 'shop.admin_configure_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ShopBundle\EventListener\ConfigureMenuListener A ShopBundle\EventListener\ConfigureMenuListener instance
     */
    protected function getShop_AdminConfigureMenuListenerService()
    {
        return $this->services['shop.admin_configure_menu_listener'] = new \ShopBundle\EventListener\ConfigureMenuListener($this);
    }

    /**
     * Gets the 'shop.doctrine_banner_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ShopBundle\EventListener\CarouselPictureListener A ShopBundle\EventListener\CarouselPictureListener instance
     */
    protected function getShop_DoctrineBannerListenerService()
    {
        return $this->services['shop.doctrine_banner_listener'] = new \ShopBundle\EventListener\CarouselPictureListener(${($_ = isset($this->services['shop.product_image_uploader']) ? $this->services['shop.product_image_uploader'] : $this->get('shop.product_image_uploader')) && false ?: '_'}, $this);
    }

    /**
     * Gets the 'shop.product_image_uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ShopBundle\Uploader\CarouselPictureUploader A ShopBundle\Uploader\CarouselPictureUploader instance
     */
    protected function getShop_ProductImageUploaderService()
    {
        return $this->services['shop.product_image_uploader'] = new \ShopBundle\Uploader\CarouselPictureUploader(($this->targetDirs[3].'\\app/../web/carousel'));
    }

    /**
     * Gets the 'shop.repository.carousel.picture' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ShopBundle\Repository\CarouselPictureRepository A ShopBundle\Repository\CarouselPictureRepository instance
     */
    protected function getShop_Repository_Carousel_PictureService()
    {
        return $this->services['shop.repository.carousel.picture'] = new \ShopBundle\Repository\CarouselPictureRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'shop.repository.carousel.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ShopBundle\Repository\CarouselProductRepository A ShopBundle\Repository\CarouselProductRepository instance
     */
    protected function getShop_Repository_Carousel_ProductService()
    {
        return $this->services['shop.repository.carousel.product'] = new \ShopBundle\Repository\CarouselProductRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'shop.repository.carousel.video' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ShopBundle\Repository\CarouselVideoRepository A ShopBundle\Repository\CarouselVideoRepository instance
     */
    protected function getShop_Repository_Carousel_VideoService()
    {
        return $this->services['shop.repository.carousel.video'] = new \ShopBundle\Repository\CarouselVideoRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'shop.repository.shopconfiguration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ShopBundle\Repository\ShopConfigurationRepository A ShopBundle\Repository\ShopConfigurationRepository instance
     */
    protected function getShop_Repository_ShopconfigurationService()
    {
        return $this->services['shop.repository.shopconfiguration'] = new \ShopBundle\Repository\ShopConfigurationRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->get('swiftmailer.mailer.default.transport')) && false ?: '_'});
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default.spool']) ? $this->services['swiftmailer.mailer.default.spool'] : $this->get('swiftmailer.mailer.default.spool')) && false ?: '_'});

        $instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.default.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] : $this->get('swiftmailer.mailer.default.plugin.messagelogger')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'symfony3serverload.example' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Rem42\Bundle\ServerLoadBundle\Command\ServerLoadCommand A Rem42\Bundle\ServerLoadBundle\Command\ServerLoadCommand instance
     */
    protected function getSymfony3serverload_ExampleService()
    {
        return $this->services['symfony3serverload.example'] = new \Rem42\Bundle\ServerLoadBundle\Command\ServerLoadCommand();
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the 'tinypng.command_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tinypng\Bundle\EventListener\CommandListener A Tinypng\Bundle\EventListener\CommandListener instance
     */
    protected function getTinypng_CommandListenerService()
    {
        $this->services['tinypng.command_listener'] = $instance = new \Tinypng\Bundle\EventListener\CommandListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'tinypng.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tinypng\Bundle\EventListener\RequestListener A Tinypng\Bundle\EventListener\RequestListener instance
     */
    protected function getTinypng_RequestListenerService()
    {
        $this->services['tinypng.request_listener'] = $instance = new \Tinypng\Bundle\EventListener\RequestListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator A Symfony\Component\Translation\IdentityTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator(new \Symfony\Component\Translation\MessageSelector());
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig\Environment A Twig\Environment instance
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};
        $d = ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'};

        $e = new \Knp\Menu\Util\MenuManipulator();

        $f = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $f->setDisplayOptions(array('fileLinkFormat' => $b));

        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('dev');
        $h->setDebug(true);
        if ($this->has('security.token_storage')) {
            $h->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $h->setRequestStack($c);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'MarketingBundle:Form:field.html.twig'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'\\app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->get('knp_menu.renderer_provider')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->get('knp_menu.menu_provider')) && false ?: '_'}, $e, $d), $d, $e));
        $instance->addExtension(${($_ = isset($this->services['knp_paginator.twig.extension.pagination']) ? $this->services['knp_paginator.twig.extension.pagination'] : $this->get('knp_paginator.twig.extension.pagination')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['zurb_ink.inlinecss.twig']) ? $this->services['zurb_ink.inlinecss.twig'] : $this->get('zurb_ink.inlinecss.twig')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['zurb_ink.inky.twig']) ? $this->services['zurb_ink.inky.twig'] : $this->get('zurb_ink.inky.twig')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['css_to_inline_email_twig_extension']) ? $this->services['css_to_inline_email_twig_extension'] : $this->get('css_to_inline_email_twig_extension')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['twig.extension.image']) ? $this->services['twig.extension.image'] : $this->get('twig.extension.image')) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, $f));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        $instance->addGlobal('ga_tracking', NULL);
        $instance->addGlobal('tag_manager', NULL);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'twig.extension.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\ImageBundle\Extensions\ImageTwig A Gregwar\ImageBundle\Extensions\ImageTwig instance
     */
    protected function getTwig_Extension_ImageService()
    {
        return $this->services['twig.extension.image'] = new \Gregwar\ImageBundle\Extensions\ImageTwig(${($_ = isset($this->services['image.handling']) ? $this->services['image.handling'] : $this->get('image.handling')) && false ?: '_'}, ($this->targetDirs[3].'\\app/../web'));
    }

    /**
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'MarketingBundle:Form:field.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $instance->addPath(($this->targetDirs[3].'\\src\\Unicorn\\Bundle\\UserBundle/Resources/views'), 'User');
        $instance->addPath(($this->targetDirs[3].'\\src\\MarketingBundle/Resources/views'), 'Marketing');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views'), 'HampeZurbInk');
        $instance->addPath(($this->targetDirs[3].'\\src\\ModerateReviewBundle/Resources/views'), 'ModerateReview');
        $instance->addPath(($this->targetDirs[3].'\\src\\PictureCrawlerBundle/Resources/views'), 'PictureCrawler');
        $instance->addPath(($this->targetDirs[3].'\\src\\ShopBundle/Resources/views'), 'Shop');
        $instance->addPath(($this->targetDirs[3].'\\src\\FaultyProductBundle/Resources/views'), 'FaultyProduct');
        $instance->addPath(($this->targetDirs[3].'\\src\\MailSignatureBundle/Resources/views'), 'MailSignature');
        $instance->addPath(($this->targetDirs[3].'\\src\\CM\\ServiceClientBundle/Resources/views'), 'ServiceClient');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig\Profiler\Profile A Twig\Profiler\Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the 'twig.runtime.httpkernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime A Symfony\Bridge\Twig\Extension\HttpKernelRuntime instance
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /**
     * Gets the 'unicorn_user.entity.roles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Unicorn\Bundle\UserBundle\Entity\RolesHelper A Unicorn\Bundle\UserBundle\Entity\RolesHelper instance
     */
    protected function getUnicornUser_Entity_RolesService()
    {
        return $this->services['unicorn_user.entity.roles'] = new \Unicorn\Bundle\UserBundle\Entity\RolesHelper(array('ROLE_NEWSLETTER' => array(0 => 'ROLE_USER'), 'ROLE_MODERATE_REVIEW' => array(0 => 'ROLE_USER'), 'ROLE_FAULTY' => array(0 => 'ROLE_USER'), 'ROLE_MAIL_SIGNATURE' => array(0 => 'ROLE_USER'), 'ROLE_SHOP' => array(0 => 'ROLE_USER'), 'ROLE_ADMIN' => array(0 => 'ROLE_NEWSLETTER', 1 => 'ROLE_MODERATE_REVIEW', 2 => 'ROLE_FAULTY', 3 => 'ROLE_MAIL_SIGNATURE', 4 => 'ROLE_SHOP'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'unicorn_user.repository.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Unicorn\Bundle\UserBundle\Repository\UserRepository A Unicorn\Bundle\UserBundle\Repository\UserRepository instance
     */
    protected function getUnicornUser_Repository_UserService()
    {
        return $this->services['unicorn_user.repository.user'] = new \Unicorn\Bundle\UserBundle\Repository\UserRepository(${($_ = isset($this->services['doctrine.orm.marketing_entity_manager']) ? $this->services['doctrine.orm.marketing_entity_manager'] : $this->get('doctrine.orm.marketing_entity_manager')) && false ?: '_'}, $this, 'FaultyProductBundle\\Entity\\User');
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('D3YqqxyFeB9YVthfmJTVSMGwLtLS9S');
    }

    /**
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->get('doctrine.orm.validator_initializer')) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.cache' => array(0 => 'cache', 1 => '@WebProfiler/Collector/cache.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'}, $this->targetDirs[3]);
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the 'zurb_ink.inky' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hampe\Inky\Inky A Hampe\Inky\Inky instance
     */
    protected function getZurbInk_InkyService()
    {
        return $this->services['zurb_ink.inky'] = new \Hampe\Inky\Inky(12, array());
    }

    /**
     * Gets the 'zurb_ink.inky.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hampe\Bundle\ZurbInkBundle\Twig\InkyExtension A Hampe\Bundle\ZurbInkBundle\Twig\InkyExtension instance
     */
    protected function getZurbInk_Inky_TwigService()
    {
        return $this->services['zurb_ink.inky.twig'] = new \Hampe\Bundle\ZurbInkBundle\Twig\InkyExtension(${($_ = isset($this->services['zurb_ink.inky']) ? $this->services['zurb_ink.inky'] : $this->get('zurb_ink.inky')) && false ?: '_'});
    }

    /**
     * Gets the 'zurb_ink.inlinecss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hampe\Bundle\ZurbInkBundle\Service\InlineCss A Hampe\Bundle\ZurbInkBundle\Service\InlineCss instance
     */
    protected function getZurbInk_InlinecssService()
    {
        return $this->services['zurb_ink.inlinecss'] = new \Hampe\Bundle\ZurbInkBundle\Service\InlineCss();
    }

    /**
     * Gets the 'zurb_ink.inlinecss.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hampe\Bundle\ZurbInkBundle\Twig\InlineCssExtension A Hampe\Bundle\ZurbInkBundle\Twig\InlineCssExtension instance
     */
    protected function getZurbInk_Inlinecss_TwigService()
    {
        return $this->services['zurb_ink.inlinecss.twig'] = new \Hampe\Bundle\ZurbInkBundle\Twig\InlineCssExtension(${($_ = isset($this->services['zurb_ink.inlinecss']) ? $this->services['zurb_ink.inlinecss'] : $this->get('zurb_ink.inlinecss')) && false ?: '_'}, ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'});
    }

    /**
     * Gets the '1_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker A Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker instance
     */
    protected function get1528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5cService()
    {
        return $this->services['1_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the '2_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker A Symfony\Component\Config\Resource\SelfCheckingResourceChecker instance
     */
    protected function get2528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5cService()
    {
        return $this->services['2_528d6bacf2faab890f835523882b3518096e584072470344988573ee686ddf5c'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the 'argument_resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver instance
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the 'argument_resolver.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver instance
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the 'argument_resolver.request_attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver instance
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the 'argument_resolver.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver instance
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array()));
    }

    /**
     * Gets the 'argument_resolver.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver instance
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the 'argument_resolver.variadic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver instance
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the 'cache.annotations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter A Symfony\Component\Cache\Adapter\TraceableAdapter instance
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.annotations.recorder_inner']) ? $this->services['cache.annotations.recorder_inner'] : $this->getCache_Annotations_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the 'cache.annotations.recorder_inner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_Annotations_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('QemlUWULeZ', 0, 'nQH6-J5TSGdwSlDtzlLQwN', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'cache.app.recorder_inner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_App_RecorderInnerService($lazyLoad = true)
    {
        $this->services['cache.app.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('X06esO90Xg', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /**
     * Gets the 'cache.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter A Symfony\Component\Cache\Adapter\TraceableAdapter instance
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.serializer.recorder_inner']) ? $this->services['cache.serializer.recorder_inner'] : $this->getCache_Serializer_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the 'cache.serializer.recorder_inner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_Serializer_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('mi4J1tT7oW', 0, 'nQH6-J5TSGdwSlDtzlLQwN', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'cache.system.recorder_inner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_System_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('gAB2ogJIRz', 0, 'nQH6-J5TSGdwSlDtzlLQwN', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'cache.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter A Symfony\Component\Cache\Adapter\TraceableAdapter instance
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.validator.recorder_inner']) ? $this->services['cache.validator.recorder_inner'] : $this->getCache_Validator_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the 'cache.validator.recorder_inner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_Validator_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('LjL1EW4zgF', 0, 'nQH6-J5TSGdwSlDtzlLQwN', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'console.error_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener A Symfony\Component\Console\EventListener\ErrorListener instance
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the 'debug.file_link_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter A Symfony\Component\HttpKernel\Debug\FileLinkFormatter instance
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the 'debug.log_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor A Symfony\Bridge\Monolog\Processor\DebugProcessor instance
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the 'debug.security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager A Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager instance
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->getSecurity_Access_RoleHierarchyVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the 'doctrine.dbal.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bridge\Doctrine\Logger\DbalLogger A Symfony\Bridge\Doctrine\Logger\DbalLogger instance
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        return $this->services['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.cm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_CmService()
    {
        return $this->services['doctrine.dbal.logger.profiling.cm'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.marketing' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_MarketingService()
    {
        return $this->services['doctrine.dbal.logger.profiling.marketing'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'doctrine.orm.naming_strategy.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\ORM\Mapping\UnderscoreNamingStrategy A Doctrine\ORM\Mapping\UnderscoreNamingStrategy instance
     */
    protected function getDoctrine_Orm_NamingStrategy_UnderscoreService()
    {
        return $this->services['doctrine.orm.naming_strategy.underscore'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy();
    }

    /**
     * Gets the 'doctrine.orm.quote_strategy.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\ORM\Mapping\DefaultQuoteStrategy A Doctrine\ORM\Mapping\DefaultQuoteStrategy instance
     */
    protected function getDoctrine_Orm_QuoteStrategy_DefaultService()
    {
        return $this->services['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy();
    }

    /**
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators');
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\RestBundle\Request\ParamReader A FOS\RestBundle\Request\ParamReader instance
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the 'resolve_controller_name_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber A Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber instance
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.authenticated_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter A Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter instance
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /**
     * Gets the 'security.access.expression_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter A Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter instance
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the 'security.access.role_hierarchy_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter A Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter instance
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->services['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.user_secured_area']) ? $this->services['security.authentication.provider.dao.user_secured_area'] : $this->getSecurity_Authentication_Provider_Dao_UserSecuredAreaService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.user_secured_area']) ? $this->services['security.authentication.provider.anonymous.user_secured_area'] : $this->getSecurity_Authentication_Provider_Anonymous_UserSecuredAreaService()) && false ?: '_'};
        }, 2), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'security.authentication.provider.anonymous.user_secured_area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider A Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider instance
     */
    protected function getSecurity_Authentication_Provider_Anonymous_UserSecuredAreaService()
    {
        return $this->services['security.authentication.provider.anonymous.user_secured_area'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('595b6943067296.06070238');
    }

    /**
     * Gets the 'security.authentication.provider.dao.user_secured_area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider A Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider instance
     */
    protected function getSecurity_Authentication_Provider_Dao_UserSecuredAreaService()
    {
        return $this->services['security.authentication.provider.dao.user_secured_area'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['faulty.repository.user']) ? $this->services['faulty.repository.user'] : $this->get('faulty.repository.user')) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'user_secured_area', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, true);
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.firewall.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap A Symfony\Bundle\SecurityBundle\Security\FirewallMap instance
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.user_secured_area' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.user_secured_area']) ? $this->services['security.firewall.map.context.user_secured_area'] : $this->get('security.firewall.map.context.user_secured_area')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.user_secured_area' => ${($_ = isset($this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db']) ? $this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db'] : $this->getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService()) && false ?: '_'};
        }, 1));
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->registerListener('user_secured_area', '/user/logout', 'logout', '_csrf_token', NULL, 'user');

        return $instance;
    }

    /**
     * Gets the 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher A Symfony\Component\HttpFoundation\RequestMatcher instance
     */
    protected function getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService()
    {
        return $this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_NEWSLETTER' => array(0 => 'ROLE_USER'), 'ROLE_MODERATE_REVIEW' => array(0 => 'ROLE_USER'), 'ROLE_FAULTY' => array(0 => 'ROLE_USER'), 'ROLE_MAIL_SIGNATURE' => array(0 => 'ROLE_USER'), 'ROLE_SHOP' => array(0 => 'ROLE_USER'), 'ROLE_ADMIN' => array(0 => 'ROLE_NEWSLETTER', 1 => 'ROLE_MODERATE_REVIEW', 2 => 'ROLE_FAULTY', 3 => 'ROLE_MAIL_SIGNATURE', 4 => 'ROLE_SHOP'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'security.user_value_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver A Symfony\Bundle\SecurityBundle\SecurityUserValueResolver instance
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /**
     * Gets the 'service_locator.e64d23c3bf770e2cf44b71643280668d' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator A Symfony\Component\DependencyInjection\ServiceLocator instance
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
    }

    /**
     * Gets the 'web_profiler.csp.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler A Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler instance
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'banner_directory' => false,
        'carousel_directory' => false,
        'product_directory' => false,
        'faulty_image_product_directory' => false,
        'folder_img' => false,
        'folder_upload' => false,
        'folder_img_base' => false,
        'folder_cm_base' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'gregwar_image.web_dir' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'KnpPaginatorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ),
                'UserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\Unicorn\\Bundle\\UserBundle'),
                    'namespace' => 'Unicorn\\Bundle\\UserBundle',
                ),
                'MarketingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\MarketingBundle'),
                    'namespace' => 'MarketingBundle',
                ),
                'IQ2iPrestaShopWebServiceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\iq2i\\prestashop-webservice-bundle\\IQ2i\\PrestaShopWebServiceBundle'),
                    'namespace' => 'IQ2i\\PrestaShopWebServiceBundle',
                ),
                'FOSJsRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ),
                'HampeZurbInkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle'),
                    'namespace' => 'Hampe\\Bundle\\ZurbInkBundle',
                ),
                'RobertoTruToInlineStyleEmailBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\robertotru\\to-inline-style-email-bundle'),
                    'namespace' => 'RobertoTru\\ToInlineStyleEmailBundle',
                ),
                'GregwarImageBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\gregwar\\image-bundle\\Gregwar\\ImageBundle'),
                    'namespace' => 'Gregwar\\ImageBundle',
                ),
                'ModerateReviewBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\ModerateReviewBundle'),
                    'namespace' => 'ModerateReviewBundle',
                ),
                'PictureCrawlerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PictureCrawlerBundle'),
                    'namespace' => 'PictureCrawlerBundle',
                ),
                'ShopBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\ShopBundle'),
                    'namespace' => 'ShopBundle',
                ),
                'FaultyProductBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\FaultyProductBundle'),
                    'namespace' => 'FaultyProductBundle',
                ),
                'MailSignatureBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\MailSignatureBundle'),
                    'namespace' => 'MailSignatureBundle',
                ),
                'TinypngBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\loevgaard\\tinypng-bundle'),
                    'namespace' => 'Tinypng\\Bundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'ServiceClientBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\CM\\ServiceClientBundle'),
                    'namespace' => 'CM\\ServiceClientBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'ServerLoadBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\rem42\\server-load-bundle'),
                    'namespace' => 'Rem42\\Bundle\\ServerLoadBundle',
                ),
            ); break;
            case 'banner_directory': $value = ($this->targetDirs[3].'\\app/../web/upload'); break;
            case 'carousel_directory': $value = ($this->targetDirs[3].'\\app/../web/carousel'); break;
            case 'product_directory': $value = ($this->targetDirs[3].'\\app/../web/upload'); break;
            case 'faulty_image_product_directory': $value = ($this->targetDirs[3].'\\app/../web/faulty'); break;
            case 'folder_img': $value = ($this->targetDirs[3].'\\app/../../cadeau-maestro/www/img/newsletter/news/'); break;
            case 'folder_upload': $value = ($this->targetDirs[3].'\\app/../web/upload/'); break;
            case 'folder_img_base': $value = ($this->targetDirs[3].'\\app/../../maestro/img'); break;
            case 'folder_cm_base': $value = ($this->targetDirs[3].'\\app/../../maestro/'); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'\\app/../var/sessions/dev'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'\\app/config/routing_dev.yml'); break;
            case 'gregwar_image.web_dir': $value = ($this->targetDirs[3].'\\app/../web'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'UserBundle' => 'Unicorn\\Bundle\\UserBundle\\UserBundle',
                'MarketingBundle' => 'MarketingBundle\\MarketingBundle',
                'IQ2iPrestaShopWebServiceBundle' => 'IQ2i\\PrestaShopWebServiceBundle\\IQ2iPrestaShopWebServiceBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'HampeZurbInkBundle' => 'Hampe\\Bundle\\ZurbInkBundle\\HampeZurbInkBundle',
                'RobertoTruToInlineStyleEmailBundle' => 'RobertoTru\\ToInlineStyleEmailBundle\\RobertoTruToInlineStyleEmailBundle',
                'GregwarImageBundle' => 'Gregwar\\ImageBundle\\GregwarImageBundle',
                'ModerateReviewBundle' => 'ModerateReviewBundle\\ModerateReviewBundle',
                'PictureCrawlerBundle' => 'PictureCrawlerBundle\\PictureCrawlerBundle',
                'ShopBundle' => 'ShopBundle\\ShopBundle',
                'FaultyProductBundle' => 'FaultyProductBundle\\FaultyProductBundle',
                'MailSignatureBundle' => 'MailSignatureBundle\\MailSignatureBundle',
                'TinypngBundle' => 'Tinypng\\Bundle\\TinypngBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'ServiceClientBundle' => 'CM\\ServiceClientBundle\\ServiceClientBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'ServerLoadBundle' => 'Rem42\\Bundle\\ServerLoadBundle\\ServerLoadBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'url_host' => 'http://tools.cadeau-maestro.com/',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'cm_divers',
            'database_user' => 'cm_divers',
            'database_password' => 'FVezV1RvEZA',
            'database_host2' => '127.0.0.1',
            'database_port2' => NULL,
            'database_name2' => 'cadeaumaestro_prod',
            'database_user2' => 'cadeau_prod',
            'database_password2' => 'Jnd671fARFv12',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'D3YqqxyFeB9YVthfmJTVSMGwLtLS9S',
            'ga_tracking' => NULL,
            'tag_manager' => NULL,
            'locale' => 'fr',
            'url_base' => 'http://www.cadeau-maestro.local/',
            'url_base_bod' => 'http://bo.cadeau-maestro.local/',
            'url_img' => 'http://www.cadeau-maestro.local/img/newsletter/news/',
            'url_upload' => 'http://marketing.local/upload/',
            'url_upload_image_product' => 'http://marketing.local/faulty/',
            'url_upload_image_carousel' => 'http://tools.cadeau-maestro.com/carousel/',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'D3YqqxyFeB9YVthfmJTVSMGwLtLS9S',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'fr',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.file' => (__DIR__.'/serialization.php'),
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_NEWSLETTER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_MODERATE_REVIEW' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_FAULTY' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_MAIL_SIGNATURE' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SHOP' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_NEWSLETTER',
                    1 => 'ROLE_MODERATE_REVIEW',
                    2 => 'ROLE_FAULTY',
                    3 => 'ROLE_MAIL_SIGNATURE',
                    4 => 'ROLE_SHOP',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'MarketingBundle:Form:field.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'marketing' => 'doctrine.orm.marketing_entity_manager',
                'cm' => 'doctrine.orm.cm_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'marketing',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'marketing' => 'doctrine.dbal.marketing_connection',
                'cm' => 'doctrine.dbal.cm_connection',
            ),
            'doctrine.default_connection' => 'marketing',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'KnpMenuBundle::menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'unicorn_user.user_entity' => 'FaultyProductBundle\\Entity\\User',
            'unicorn_user.user_repository' => 'faulty.repository.user',
            'unicorn_user.user_require_activate' => false,
            'unicorn_user.hard_delete' => false,
            'unicorn_user.can_register' => true,
            'unicorn_user.ga_analytics' => NULL,
            'unicorn_user.ga_tag_manager' => NULL,
            'iq2i_prestashop_web_service.url' => 'http://www.cadeau-maestro.local',
            'iq2i_prestashop_web_service.key' => 'KSWP3L85YX13OIURBU7P1P48FZGX372K',
            'iq2i_prestashop_web_service.debug' => false,
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'zurb_ink.inlinecss.class' => 'Hampe\\Bundle\\ZurbInkBundle\\Service\\InlineCss',
            'zurb_ink.inlinecss.twig.class' => 'Hampe\\Bundle\\ZurbInkBundle\\Twig\\InlineCssExtension',
            'zurb_ink.inky.twig.class' => 'Hampe\\Bundle\\ZurbInkBundle\\Twig\\InkyExtension',
            'zurb_ink.inky.class' => 'Hampe\\Inky\\Inky',
            'zurb_ink.inky.gridcolumns' => 12,
            'zurb_ink.inky.componentfactories' => array(

            ),
            'css_to_inline_email_converter.class' => 'RobertoTru\\ToInlineStyleEmailBundle\\Converter\\ToInlineStyleEmailConverter',
            'css_to_inline_email_twig_extension.class' => 'RobertoTru\\ToInlineStyleEmailBundle\\Twig\\InlineCssExtension',
            'gregwar_image.cache_dir' => 'cache',
            'gregwar_image.cache_dir_mode' => NULL,
            'gregwar_image.throw_exception' => true,
            'gregwar_image.fallback_image' => NULL,
            'image.handling.class' => 'Gregwar\\ImageBundle\\Services\\ImageHandling',
            'image.handler.class' => 'Gregwar\\ImageBundle\\ImageHandler',
            'tinypng.api_key' => 'G7jQldFODSTiN0mbdlWuvFc5hbu_rSZd',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'rem42_server_load.host' => 'marketing.dev',
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.faultyproductbundle_command_faultyreportmail' => 'faulty.command.reportmail',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.rem42_bundle_serverloadbundle_command_serverloadcommand' => 'symfony3serverload.example',
            ),
        );
    }
}
