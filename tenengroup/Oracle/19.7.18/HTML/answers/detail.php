<rn:meta title="#rn:php:\RightNow\Libraries\SEO::getDynamicTitle('answer', \RightNow\Utils\Url::getParameter('a_id'))#" template="standard_mnn.php" answer_details="true" clickstream="answer_view"/>

<article itemscope itemtype="http://schema.org/Article" class="rn_Container">
    
    <div class="rn_ContentDetail">
        <div class="rn_PageTitle rn_RecordDetail">
            <rn:widget path="navigation/ProductCategoryBreadcrumb" type="category"   />
            <h1 class="rn_Summary" itemprop="name"><rn:field name="Answer.Summary" highlight="true"/></h1>
            <div class="rn_AnswerQuestion">
                <rn:field name="Answer.Question" highlight="true"/>
            </div>
        </div>

        <div class="rn_PageContent rn_RecordDetail">
            <div class="rn_RecordText rn_AnswerText" itemprop="articleBody">
                <rn:field name="Answer.Solution" highlight="true"/>
            </div>
            <rn:widget path="knowledgebase/GuidedAssistant"/>
            <div class="rn_FileAttach">
                <rn:widget path="output/DataDisplay" name="Answer.FileAttachments" label="#rn:msg:ATTACHMENTS_LBL#"/>
            </div>
            <rn:widget path="feedback/AnswerFeedback" label_title="#rn:msg:IS_THIS_ANSWER_HELPFUL_LBL#" options_count=5 use_rank_labels="true" dialog_threshold="0" feedback_page_url="/app/ask-us" label_feedback_thanks="#rn:msg:CUSTOM_MSG_THANKS_FOR_YOUR_FEEDBACK_MSG#" />
        </div>
    </div>

    <aside class="rn_SideRail detailSide" role="complementary">
        <rn:widget path="knowledgebase/RelatedAnswers" label_title="#rn:msg:CUSTOM_MSG_RELATED_ANSWERS_TITLE#" limit="10" />
        <rn:widget path="utils/ContactUs" channels="question" question_link="#rn:msg:CUSTOM_MSG_CONTACTUS_LINK#" label_header="#rn:msg:CUSTOM_MSG_CONTACTUS_HEADER#" question_label="#rn:msg:CUSTOM_MSG_CONTACTUS_LINK_LABEL#"/>
    </aside>
</article>

<div class="back-home"><a href="/app/home"><img src="./images/icons/back_home_icon.png" alt=""><span>#rn:msg:CUSTOM_MSG_BACK_HOME#</span></a></div>

<script>
    var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );
    $('.rn_RatingButtons').on('click','button', function(){
        $('.rn_AnswerFeedbackControl').find('.rn_Title').hide();
        if (iOS) {
            var pos = $('.rn_AnswerFeedback').position().top;
            window.parent.postMessage('Position_' + pos,"*");
        };
    });
    $('.rn_QuestionLink').find(' > a').attr('target', '_top');
</script>