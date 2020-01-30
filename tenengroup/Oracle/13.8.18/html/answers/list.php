<rn:meta title="#rn:msg:FIND_ANS_HDG#" template="standard_mnn.php" clickstream="answer_list"/>
<rn:widget path="navigation/ProductCategoryBreadcrumb" />
<rn:condition url_parameter_check="kw != null">
   
    <div class="rn_Container">
        <div class="rn_PageContent rn_ContentDetail rn_KBAnswerList">
            <rn:condition flashdata_value_for="info">
                <div class="rn_MessageBox rn_InfoMessage">
                    #rn:flashdata:info#
                </div>
            </rn:condition>

            <rn:container source_id="KFSearch" per_page="10" history_source_id="KFSearch">
            <div>
                <h1 class="answers-list-title">
                    <rn:widget path="reports/ResultInfo" label_results_search_query="<span style='display: none;'><span>%d</span> - <span>%d</span> of</span><span>%d</span> results were found for the search  %s" />
                </h1>
                <rn:widget path="searchsource/SourceResultListing" more_link_url="" hide_when_no_results="true" truncate_size=150 />
                <!-- <rn:widget path="reports/Multiline" hide_when_no_results="false" truncate_size=150 show_answer_update_date_field="false"  hide_columns="answers.updated" /> -->
                <rn:widget path="searchsource/SourcePagination"/>
            </div>
            </rn:container>
        </div>

        <aside class="rn_SideRail " role="complementary">
            <div class="category-list-right">
            <rn:widget path="search/ProductCategoryList" data_type="categories" maximum_descendants="1" only_display="#rn:msg:CUSTOM_MSG_RESULT_PAGE_CATEGORIES_NUMBERS#" label_title=" #rn:msg:CUSTOM_MSG_HELP_CENTER_CATEGORIES_LIST_TITLE#" report_page_url="/app/products/detail" />
            </div>
            <div class="top-answers-right">
                <div class="rn_Title"><h3>#rn:msg:CUSTOM_MSG_HELP_CENTER_TOP_ANSWERS_TITLE#</h3></div>
                <rn:widget path="reports/TopAnswers" limit="6" />
            </div>

        </aside>
        
    </div>
<rn:condition_else/>
    <rn:container report_id="176">
    
    <div class="rn_Container">
        <div class="rn_PageContent rn_ContentDetail rn_KBAnswerList">
            <div>
                <rn:widget path="reports/ResultInfo" show_no_results_msg_without_search_term="true"/>
                <rn:widget path="reports/Multiline" hide_columns="answers.updated" show_answer_update_date_field="false" />
                <rn:widget path="reports/Paginator"/>
            </div>
        </div>
        <aside class="rn_SideRail " role="complementary">
            <div class="category-list-right">
                <rn:widget path="search/ProductCategoryList" data_type="categories" maximum_descendants="1" only_display="#rn:msg:CUSTOM_MSG_RESULT_PAGE_CATEGORIES_NUMBERS#" label_title=" #rn:msg:CUSTOM_MSG_HELP_CENTER_CATEGORIES_LIST_TITLE#" report_page_url="/app/products/detail" />
            </div>
            <div class="top-answers-right">
                <div class="rn_Title"><h3>#rn:msg:CUSTOM_MSG_HELP_CENTER_TOP_ANSWERS_TITLE#</h3></div>
                <rn:widget path="reports/TopAnswers" limit="6" />
            </div>

        </aside>
       
    </div>
    </rn:container>
</rn:condition>

<div class="back-home"><a href="/app/home"><img src="./images/icons/back_home_icon.png" alt=""><span>#rn:msg:CUSTOM_MSG_BACK_HOME#</span></a></div>
