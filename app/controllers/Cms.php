<?php

class CmsController extends _BaseController {

    public function slideshowAction() {
        $cms = new Cms();
        $slides = $cms->getSlide();

        $this->responeJSON($slides);
    }

    public function newsAction() {
        $req_params = $this->getRawData(true);
        $cms = new Cms();
        $news = $cms->getNews($req_params);

        $this->responeJSON($news);
    }

    public function contactAction() {
        $cms = new Cms();
        $contact = $cms->getContact();

        $this->responeJSON($contact);
    }
}
