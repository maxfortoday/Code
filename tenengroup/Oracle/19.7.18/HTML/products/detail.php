<rn:meta title="#rn:php:\RightNow\Libraries\SEO::getDynamicTitle('product', \RightNow\Utils\Url::getParameter('p'))#" template="standard_mnn.php" clickstream="product"/>
<div class="rn_Container category-result-head">    
    <div class="rn_ProductHero">
        <h1>
            <rn:condition url_parameter_check="c != null">
                <rn:field name="ServiceCategory.Name"/>
            <rn:condition_else/>
                #rn:msg:PRODUCT_NOT_FOUND_LBL#
            </rn:condition>
        </h1>
    </div>

    <div class="rn_PageContent rn_Product rn_ContentDetail">
        <div class="rn_PopularKB">
            <div class="rn_Container">
                <rn:widget path="reports/TopAnswers" show_excerpt="true" per_page="10" category_filter_id="#rn:url_param_value:c#" />
                <a class="rn_AnswersLink" href="/app/answers/list/c/#rn:url_param_value:c#/#rn:session#">#rn:msg:SHOW_MORE_PUBLISHED_ANSWERS_FOR_LBL# <rn:field name="ServiceCategory.Name"/></a>
            </div>
        </div>
    </div>

    <aside class="rn_SideRail detailSide" role="complementary">
        <div class="category-list-right">
            <rn:widget path="search/ProductCategoryList" data_type="categories" maximum_descendants="1"  only_display="#rn:msg:CUSTOM_MSG_RESULT_PAGE_CATEGORIES_NUMBERS#" label_title=" #rn:msg:CUSTOM_MSG_HELP_CENTER_CATEGORIES_LIST_TITLE#" report_page_url="/app/products/detail" />
        </div>
        <div class="top-answers-right">
            <div class="rn_Title"><h3>#rn:msg:CUSTOM_MSG_HELP_CENTER_TOP_ANSWERS_TITLE#</h3></div>
            <rn:widget path="reports/TopAnswers" limit="6" />
        </div>
        <div class="rn_ContactUs">
        <div class="rn_Well">
            <h2>#rn:msg:CUSTOM_MSG_CONTACTUS_HEADER#</h2>
            <div class="rn_QuestionLink">
            <a href="#rn:msg:CUSTOM_MSG_CONTACTUS_LINK#" target="_top">#rn:msg:CUSTOM_MSG_CONTACTUS_LINK_LABEL#</a>
            </div>           
        </div>
        </div>
            <!-- <rn:widget path="utils/ContactUs" channels="question" question_link="#rn:msg:CUSTOM_MSG_CONTACTUS_LINK#" label_header="#rn:msg:CUSTOM_MSG_CONTACTUS_HEADER#" question_label="#rn:msg:CUSTOM_MSG_CONTACTUS_LINK_LABEL#"/> -->
    </aside>
</div>

<div class="back-home"><a href="/app/home"><img src="./images/icons/back_home_icon.png" alt=""><span>#rn:msg:CUSTOM_MSG_BACK_HOME#</span></a></div>