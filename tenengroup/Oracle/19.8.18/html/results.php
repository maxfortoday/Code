<rn:meta title="#rn:msg:FIND_ANSWERS_AND_DISCUSSIONS_LBL#" template="standard_mnn.php" clickstream="answer_list"/>

<div class="rn_Container">
    <div class="rn_PageContent rn_ResultList">
        <div class="rn_KBAnswerResults">
            <rn:container source_id="KFSearch" per_page="5">
                <rn:widget path="searchsource/SourceResultDetails"/>
                <rn:widget path="searchsource/SourceResultListing" label_heading="#rn:msg:PUBLISHED_ANSWERS_LBL#"/>
            </rn:container>
        </div>
    </div>
</div>
