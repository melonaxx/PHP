<?php
class front_assembly
{/*{{{*/
    public function setup()
    {/*{{{*/
        CommonAssembly::setup();
//        XAop::pos(XAop::LOGIC)->append_by_dismatch_name("login", new QucAuthorization());
        XAop::pos(XAop::TPL  )->append_by_match_name(".*", new FntView());
        XAop::pos(XAop::ERROR)->append_by_match_name(".*", new FntUserInputErrorPoc());
        XAop::pos(XAop::ROOT_ERROR)->append_by_match_name(".*", new FntErrorPoc());
    }/*}}}*/
}/*}}}*/
