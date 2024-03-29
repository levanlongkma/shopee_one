<style id="style_ladi" type="text/css">
    a,
    abbr,
    acronym,
    address,
    applet,
    article,
    aside,
    audio,
    b,
    big,
    blockquote,
    body,
    button,
    canvas,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    embed,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    html,
    i,
    iframe,
    img,
    input,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    output,
    p,
    pre,
    q,
    ruby,
    s,
    samp,
    section,
    select,
    small,
    span,
    strike,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    textarea,
    tfoot,
    th,
    thead,
    time,
    tr,
    tt,
    u,
    ul,
    var,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block
    }

    body {
        line-height: 1
    }

    a {
        text-decoration: none
    }

    ol,
    ul {
        list-style: none
    }

    blockquote,
    q {
        quotes: none
    }

    blockquote:after,
    blockquote:before,
    q:after,
    q:before {
        content: '';
        content: none
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    body {
        font-size: 12px;
        -ms-text-size-adjust: none;
        -moz-text-size-adjust: none;
        -o-text-size-adjust: none;
        -webkit-text-size-adjust: none;
        background: #fff
    }

    .overflow-hidden {
        overflow: hidden
    }

    .ladi-transition {
        transition: all 150ms linear 0s
    }

    .ladipage-message {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1000000000;
        background: rgba(0, 0, 0, .3)
    }

    .ladipage-message .ladipage-message-box {
        width: 400px;
        max-width: calc(100% - 50px);
        height: 160px;
        border: 1px solid rgba(0, 0, 0, .3);
        background-color: #fff;
        position: fixed;
        top: calc(50% - 155px);
        left: 0;
        right: 0;
        margin: auto;
        border-radius: 10px
    }

    .ladipage-message .ladipage-message-box h1 {
        background-color: rgba(6, 21, 40, .05);
        color: #000;
        padding: 12px 15px;
        font-weight: 600;
        font-size: 16px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px
    }

    .ladipage-message .ladipage-message-box .ladipage-message-text {
        font-size: 14px;
        padding: 0 20px;
        margin-top: 10px;
        line-height: 18px;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box
    }

    .ladipage-message .ladipage-message-box .ladipage-message-close {
        display: block;
        position: absolute;
        right: 15px;
        bottom: 10px;
        margin: 0 auto;
        padding: 10px 0;
        border: none;
        width: 80px;
        text-transform: uppercase;
        text-align: center;
        color: #000;
        background-color: #e6e6e6;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer
    }

    .ladi-wraper {
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .ladi-section {
        margin: 0 auto;
        position: relative
    }

    .ladi-section .ladi-section-arrow-down {
        position: absolute;
        width: 36px;
        height: 30px;
        bottom: 0;
        right: 0;
        left: 0;
        margin: auto;
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        background-position: 4px;
        cursor: pointer;
        z-index: 90000040
    }

    .ladi-section.ladi-section-readmore {
        transition: height 350ms linear 0s
    }

    .ladi-section .ladi-section-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none
    }

    .ladi-container {
        position: relative;
        margin: 0 auto;
        height: 100%
    }

    .ladi-element {
        position: absolute
    }

    .ladi-overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        pointer-events: none
    }

    .ladi-carousel {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .ladi-carousel .ladi-carousel-content {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        transition: left 350ms ease-in-out
    }

    .ladi-carousel .ladi-carousel-arrow {
        position: absolute;
        width: 30px;
        height: 36px;
        top: calc(50% - 18px);
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        cursor: pointer;
        z-index: 90000040
    }

    .ladi-carousel .ladi-carousel-arrow-left {
        left: 5px;
        background-position: -28px
    }

    .ladi-carousel .ladi-carousel-arrow-right {
        right: 5px;
        background-position: -52px
    }

    .ladi-gallery {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-gallery .ladi-gallery-view {
        position: absolute;
        overflow: hidden
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 100%;
        height: 100%;
        position: relative;
        display: none;
        transition: transform 350ms ease-in-out;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video {
        cursor: pointer
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 60px;
        height: 60px;
        background: url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;
        background-size: contain;
        pointer-events: none;
        cursor: pointer
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.right {
        left: 0;
        transform: translate3d(100%, 0, 0)
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.left {
        left: 0;
        transform: translate3d(-100%, 0, 0)
    }

    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next.left,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev.right,
    .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected {
        left: 0;
        transform: translate3d(0, 0, 0)
    }

    .ladi-gallery .ladi-gallery-view>.next,
    .ladi-gallery .ladi-gallery-view>.prev,
    .ladi-gallery .ladi-gallery-view>.selected {
        display: block
    }

    .ladi-gallery .ladi-gallery-view>.selected {
        left: 0
    }

    .ladi-gallery .ladi-gallery-view>.next,
    .ladi-gallery .ladi-gallery-view>.prev {
        position: absolute;
        top: 0;
        width: 100%
    }

    .ladi-gallery .ladi-gallery-view>.next {
        left: 100%
    }

    .ladi-gallery .ladi-gallery-view>.prev {
        left: -100%
    }

    .ladi-gallery .ladi-gallery-view>.next.left,
    .ladi-gallery .ladi-gallery-view>.prev.right {
        left: 0
    }

    .ladi-gallery .ladi-gallery-view>.selected.left {
        left: -100%
    }

    .ladi-gallery .ladi-gallery-view>.selected.right {
        left: 100%
    }

    .ladi-gallery .ladi-gallery-control {
        position: absolute;
        overflow: hidden
    }

    .ladi-gallery.ladi-gallery-top .ladi-gallery-view {
        width: 100%
    }

    .ladi-gallery.ladi-gallery-top .ladi-gallery-control {
        top: 0;
        width: 100%
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-view {
        top: 0;
        width: 100%
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control {
        width: 100%;
        bottom: 0
    }

    .ladi-gallery.ladi-gallery-left .ladi-gallery-view {
        height: 100%
    }

    .ladi-gallery.ladi-gallery-left .ladi-gallery-control {
        height: 100%
    }

    .ladi-gallery.ladi-gallery-right .ladi-gallery-view {
        height: 100%
    }

    .ladi-gallery.ladi-gallery-right .ladi-gallery-control {
        height: 100%;
        right: 0
    }

    .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow {
        position: absolute;
        width: 30px;
        height: 36px;
        top: calc(50% - 18px);
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        cursor: pointer;
        z-index: 90000040
    }

    .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-left {
        left: 5px;
        background-position: -28px
    }

    .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-right {
        right: 5px;
        background-position: -52px
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow {
        position: absolute;
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        cursor: pointer;
        z-index: 90000040
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow,
    .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow {
        top: calc(50% - 18px);
        width: 30px;
        height: 36px
    }

    .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-left {
        left: 0;
        background-position: -28px;
        transform: scale(.6)
    }

    .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-right {
        right: 0;
        background-position: -52px;
        transform: scale(.6)
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-left {
        left: 0;
        background-position: -28px;
        transform: scale(.6)
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-right {
        right: 0;
        background-position: -52px;
        transform: scale(.6)
    }

    .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow,
    .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow {
        left: calc(50% - 18px);
        width: 36px;
        height: 30px
    }

    .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-left {
        top: 0;
        background-position: -77px;
        transform: scale(.6)
    }

    .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-right {
        bottom: 0;
        background-position: 3px;
        transform: scale(.6)
    }

    .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-left {
        top: 0;
        background-position: -77px;
        transform: scale(.6)
    }

    .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-right {
        bottom: 0;
        background-position: 3px;
        transform: scale(.6)
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box {
        position: relative
    }

    .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-box {
        display: inline-flex;
        left: 0;
        transition: left 150ms ease-in-out
    }

    .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-box {
        display: inline-flex;
        left: 0;
        transition: left 150ms ease-in-out
    }

    .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-box {
        display: inline-grid;
        top: 0;
        transition: top 150ms ease-in-out
    }

    .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-box {
        display: inline-grid;
        top: 0;
        transition: top 150ms ease-in-out
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        float: left;
        position: relative;
        cursor: pointer;
        filter: invert(15%)
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.play-video:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 30px;
        height: 30px;
        background: url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;
        background-size: contain;
        pointer-events: none;
        cursor: pointer
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:hover {
        filter: none
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.selected {
        filter: none
    }

    .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:last-child {
        margin-right: 0 !important;
        margin-bottom: 0 !important
    }

    .ladi-box {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .ladi-frame {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    #SECTION_POPUP .ladi-container {
        z-index: 90000070
    }

    #SECTION_POPUP .ladi-container>.ladi-element {
        z-index: 90000070;
        position: fixed;
        display: none
    }

    #SECTION_POPUP .ladi-container>.ladi-element.hide-visibility {
        display: block !important;
        visibility: hidden !important
    }

    #SECTION_POPUP .popup-close {
        width: 30px;
        height: 30px;
        position: absolute;
        right: 0;
        top: 0;
        transform: scale(.8);
        -webkit-transform: scale(.8);
        z-index: 9000000080;
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        background-position: -108px;
        cursor: pointer;
        display: none
    }

    .ladi-popup {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-countdown {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-countdown .ladi-countdown-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
        display: table;
        pointer-events: none
    }

    .ladi-countdown .ladi-countdown-text {
        position: absolute;
        width: 100%;
        height: 100%;
        text-decoration: inherit;
        display: table;
        pointer-events: none
    }

    .ladi-countdown .ladi-countdown-text span {
        display: table-cell;
        vertical-align: middle
    }

    .ladi-countdown>.ladi-element {
        text-decoration: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit;
        position: relative;
        display: inline-block
    }

    .ladi-countdown>.ladi-element:last-child {
        margin-right: 0 !important
    }

    .ladi-button {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .ladi-button:active {
        transform: translateY(2px)
    }

    .ladi-button .ladi-button-background {
        height: 100%;
        width: 100%;
        pointer-events: none
    }

    .ladi-button>.ladi-element {
        width: 100% !important;
        height: 100% !important;
        top: 0 !important;
        left: 0 !important;
        display: table;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none
    }

    .ladi-button>.ladi-element .ladi-headline {
        display: table-cell;
        vertical-align: middle
    }

    .ladi-collection {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-collection.carousel {
        overflow: hidden
    }

    .ladi-collection .ladi-collection-content {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        transition: left 350ms ease-in-out
    }

    .ladi-collection .ladi-collection-content .ladi-collection-item {
        display: block;
        position: relative;
        float: left;
        box-shadow: 0 0 0 1px #fff
    }

    .ladi-collection .ladi-collection-content .ladi-collection-page {
        float: left
    }

    .ladi-collection .ladi-collection-arrow {
        position: absolute;
        width: 30px;
        height: 36px;
        top: calc(50% - 18px);
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        cursor: pointer;
        z-index: 90000040
    }

    .ladi-collection .ladi-collection-arrow-left {
        left: 5px;
        background-position: -28px
    }

    .ladi-collection .ladi-collection-arrow-right {
        right: 5px;
        background-position: -52px
    }

    .ladi-collection .ladi-collection-button-next {
        position: absolute;
        width: 36px;
        height: 30px;
        bottom: -40px;
        right: 0;
        left: 0;
        margin: auto;
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        background-position: 4px;
        cursor: pointer;
        z-index: 90000040
    }

    .ladi-form {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-form>.ladi-element {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form .ladi-element[id^=BUTTON_TEXT] {
        color: initial;
        font-size: initial;
        font-weight: initial;
        text-transform: initial;
        text-decoration: initial;
        font-style: initial;
        text-align: initial;
        letter-spacing: initial;
        line-height: initial
    }

    .ladi-form>.ladi-element .ladi-form-item-container {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item-background {
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-size: 9px 6px !important;
        background-position: right .5rem center;
        background-repeat: no-repeat
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3 {
        width: calc(100% / 3 - 5px);
        max-width: calc(100% / 3 - 5px);
        min-width: calc(100% / 3 - 5px)
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3) {
        margin-left: 7.5px
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4) {
        margin-left: 7.5px
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option {
        color: initial
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select) {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]) {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select[data-selected=""] {
        text-transform: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span {
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=true] {
        text-transform: inherit;
        text-decoration: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=false] {
        text-transform: inherit;
        text-align: inherit;
        letter-spacing: inherit;
        color: inherit;
        background-size: inherit;
        background-attachment: inherit;
        background-origin: inherit
    }

    .ladi-form .ladi-form-item-container {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-form .ladi-form-item {
        width: 100%;
        height: 100%;
        position: absolute
    }

    .ladi-form .ladi-form-item-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox {
        height: auto
    }

    .ladi-form .ladi-form-item .ladi-form-control {
        background-color: transparent;
        min-width: 100%;
        min-height: 100%;
        max-width: 100%;
        max-height: 100%;
        width: 100%;
        height: 100%;
        padding: 0 5px;
        color: inherit;
        font-size: inherit;
        border: none
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox {
        padding: 10px 5px
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item {
        margin-top: 0 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        display: block;
        border: none
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item {
        margin-top: 0 !important;
        margin-left: 0 !important;
        margin-bottom: 0 !important;
        display: inline-block;
        border: none
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item:last-child {
        margin-bottom: 0 !important
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span {
        display: inline-block;
        margin-left: 5px;
        cursor: default
    }

    .ladi-form .ladi-form-item textarea.ladi-form-control {
        resize: none;
        padding: 5px
    }

    .ladi-form .ladi-button {
        cursor: pointer
    }

    .ladi-form .ladi-button .ladi-headline {
        cursor: pointer;
        user-select: none
    }

    .ladi-cart {
        position: absolute;
        width: 100%;
        font-size: 12px
    }

    .ladi-cart .ladi-cart-row {
        position: relative;
        display: inline-table;
        width: 100%
    }

    .ladi-cart .ladi-cart-row:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 1px;
        width: 100%;
        background: #dcdcdc
    }

    .ladi-cart .ladi-cart-no-product {
        text-align: center;
        font-size: 16px;
        vertical-align: middle
    }

    .ladi-cart .ladi-cart-image {
        width: 16%;
        vertical-align: middle;
        position: relative;
        text-align: center
    }

    .ladi-cart .ladi-cart-image img {
        max-width: 100%
    }

    .ladi-cart .ladi-cart-title {
        vertical-align: middle;
        padding: 0 5px;
        word-break: break-all
    }

    .ladi-cart .ladi-cart-title .ladi-cart-title-name {
        display: block;
        margin-bottom: 5px
    }

    .ladi-cart .ladi-cart-title .ladi-cart-title-variant {
        font-weight: 700;
        display: block
    }

    .ladi-cart .ladi-cart-image .ladi-cart-image-quantity {
        position: absolute;
        top: -3px;
        right: -5px;
        background: rgba(150, 149, 149, .9);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        text-align: center;
        color: #fff;
        line-height: 20px
    }

    .ladi-cart .ladi-cart-quantity {
        width: 70px;
        vertical-align: middle;
        text-align: center
    }

    .ladi-cart .ladi-cart-quantity-content {
        display: inline-flex
    }

    .ladi-cart .ladi-cart-quantity input {
        width: 24px;
        text-align: center;
        height: 22px;
        -moz-appearance: textfield;
        border-top: 1px solid #dcdcdc;
        border-bottom: 1px solid #dcdcdc
    }

    .ladi-cart .ladi-cart-quantity input::-webkit-inner-spin-button,
    .ladi-cart .ladi-cart-quantity input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0
    }

    .ladi-cart .ladi-cart-quantity button {
        border: 1px solid #dcdcdc;
        cursor: pointer;
        text-align: center;
        width: 21px;
        height: 22px;
        position: relative;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none
    }

    .ladi-cart .ladi-cart-quantity button:active {
        transform: translateY(2px)
    }

    .ladi-cart .ladi-cart-quantity button span {
        font-size: 18px;
        position: relative;
        left: .5px
    }

    .ladi-cart .ladi-cart-quantity button:first-child span {
        top: -1.2px
    }

    .ladi-cart .ladi-cart-price {
        width: 100px;
        vertical-align: middle;
        text-align: right;
        padding: 0 5px
    }

    .ladi-cart .ladi-cart-action {
        width: 28px;
        vertical-align: middle;
        text-align: center
    }

    .ladi-cart .ladi-cart-action button {
        border: 1px solid #dcdcdc;
        cursor: pointer;
        text-align: center;
        width: 25px;
        height: 22px;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none
    }

    .ladi-cart .ladi-cart-action button:active {
        transform: translateY(2px)
    }

    .ladi-cart .ladi-cart-action button span {
        font-size: 13px;
        position: relative;
        top: .5px
    }

    .ladi-video {
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: pointer;
        overflow: hidden
    }

    .ladi-video .ladi-video-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none
    }

    .ladi-group {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-checkout {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-shape {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-html-code {
        position: absolute;
        width: 100%;
        height: 100%
    }

    .ladi-image {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .ladi-image .ladi-image-background {
        background-repeat: no-repeat;
        background-position: left top;
        background-size: cover;
        background-attachment: scroll;
        background-origin: content-box;
        position: absolute;
        margin: 0 auto;
        width: 100%;
        height: 100%;
        pointer-events: none
    }

    .ladi-headline {
        width: 100%;
        display: inline-block;
        background-size: cover;
        background-position: center center
    }

    .ladi-headline a {
        text-decoration: underline
    }

    .ladi-paragraph {
        width: 100%;
        display: inline-block
    }

    .ladi-paragraph a {
        text-decoration: underline
    }

    .ladi-list-paragraph {
        width: 100%;
        display: inline-block
    }

    .ladi-list-paragraph a {
        text-decoration: underline
    }

    .ladi-list-paragraph ul li {
        position: relative;
        counter-increment: linum
    }

    .ladi-list-paragraph ul li:before {
        position: absolute;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        left: 0
    }

    .ladi-list-paragraph ul li:last-child {
        padding-bottom: 0 !important
    }

    .ladi-line {
        position: relative
    }

    .ladi-line .ladi-line-container {
        border-bottom: 0 !important;
        border-right: 0 !important;
        width: 100%;
        height: 100%
    }

    a[data-action] {
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        cursor: pointer
    }

    a:visited {
        color: inherit
    }

    a:link {
        color: inherit
    }

    [data-opacity="0"] {
        opacity: 0
    }

    [data-hidden=true] {
        display: none
    }

    [data-action=true] {
        cursor: pointer
    }

    .ladi-hidden {
        display: none
    }

    .backdrop-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 90000060
    }

    .lightbox-screen {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        z-index: 9000000080;
        background: rgba(0, 0, 0, .5)
    }

    .lightbox-screen .lightbox-close {
        width: 30px;
        height: 30px;
        position: absolute;
        z-index: 9000000090;
        background: url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255, 255, 255, .2) no-repeat;
        background-position: -108px;
        transform: scale(.7);
        -webkit-transform: scale(.7);
        cursor: pointer
    }

    .ladi-animation-hidden {
        visibility: hidden !important
    }

    .ladi-lazyload {
        background-image: none !important
    }

    .ladi-list-paragraph ul li.ladi-lazyload:before {
        background-image: none !important
    }

    @media (min-width:768px) {
        .ladi-fullwidth {
            width: 100vw !important;
            left: calc(-50vw + 50%) !important;
            box-sizing: border-box !important;
            transform: none !important
        }
    }

    @media (max-width:767px) {
        .ladi-element.ladi-auto-scroll {
            overflow-x: scroll;
            overflow-y: hidden;
            width: 100% !important;
            left: 0 !important;
            -webkit-overflow-scrolling: touch
        }

        .ladi-section.ladi-auto-scroll {
            overflow-x: scroll;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch
        }

        .ladi-carousel .ladi-carousel-content {
            transition: left .3s ease-in-out
        }

        .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item {
            transition: transform .3s ease-in-out
        }

        .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item input {
            vertical-align: middle
        }
    }

    .ladi-notify-transition {
        transition: top .5s ease-in-out, bottom .5s ease-in-out, opacity .5s ease-in-out
    }

    .ladi-notify {
        padding: 5px;
        box-shadow: 0 0 1px rgba(64, 64, 64, .3), 0 8px 50px rgba(64, 64, 64, .05);
        border-radius: 40px;
        color: rgba(64, 64, 64, 1);
        background: rgba(250, 250, 250, .9);
        line-height: 1.6;
        width: 100%;
        height: 100%;
        font-size: 13px
    }

    .ladi-notify .ladi-notify-image img {
        float: left;
        margin-right: 13px;
        border-radius: 50%;
        width: 53px;
        height: 53px;
        pointer-events: none
    }

    .ladi-notify .ladi-notify-title {
        font-size: 100%;
        height: 17px;
        overflow: hidden;
        font-weight: 700;
        overflow-wrap: break-word;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 1
    }

    .ladi-notify .ladi-notify-content {
        font-size: 92.308%;
        height: 17px;
        overflow: hidden;
        overflow-wrap: break-word;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 1;
        padding-top: 2px
    }

    .ladi-notify .ladi-notify-time {
        line-height: 1.6;
        font-size: 84.615%;
        display: inline-block;
        overflow-wrap: break-word;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: calc(100% - 155px);
        overflow: hidden
    }

    .ladi-notify .ladi-notify-copyright {
        font-size: 76.9231%;
        margin-left: 2px;
        position: relative;
        padding: 0 5px;
        cursor: pointer;
        opacity: .6;
        display: inline-block;
        top: -4px
    }

    .ladi-notify .ladi-notify-copyright svg {
        vertical-align: middle
    }

    .ladi-notify .ladi-notify-copyright svg:not(:root) {
        overflow: hidden
    }

    .ladi-notify .ladi-notify-copyright div {
        text-decoration: none;
        color: rgba(64, 64, 64, 1);
        display: inline
    }

    .ladi-notify .ladi-notify-copyright strong {
        font-weight: 700
    }

    .builder-container .ladi-notify {
        transition: unset
    }

    .ladi-spin-lucky {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        box-shadow: 0 0 7px 0 rgba(64, 64, 64, .6), 0 8px 50px rgba(64, 64, 64, .3);
        background-repeat: no-repeat;
        background-size: cover
    }

    .ladi-spin-lucky .ladi-spin-lucky-start {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 20%;
        height: 20%;
        cursor: pointer;
        background-size: contain;
        background-position: center center;
        background-repeat: no-repeat;
        transition: transform .3s ease-in-out;
        -webkit-transition: transform .3s ease-in-out
    }

    .ladi-spin-lucky .ladi-spin-lucky-start:hover {
        transform: scale(1.1)
    }

    .ladi-spin-lucky .ladi-spin-lucky-screen {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        border-radius: 100%;
        transition: transform 7s cubic-bezier(.25, .1, 0, 1);
        -webkit-transition: transform 7s cubic-bezier(.25, .1, 0, 1);
        text-decoration-line: inherit;
        text-transform: inherit;
        -webkit-text-decoration-line: inherit
    }

    .ladi-spin-lucky .ladi-spin-lucky-label {
        position: absolute;
        top: 50%;
        left: 50%;
        overflow: hidden;
        text-align: center;
        width: 42%;
        padding-left: 12%;
        transform-origin: 0 0;
        -webkit-transform-origin: 0 0;
        text-decoration-line: inherit;
        text-transform: inherit;
        -webkit-text-decoration-line: inherit;
        line-height: 1;
        text-shadow: rgba(0, 0, 0, .5) 1px 0 2px
    }

</style>
<style id="style_page" type="text/css">
    @media (min-width: 768px) {
        .ladi-section .ladi-container {
            width: 960px;
        }
    }

    @media (max-width: 767px) {
        .ladi-section .ladi-container {
            width: 420px;
        }
    }

    body {
        font-family: "Open Sans", sans-serif
    }

</style>
<style id="style_element" type="text/css">
    @media (min-width: 768px) {
        #SECTION_POPUP {
            height: 0px;
        }

        #SECTION1 {
            height: 85.84px;
        }

        #SECTION1>.ladi-section-background {
            background-color: rgb(255, 255, 255);
        }

        #SECTION3 {
            height: 722.7px;
        }

        #SECTION3>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #BUTTON4 {
            width: 116px;
            height: 29px;
            top: 0px;
            left: 0px;
        }

        #BUTTON4>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 105, 48);
        }

        #BUTTON4>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON4>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON4>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON_TEXT4 {
            width: 95px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT4>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT4>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON_TEXT5 {
            width: 95px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT5>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT5>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON5 {
            width: 116px;
            height: 29px;
            top: 0px;
            left: 140px;
        }

        #BUTTON5>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 106, 48);
        }

        #BUTTON5>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON5>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON5>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON_TEXT7 {
            width: 95px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT7>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT7>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON7 {
            width: 116px;
            height: 29px;
            top: 0px;
            left: 280px;
        }

        #BUTTON7>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 107, 48);
        }

        #BUTTON7>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON7>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON7>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON_TEXT9 {
            width: 95px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT9>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT9>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON9 {
            width: 116px;
            height: 29px;
            top: 0px;
            left: 564.105px;
        }

        #BUTTON9>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 107, 48);
        }

        #BUTTON9>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON9>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON9>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #HEADLINE13 {
            width: 271px;
            top: 0px;
            left: 66.5px;
        }

        #HEADLINE13>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 25px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE14 {
            width: 295px;
            top: 10.595px;
            left: 26px;
        }

        #HEADLINE14>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #BUTTON_TEXT15 {
            width: 123px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT15>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 17px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON15 {
            width: 176px;
            height: 43px;
            top: 54.65px;
            left: 78.5px;
        }

        #BUTTON15>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 104, 48);
        }

        #BUTTON15>.ladi-button {
            border-radius: 3px;
        }

        #BUTTON15.ladi-animation>.ladi-button {
            animation-name: pulse;
            -webkit-animation-name: pulse;
            animation-delay: 1s;
            -webkit-animation-delay: 1s;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            animation-iteration-count: infinite;
            -webkit-animation-iteration-count: infinite;
        }

        #HEADLINE17 {
            width: 351px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE17>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SECTION18 {
            height: 668.7px;
        }

        #SECTION18>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #SECTION19 {
            height: 551.7px;
        }

        #HEADLINE21 {
            width: 421px;
            top: 30px;
            left: 0px;
        }

        #HEADLINE21>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-style: italic;
            line-height: 1.6;
        }

        #HEADLINE22 {
            width: 88px;
            top: 198.3px;
            left: 183.75px;
        }

        #HEADLINE22>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE23 {
            width: 103px;
            top: 255.3px;
            left: 183.75px;
        }

        #HEADLINE23>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE24 {
            width: 195px;
            top: 311.3px;
            left: 183.75px;
        }

        #HEADLINE24>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE25 {
            width: 66px;
            top: 138.3px;
            left: 185.875px;
        }

        #HEADLINE25>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE26 {
            width: 233px;
            top: 372.85px;
            left: 181.625px;
        }

        #HEADLINE26>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE27 {
            width: 168px;
            top: 8.925px;
            left: 58px;
        }

        #HEADLINE27>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SECTION30 {
            height: 1800.7px;
        }

        #SECTION30>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #SECTION31 {
            height: 1447.7px;
        }

        #HEADLINE32 {
            width: 276px;
            top: 42.5573px;
            left: 91.408px;
        }

        #HEADLINE32>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE35 {
            width: 234px;
            top: 57.4133px;
            left: 23.213px;
        }

        #HEADLINE35>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE37 {
            width: 713px;
            top: 24.193px;
            left: 12.357px;
        }

        #HEADLINE37>.ladi-headline {
            font-family: "Dancing Script", cursive;
            color: rgb(0, 0, 0);
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            line-height: 1.6;
        }

        #SECTION49 {
            height: 292.7px;
        }

        #SECTION49>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #HEADLINE50 {
            width: 42px;
            top: 80px;
            left: 56.333px;
        }

        #HEADLINE50>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE51 {
            width: 29px;
            top: 80px;
            left: 95px;
        }

        #HEADLINE51>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE52 {
            width: 42px;
            top: 80px;
            left: 75.5px;
        }

        #HEADLINE52>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE53 {
            width: 27px;
            top: 89px;
            left: 73.246px;
        }

        #HEADLINE53>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE54 {
            width: 384px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE54>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 20px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE55 {
            width: 219px;
            top: 121.505px;
            left: 0px;
        }

        #HEADLINE55>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE56 {
            width: 193px;
            top: 121.505px;
            left: 0px;
        }

        #HEADLINE56>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE57 {
            width: 193px;
            top: 130.505px;
            left: 0px;
        }

        #HEADLINE57>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE58 {
            width: 153px;
            top: 121.505px;
            left: 0px;
        }

        #HEADLINE58>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SHAPE59 {
            width: 80px;
            height: 80px;
            top: 0px;
            left: 36.5px;
        }

        #SHAPE59 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE60 {
            width: 80px;
            height: 80px;
            top: 0px;
            left: 69.5002px;
        }

        #SHAPE60 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE61 {
            width: 76px;
            height: 80px;
            top: 0px;
            left: 58.5002px;
        }

        #SHAPE61 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE62 {
            width: 80px;
            height: 80px;
            top: 0px;
            left: 46.7462px;
        }

        #SHAPE62 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SECTION63 {
            height: 342.7px;
        }

        #SECTION63>.ladi-section-background {
            background-color: rgb(58, 44, 38);
        }

        #HEADLINE64 {
            width: 193px;
            top: 0px;
            left: 390.5px;
        }

        #HEADLINE64>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 18px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE65 {
            width: 158px;
            top: 58.1592px;
            left: 0px;
        }

        #HEADLINE65>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 15px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE66 {
            width: 493px;
            top: 90.3042px;
            left: 1px;
        }

        #HEADLINE66>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            line-height: 1.6;
        }

        #HEADLINE67 {
            width: 200px;
            top: 118.969px;
            left: 0px;
        }

        #HEADLINE67>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            line-height: 1.6;
        }

        #HEADLINE68 {
            width: 289px;
            top: 143.97px;
            left: 0px;
        }

        #HEADLINE68>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            line-height: 1.6;
        }

        #HEADLINE69 {
            width: 328px;
            top: 171.014px;
            left: 0.003px;
        }

        #HEADLINE69>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 15px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE70 {
            width: 567px;
            top: 203.154px;
            left: 0.006px;
        }

        #HEADLINE70>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            text-align: left;
            line-height: 1.6;
        }

        #HEADLINE71 {
            width: 567px;
            top: 247.324px;
            left: 0.006px;
        }

        #HEADLINE71>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            text-align: left;
            line-height: 1.6;
        }

        #HEADLINE72 {
            width: 567px;
            top: 272.324px;
            left: 0.006px;
        }

        #HEADLINE72>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            text-align: left;
            line-height: 1.6;
        }

        #IMAGE2 {
            width: 85.84px;
            height: 85.84px;
            top: -3px;
            left: 6.5px;
        }

        #IMAGE2>.ladi-image>.ladi-image-background {
            width: 85.84px;
            height: 85.84px;
            top: 0px;
            left: 0px;
            background-image: url("/img/logo_tb.png");
        }

        #BOX76 {
            width: 335px;
            height: 47px;
            top: 0px;
            left: 0px;
        }

        #BOX76>.ladi-overlay {
            border-radius: 3px;
        }

        #BOX76>.ladi-box {
            border-radius: 3px;
            border-style: solid;
            border-color: rgb(232, 106, 48);
            border-width: 2px;
        }

        #HEADLINE78 {
            width: 486px;
            top: 198.3px;
            left: 292.5px;
        }

        #HEADLINE78>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE79 {
            width: 212px;
            top: 255.3px;
            left: 315.5px;
        }

        #HEADLINE79>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE80 {
            width: 500px;
            top: 311.3px;
            left: 388.499px;
        }

        #HEADLINE80>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE81 {
            width: 231px;
            top: 138.3px;
            left: 270.125px;
        }

        #HEADLINE81>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE82 {
            width: 300px;
            top: 372.85px;
            left: 430.874px;
        }

        #HEADLINE82>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #BOX83 {
            width: 115.625px;
            height: 43px;
            top: 189.3px;
            left: 168.5px;
        }

        #BOX83>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX83>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX85 {
            width: 133.5px;
            height: 43px;
            top: 246.3px;
            left: 168.5px;
        }

        #BOX85>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX85>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX86 {
            width: 210.25px;
            height: 43px;
            top: 302.3px;
            left: 168.5px;
        }

        #BOX86>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX86>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX87 {
            width: 92.25px;
            height: 43px;
            top: 128.85px;
            left: 170.625px;
        }

        #BOX87>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX87>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX88 {
            width: 253.125px;
            height: 43px;
            top: 363.85px;
            left: 168.5px;
        }

        #BOX88>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX88>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #SHAPE92 {
            width: 80px;
            height: 80px;
            top: 0px;
            left: 0px;
        }

        #SHAPE92 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE93 {
            width: 52.5px;
            height: 52.5px;
            top: 23.5px;
            left: 40px;
        }

        #SHAPE93 svg:last-child {
            fill: rgba(232, 106, 48, 0.8);
        }

        #SHAPE95 {
            width: 422.818px;
            height: 291.775px;
            top: 37.613px;
            left: 0px;
        }

        #SHAPE95 svg:last-child {
            fill: rgba(232, 106, 48, 1);
        }

        #HEADLINE96 {
            width: 191px;
            top: 0px;
            left: 108.908px;
        }

        #HEADLINE96>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE97 {
            width: 307px;
            top: 75.955px;
            left: 97.9085px;
        }

        #HEADLINE97>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE98 {
            width: 307px;
            top: 143.955px;
            left: 97.9085px;
        }

        #HEADLINE98>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE99 {
            width: 307px;
            top: 233.955px;
            left: 97.9085px;
        }

        #HEADLINE99>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE100 {
            width: 305px;
            top: 0px;
            left: 58.909px;
        }

        #HEADLINE100>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SHAPE101 {
            width: 422.818px;
            height: 291.775px;
            top: 37.613px;
            left: 0px;
        }

        #SHAPE101 svg:last-child {
            fill: rgba(232, 106, 48, 1);
        }

        #HEADLINE102 {
            width: 310px;
            top: 75.955px;
            left: 90.409px;
        }

        #HEADLINE102>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE103 {
            width: 310px;
            top: 143.955px;
            left: 89.409px;
        }

        #HEADLINE103>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE104 {
            width: 310px;
            top: 221.455px;
            left: 90.409px;
        }

        #HEADLINE104>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }

        #SHAPE105 {
            width: 41.3857px;
            height: 47.1578px;
            top: 77.876px;
            left: 41.909px;
        }

        #SHAPE105>.ladi-shape {
            transform: rotate(-9deg);
            -webkit-transform: rotate(-9deg);
        }

        #SHAPE105 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE106 {
            width: 41.3857px;
            height: 47.1578px;
            top: 155.99px;
            left: 41.909px;
        }

        #SHAPE106 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE107 {
            width: 41.3857px;
            height: 47.1578px;
            top: 233.955px;
            left: 41.909px;
        }

        #SHAPE107 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE108 {
            width: 41.3857px;
            height: 47.1578px;
            top: 77.876px;
            left: 36.318px;
        }

        #SHAPE108 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE109 {
            width: 41.3857px;
            height: 47.1578px;
            top: 145.876px;
            left: 36.318px;
        }

        #SHAPE109 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE110 {
            width: 41.3857px;
            height: 47.1578px;
            top: 235.876px;
            left: 36.318px;
        }

        #SHAPE110 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #HEADLINE116 {
            width: 590px;
            top: 0px;
            left: 22px;
        }

        #HEADLINE116>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE118 {
            width: 600px;
            top: 0px;
            left: 27px;
        }

        #HEADLINE118>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE119 {
            width: 327px;
            top: 0px;
            left: 27px;
        }

        #HEADLINE119>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 15px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE120 {
            width: 420px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE120>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE121 {
            width: 420px;
            top: 57px;
            left: 0px;
        }

        #HEADLINE121>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE122 {
            width: 420px;
            top: 116px;
            left: 0px;
        }

        #HEADLINE122>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE123 {
            width: 420px;
            top: 174px;
            left: 0px;
        }

        #HEADLINE123>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE124 {
            width: 420px;
            top: 235px;
            left: 0px;
        }

        #HEADLINE124>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE126 {
            width: 400px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE126>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE127 {
            width: 400px;
            top: 28px;
            left: 0px;
        }

        #HEADLINE127>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE128 {
            width: 343px;
            top: 9.617px;
            left: 25px;
        }

        #HEADLINE128>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            line-height: 1.6;
        }

        #HEADLINE129 {
            width: 81px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE129>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE130 {
            width: 714px;
            top: 30px;
            left: 27px;
        }

        #HEADLINE130>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-style: italic;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE131 {
            width: 632px;
            top: 55px;
            left: 27px;
        }

        #HEADLINE131>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-style: italic;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP134 {
            width: 400px;
            height: 79px;
            top: 12.117px;
            left: 25px;
        }

        #LINE141 {
            height: 301px;
            top: 8px;
            left: 435px;
        }

        #LINE141>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE141>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE142 {
            width: 619px;
            top: 58.504px;
            left: 8.5px;
        }

        #LINE142>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE142>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE143 {
            width: 619px;
            top: 118.504px;
            left: 8.5px;
        }

        #LINE143>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE143>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE144 {
            width: 619px;
            top: 173.504px;
            left: 8.5px;
        }

        #LINE144>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE144>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE145 {
            width: 619px;
            top: 235.504px;
            left: 8.5px;
        }

        #LINE145>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE145>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE146 {
            width: 619px;
            top: 299.504px;
            left: 8.5px;
        }

        #LINE146>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE146>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE147 {
            height: 301px;
            top: 8px;
            left: 618px;
        }

        #LINE147>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE147>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE149 {
            width: 619px;
            top: 85.617px;
            left: 8.5px;
        }

        #LINE149>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE149>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE150 {
            width: 619px;
            top: 32.617px;
            left: 8.5px;
        }

        #LINE150>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE150>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE153 {
            height: 86px;
            top: 8.617px;
            left: 435px;
        }

        #LINE153>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE153>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE154 {
            height: 33px;
            top: 8.617px;
            left: 435px;
        }

        #LINE154>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE154>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE158 {
            width: 619px;
            top: 0px;
            left: 8.5px;
        }

        #LINE158>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE158>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE159 {
            width: 619px;
            top: 0px;
            left: 8.5px;
        }

        #LINE159>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE159>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE160 {
            width: 619px;
            top: 0px;
            left: 8.5px;
        }

        #LINE160>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE160>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE161 {
            height: 301px;
            top: 8px;
            left: 0px;
        }

        #LINE161>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE161>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE162 {
            height: 87px;
            top: 7.931px;
            left: 0px;
        }

        #LINE162>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE162>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE163 {
            height: 34px;
            top: 7.617px;
            left: 0px;
        }

        #LINE163>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE163>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #GROUP132 {
            width: 420px;
            height: 286px;
            top: 14px;
            left: 15px;
        }

        #HEADLINE166 {
            width: 102px;
            top: 24px;
            left: 482px;
        }

        #HEADLINE166>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE167 {
            width: 102px;
            top: 84.504px;
            left: 482px;
        }

        #HEADLINE167>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE168 {
            width: 102px;
            top: 141.504px;
            left: 482px;
        }

        #HEADLINE168>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE169 {
            width: 120px;
            top: 201.504px;
            left: 478px;
        }

        #HEADLINE169>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE170 {
            width: 113px;
            top: 265.504px;
            left: 478px;
        }

        #HEADLINE170>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #LINE171 {
            height: 86px;
            top: 8.617px;
            left: 618px;
        }

        #LINE171>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE171>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #HEADLINE172 {
            width: 121px;
            top: 38.431px;
            left: 478px;
        }

        #HEADLINE172>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE173 {
            width: 113px;
            top: 10.617px;
            left: 486px;
        }

        #HEADLINE173>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #LINE174 {
            height: 33px;
            top: 533.004px;
            left: 618px;
        }

        #LINE174>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE174>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #SHAPE175 {
            width: 68.0287px;
            height: 65.2867px;
            top: 7.2706px;
            left: 10.7555px;
        }

        #SHAPE175 svg:last-child {
            fill: rgba(232, 107, 48, 1.0);
        }

        #SHAPE176 {
            width: 68.0287px;
            height: 65.2867px;
            top: 0px;
            left: 0px;
        }

        #SHAPE176 svg:last-child {
            fill: rgba(232, 108, 48, 1.0);
        }

        #SHAPE177 {
            width: 23.3861px;
            height: 23.9576px;
            top: 13.193px;
            left: 35.904px;
        }

        #SHAPE177 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE178 {
            width: 23.3861px;
            height: 23.9576px;
            top: 128.047px;
            left: 517.106px;
        }

        #SHAPE178>.ladi-shape {
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
        }

        #SHAPE178 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #BOX179 {
            width: 764px;
            height: 165px;
            top: 0px;
            left: 0px;
        }

        #BOX179>.ladi-overlay {
            border-radius: 4px;
        }

        #BOX179>.ladi-box {
            border-radius: 4px;
            box-shadow: 0px 0px 27px -20px #000;
            -webkit-box-shadow: 0px 0px 27px -20px #000;
            background-color: rgb(255, 255, 255);
        }

        #SHAPE192 {
            width: 49.7293px;
            height: 47.85px;
            top: 0px;
            left: 0px;
        }

        #SHAPE192 svg:last-child {
            fill: rgba(232, 109, 48, 1.0);
        }

        #GROUP198 {
            width: 764px;
            height: 165px;
            top: 151.423px;
            left: 116.356px;
        }

        #POPUP203 {
            width: 472.837px;
            height: 467px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP203>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE204 {
            width: 472.837px;
            height: 467px;
            top: 0px;
            left: 0px;
        }

        #IMAGE204>.ladi-image>.ladi-image-background {
            width: 621.169px;
            height: 506px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s950x850/5d2401a7f61f2351bed8557e/photo_2020-04-13_16-31-58-20200415032354.jpg");
        }

        #POPUP205 {
            width: 661px;
            height: 356px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP205>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE206 {
            width: 661px;
            height: 352.593px;
            top: 0px;
            left: 0px;
        }

        #IMAGE206>.ladi-image>.ladi-image-background {
            width: 661px;
            height: 352.593px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s1000x700/5d2401a7f61f2351bed8557e/photo_2020-04-14_15-58-51-20200415032354.jpg");
        }

        #POPUP207 {
            width: 488.2px;
            height: 484px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP207>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE208 {
            width: 487.168px;
            height: 484px;
            top: 0px;
            left: 0px;
        }

        #IMAGE208>.ladi-image>.ladi-image-background {
            width: 487.168px;
            height: 484px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s800x800/5d2401a7f61f2351bed8557e/photo_2020-04-13_16-29-04-20200415032354.jpg");
        }

        #POPUP209 {
            width: 482.4px;
            height: 468px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP209>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE211 {
            width: 482.153px;
            height: 468px;
            top: 0px;
            left: 0px;
        }

        #IMAGE211>.ladi-image>.ladi-image-background {
            width: 482.153px;
            height: 468px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s800x800/5d2401a7f61f2351bed8557e/photo_2020-04-13_15-15-11-20200415032354.jpg");
        }

        #POPUP212 {
            width: 392px;
            height: 530px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP212>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE213 {
            width: 391.402px;
            height: 530px;
            top: 0px;
            left: 0px;
        }

        #IMAGE213>.ladi-image>.ladi-image-background {
            width: 391.402px;
            height: 530px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s700x850/5d2401a7f61f2351bed8557e/photo_2020-04-13_15-14-42-20200415032354.jpg");
        }

        #POPUP214 {
            width: 507px;
            height: 374px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP214>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE215 {
            width: 507px;
            height: 372.547px;
            top: 0px;
            left: 0px;
        }

        #IMAGE215>.ladi-image>.ladi-image-background {
            width: 507px;
            height: 372.547px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s850x700/5d2401a7f61f2351bed8557e/photo_2020-04-14_15-57-20-20200415032354.jpg");
        }

        #POPUP216 {
            width: 608px;
            height: 277px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP216>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE217 {
            width: 605.884px;
            height: 275px;
            top: 0px;
            left: 0px;
        }

        #IMAGE217>.ladi-image>.ladi-image-background {
            width: 611.111px;
            height: 275px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s950x600/5d2401a7f61f2351bed8557e/photo_2020-04-13_16-33-27-20200415032354.jpg");
        }

        #GROUP219 {
            width: 636px;
            height: 317.504px;
            top: 25px;
            left: 0px;
        }

        #GROUP220 {
            width: 636px;
            height: 103.617px;
            top: 25px;
            left: 0px;
        }

        #GROUP221 {
            width: 627.5px;
            height: 50.617px;
            top: 24px;
            left: 0px;
        }

        #GROUP222 {
            width: 627.5px;
            height: 74.617px;
            top: 500.383px;
            left: 0px;
        }

        #GROUP223 {
            width: 636px;
            height: 128.617px;
            top: 555.387px;
            left: 0px;
        }

        #GROUP224 {
            width: 636px;
            height: 342.504px;
            top: 0px;
            left: 0px;
        }

        #GROUP225 {
            width: 741px;
            height: 106px;
            top: 1336.002px;
            left: 13px;
        }

        #GROUP226 {
            width: 367.408px;
            height: 72.5573px;
            top: 0px;
            left: 0px;
        }

        #GROUP227 {
            width: 754px;
            height: 681.002px;
            top: 144.532px;
            left: 163px;
        }

        #GROUP228 {
            width: 636px;
            height: 128.617px;
            top: 955.387px;
            left: 0px;
        }

        #GROUP230 {
            width: 422.818px;
            height: 329.388px;
            top: 129.281px;
            left: 18.2955px;
        }

        #GROUP231 {
            width: 422.818px;
            height: 329.388px;
            top: 129.281px;
            left: 518.886px;
        }

        #GROUP232 {
            width: 226px;
            height: 47.85px;
            top: 0px;
            left: 0px;
        }

        #GROUP237 {
            width: 92.5px;
            height: 80px;
            top: 0px;
            left: 0px;
        }

        #GROUP238 {
            width: 421px;
            height: 55px;
            top: 16.3px;
            left: 91.5px;
        }

        #GROUP240 {
            width: 335px;
            height: 47px;
            top: 124.65px;
            left: 0px;
        }

        #GROUP244 {
            width: 335px;
            height: 171.65px;
            top: 475px;
            left: 312.5px;
        }

        #GROUP246 {
            width: 941.704px;
            height: 458.669px;
            top: 5.15783px;
            left: 0px;
        }

        #SHAPE249 {
            width: 41.535px;
            height: 49.2549px;
            top: 33.1872px;
            left: -13.9176px;
        }

        #SHAPE249 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #HEADLINE251 {
            width: 271px;
            top: 25.1755px;
            left: 344.5px;
        }

        #HEADLINE251>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 15px;
            font-style: italic;
            line-height: 1.6;
        }

        #LINE252 {
            width: 159px;
            top: 72.3042px;
            left: 2px;
        }

        #LINE252>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(255, 255, 255);
            border-right: 2px solid rgb(255, 255, 255);
            border-bottom: 2px solid rgb(255, 255, 255);
            border-left: 0px !important;
        }

        #LINE252>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE253 {
            width: 316px;
            top: 186.164px;
            left: 0.003px;
        }

        #LINE253>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(255, 255, 255);
            border-right: 2px solid rgb(255, 255, 255);
            border-bottom: 2px solid rgb(255, 255, 255);
            border-left: 0px !important;
        }

        #LINE253>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #GROUP254 {
            width: 615.5px;
            height: 312.324px;
            top: 9.7008px;
            left: 0px;
        }

        #IMAGE255 {
            width: 295px;
            height: 295px;
            top: 27.025px;
            left: 635px;
        }

        #IMAGE255>.ladi-image>.ladi-image-background {
            width: 295px;
            height: 295px;
            top: 0px;
            left: 0px;
            background-image: url("/img/logo_tb.png");
        }

        #LINE263 {
            width: 65px;
            top: 64.0655px;
            left: 93.408px;
        }

        #LINE263>.ladi-line>.ladi-line-container {
            border-top: 3px solid rgb(232, 107, 48);
            border-right: 3px solid rgb(232, 107, 48);
            border-bottom: 3px solid rgb(232, 107, 48);
            border-left: 0px !important;
        }

        #LINE263>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE264 {
            width: 24px;
            top: 64.0655px;
            left: 167.408px;
        }

        #LINE264>.ladi-line>.ladi-line-container {
            border-top: 3px solid rgb(255, 255, 255);
            border-right: 3px solid rgb(255, 255, 255);
            border-bottom: 3px solid rgb(255, 255, 255);
            border-left: 0px !important;
        }

        #LINE264>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE265 {
            width: 51px;
            top: 64.0655px;
            left: 197.408px;
        }

        #LINE265>.ladi-line>.ladi-line-container {
            border-top: 3px solid rgb(232, 107, 48);
            border-right: 3px solid rgb(232, 107, 48);
            border-bottom: 3px solid rgb(232, 107, 48);
            border-left: 0px !important;
        }

        #LINE265>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #SHAPE266 {
            width: 255px;
            height: 32.8353px;
            top: 57.4133px;
            left: 27.6174px;
        }

        #SHAPE266 svg:last-child {
            fill: rgba(232, 108, 48, 1.0);
        }

        #LINE267 {
            width: 69px;
            top: 0px;
            left: 0px;
        }

        #LINE267>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 105, 48);
            border-right: 2px solid rgb(232, 105, 48);
            border-bottom: 2px solid rgb(232, 105, 48);
            border-left: 0px !important;
        }

        #LINE267>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #SHAPE268 {
            width: 59.1938px;
            height: 19.7881px;
            top: 0.89px;
            left: 79.4031px;
        }

        #SHAPE268 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #LINE269 {
            width: 69px;
            top: 0.89px;
            left: 147px;
        }

        #LINE269>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 105, 48);
            border-right: 2px solid rgb(232, 105, 48);
            border-bottom: 2px solid rgb(232, 105, 48);
            border-left: 0px !important;
        }

        #LINE269>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #GROUP270 {
            width: 216px;
            height: 20.6781px;
            top: 32.004px;
            left: 84px;
        }

        #IMAGE271 {
            width: 55px;
            height: 55px;
            top: 13px;
            left: auto;
            bottom: auto;
            right: 21px;
            position: fixed;
            z-index: 90000050;
        }

        #IMAGE271>.ladi-image>.ladi-image-background {
            width: 55px;
            height: 55px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/5d2401a7f61f2351bed8557e/phone-icon-20200415093319.gif");
        }

        #BUTTON_TEXT272 {
            width: 95px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT272>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT272>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON272 {
            width: 116px;
            height: 29px;
            top: 0px;
            left: 423.105px;
        }

        #BUTTON272>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 107, 48);
        }

        #BUTTON272>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON272>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON272>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #GROUP274 {
            width: 680.105px;
            height: 29px;
            top: 28.42px;
            left: 279.895px;
        }

        #SECTION275 {
            height: 657.2px;
        }

        #FORM276 {
            width: 441.724px;
            height: 366px;
            top: 171.524px;
            left: 0.138px;
        }

        #FORM276>.ladi-form {
            color: rgb(0, 0, 0);
            font-size: 15px;
            line-height: 1.6;
        }

        #FORM276 .ladi-form-item .ladi-form-control::placeholder,
        #FORM276 .ladi-form .ladi-form-item .ladi-form-control-select[data-selected=""],
        #FORM276 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
            color: rgba(0, 0, 0, 1.0);
        }

        #FORM276 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="32" height="24" viewBox="0 0 32 24"><polygon points="0,0 32,0 16,24" style="fill: rgba(0%2C%200%2C%200%2C%201.0)"></polygon></svg>');
        }

        #FORM276 .ladi-form-item-container {
            border-radius: 3px;
            border-style: solid;
            border-color: rgb(232, 105, 48);
            border-width: 2px;
        }

        #FORM276 .ladi-form-item-background {
            background-color: rgb(255, 255, 255);
            border-radius: 1px
        }

        #BUTTON277 {
            width: 164.069px;
            height: 44.1724px;
            top: 321.828px;
            left: 138.828px;
        }

        #BUTTON277>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 105, 48);
        }

        #BUTTON277>.ladi-button {
            border-radius: 4px;
        }

        #BUTTON277.ladi-animation>.ladi-button {
            animation-name: pulse;
            -webkit-animation-name: pulse;
            animation-delay: 1s;
            -webkit-animation-delay: 1s;
            animation-duration: 2s;
            -webkit-animation-duration: 2s;
            animation-iteration-count: 1;
            -webkit-animation-iteration-count: 1;
        }

        #BUTTON_TEXT277 {
            width: 125px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT277>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            line-height: 1.6;
        }

        #FORM_ITEM278 {
            width: 441.724px;
            height: 44.1724px;
            top: 0px;
            left: 0px;
        }

        #FORM_ITEM279 {
            width: 441.724px;
            height: 44.1724px;
            top: 56.7931px;
            left: 0px;
        }

        #FORM_ITEM280 {
            width: 441.724px;
            height: 44.1724px;
            top: 113.586px;
            left: 0px;
        }

        #FORM_ITEM281 {
            width: 441.724px;
            height: 126.207px;
            top: 170.379px;
            left: 0px;
        }

        #HEADLINE282 {
            width: 171px;
            top: 0px;
            left: 56.219px;
        }

        #HEADLINE282>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #IMAGE283 {
            width: 35px;
            height: 35px;
            top: 1306.63px;
            left: 462.5px;
        }

        #IMAGE283>.ladi-image>.ladi-image-background {
            width: 35px;
            height: 35px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/5d2401a7f61f2351bed8557e/giphy-1551928524-20200406153115.gif");
        }

        #HEADLINE284 {
            width: 555px;
            top: 1360.63px;
            left: 252.658px;
        }

        #HEADLINE284>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE285 {
            width: 442px;
            top: 98px;
            left: 0px;
        }

        #HEADLINE285>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 15px;
            text-align: center;
            line-height: 1.6;
        }

        #SHAPE288 {
            width: 48.3726px;
            height: 23.6368px;
            top: 3.1816px;
            left: 0px;
        }

        #SHAPE288 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE289 {
            width: 48.3726px;
            height: 23.6368px;
            top: 3.1816px;
            left: 227.219px;
        }

        #SHAPE289>.ladi-shape {
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
        }

        #SHAPE289 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #GROUP290 {
            width: 275.592px;
            height: 30px;
            top: 0px;
            left: 0px;
        }

        #LINE291 {
            width: 107px;
            top: 24px;
            left: 84.296px;
        }

        #LINE291>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 105, 48);
            border-right: 2px solid rgb(232, 105, 48);
            border-bottom: 2px solid rgb(232, 105, 48);
            border-left: 0px !important;
        }

        #LINE291>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #GROUP292 {
            width: 778.5px;
            height: 406.85px;
            top: 6.9342px;
            left: 6.5px;
        }

        #GROUP293 {
            width: 275.592px;
            height: 42px;
            top: 0px;
            left: 79.281px;
        }

        #GROUP294 {
            width: 442px;
            height: 537.524px;
            top: 37.345px;
            left: 259px;
        }

        #SHAPE295 {
            width: 28.3915px;
            height: 37.5048px;
            top: 17px;
            left: 0px;
        }

        #SHAPE295>.ladi-shape {
            transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
        }

        #SHAPE295 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE296 {
            width: 28.3915px;
            height: 37.5048px;
            top: 0px;
            left: 0px;
        }

        #SHAPE296>.ladi-shape {
            transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
        }

        #SHAPE296 svg:last-child {
            fill: rgba(232, 106, 48, 0.8);
        }

        #GROUP297 {
            width: 28.3915px;
            height: 54.5048px;
            top: auto;
            left: auto;
            bottom: 37px;
            right: 100px;
            position: fixed;
            z-index: 90000050;
        }

        #GROUP299 {
            width: 367.408px;
            height: 83.0655px;
            top: 8.2218px;
            left: -22.408px;
        }

        #GROUP300 {
            width: 384px;
            height: 52.6821px;
            top: 9.045px;
            left: 288.158px;
        }

        #GROUP301 {
            width: 153px;
            height: 151.505px;
            top: 87.04px;
            left: 1.6578px;
        }

        #GROUP302 {
            width: 219px;
            height: 151.505px;
            top: 87.04px;
            left: 214.281px;
        }

        #GROUP303 {
            width: 193px;
            height: 151.505px;
            top: 87.04px;
            left: 517.009px;
        }

        #GROUP304 {
            width: 193px;
            height: 160.505px;
            top: 78.04px;
            left: 767px;
        }

        #IMAGE305 {
            width: 957.333px;
            height: 718px;
            top: 0px;
            left: 2px;
        }

        #IMAGE305>.ladi-image>.ladi-image-background {
            width: 957.333px;
            height: 718px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s1300x1050/5d2401a7f61f2351bed8557e/5c0fe2430300f95ea011-20200415162607.jpg");
        }

        #NOTIFY306 {
            width: 300px;
            height: 62px;
            top: auto;
            left: 10px;
            bottom: 10px;
            right: auto;
            position: fixed;
            z-index: 90000060;
        }

        #IMAGE309 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE309>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_xuan.jpg");
        }

        #IMAGE309>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #SHAPE313 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE313 svg:last-child {
            fill: rgba(240, 238, 175);
        }

        #SHAPE314 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE314 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #HEADLINE315 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE315>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE316 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE316>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP317 {
            width: 270.299px;
            height: 394.201px;
            top: 345.423px;
            left: 133.034px;
        }

        #SHAPE319 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE319 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #SHAPE320 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE320 svg:last-child {
            fill: rgba(240, 238, 175, 1.0);
        }

        #IMAGE321 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE321>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_linh.jpg");
        }

        #IMAGE321>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #HEADLINE322 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE322>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE323 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE323>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP318 {
            width: 270.299px;
            height: 394.201px;
            top: 345.423px;
            left: 535.034px;
        }

        #SHAPE325 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE325 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #SHAPE326 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE326 svg:last-child {
            fill: rgba(240, 238, 175, 1.0);
        }

        #IMAGE327 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE327>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_san.jpg");
        }

        #IMAGE327>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #HEADLINE328 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE328>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE329 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE329>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP324 {
            width: 270.299px;
            height: 394.201px;
            top: 815.42px;
            left: 133.034px;
        }

        #SHAPE331 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE331 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #SHAPE332 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE332 svg:last-child {
            fill: rgba(240, 238, 175, 1.0);
        }

        #IMAGE333 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE333>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_thuy.jpg");
        }

        #IMAGE333>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #HEADLINE334 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE334>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE335 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE335>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP330 {
            width: 270.299px;
            height: 394.201px;
            top: 815.42px;
            left: 535.034px;
        }

        #VIDEO336 {
            width: 529.099px;
            height: 297.619px;
            top: 17.0066px;
            left: 14.1723px;
        }

        #VIDEO336>.ladi-video>.ladi-video-background {
            background-size: cover;
            background-attachment: scroll;
            background-origin: content-box;
            background-image: url("https://w.ladicdn.com/s529x297/5d2401a7f61f2351bed8557e/5c0fe2430300f95ea011-20200415162607.jpg");
            background-position: center center;
            background-repeat: no-repeat;
        }

        #SHAPE336 {
            width: 60px;
            height: 60px;
            top: 118.81px;
            left: 234.55px;
        }

        #SHAPE336 svg:last-child {
            fill: rgba(0, 0, 0, 0.5);
        }

        #SHAPE337 {
            width: 113.378px;
            height: 113.379px;
            top: 0px;
            left: 0px;
        }

        #SHAPE337 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #HEADLINE338 {
            width: 335px;
            top: 327.115px;
            left: 113.378px;
        }

        #HEADLINE338>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #GROUP339 {
            width: 543.271px;
            height: 357.115px;
            top: 883.46px;
            left: 208.364px;
        }
    }

    @media (max-width: 767px) {
        #SECTION_POPUP {
            height: 0px;
        }

        #SECTION1 {
            height: 118.118px;
        }

        #SECTION1>.ladi-section-background {
            background-color: rgb(255, 255, 255);
        }

        #SECTION3 {
            height: 607.355px;
        }

        #SECTION3>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #BUTTON4 {
            width: 96px;
            height: 24px;
            top: 0px;
            left: 0px;
        }

        #BUTTON4>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 105, 48);
        }

        #BUTTON4>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON4>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON4>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON_TEXT4 {
            width: 115px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT4>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT4>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON_TEXT5 {
            width: 115px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT5>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT5>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON5 {
            width: 96px;
            height: 24px;
            top: 5.0712px;
            left: 120px;
        }

        #BUTTON5>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 106, 48);
        }

        #BUTTON5>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON5>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON5>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON_TEXT7 {
            width: 115px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT7>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT7>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON7 {
            width: 96px;
            height: 24px;
            top: 5.0712px;
            left: 224px;
        }

        #BUTTON7>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 107, 48);
        }

        #BUTTON7>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON7>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON7>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON_TEXT9 {
            width: 115px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT9>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT9>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON9 {
            width: 96px;
            height: 24px;
            top: 5.0712px;
            left: 432.105px;
        }

        #BUTTON9>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 107, 48);
        }

        #BUTTON9>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON9>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON9>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #HEADLINE13 {
            width: 199px;
            top: 0px;
            left: 80.5268px;
        }

        #HEADLINE13>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 18px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE14 {
            width: 299px;
            top: 9.595px;
            left: 7.05351px;
        }

        #HEADLINE14>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #BUTTON_TEXT15 {
            width: 175px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT15>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON15 {
            width: 122.791px;
            height: 30px;
            top: 63.65px;
            left: 91.6308px;
        }

        #BUTTON15>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 104, 48);
        }

        #BUTTON15>.ladi-button {
            border-radius: 3px;
        }

        #BUTTON15.ladi-animation>.ladi-button {
            animation-name: pulse;
            -webkit-animation-name: pulse;
            animation-delay: 1s;
            -webkit-animation-delay: 1s;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            animation-iteration-count: infinite;
            -webkit-animation-iteration-count: infinite;
        }

        #HEADLINE17 {
            width: 351px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE17>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SECTION18 {
            height: 607.355px;
        }

        #SECTION18>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #SECTION19 {
            height: 793.038px;
        }

        #HEADLINE21 {
            width: 343px;
            top: 30px;
            left: 0px;
        }

        #HEADLINE21>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 13px;
            font-style: italic;
            line-height: 1.6;
        }

        #HEADLINE22 {
            width: 79px;
            top: 173.229px;
            left: 26.9612px;
        }

        #HEADLINE22>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE23 {
            width: 95px;
            top: 221.311px;
            left: 26.9612px;
        }

        #HEADLINE23>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE24 {
            width: 158px;
            top: 264.621px;
            left: 26.9612px;
        }

        #HEADLINE24>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE25 {
            width: 51px;
            top: 126.478px;
            left: 31.9008px;
        }

        #HEADLINE25>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE26 {
            width: 196px;
            top: 312.222px;
            left: 26.9612px;
        }

        #HEADLINE26>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE27 {
            width: 168px;
            top: 7.988px;
            left: 49.0732px;
        }

        #HEADLINE27>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SECTION30 {
            height: 1963.07px;
        }

        #SECTION30>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #SECTION31 {
            height: 2069.51px;
        }

        #HEADLINE32 {
            width: 276px;
            top: 26.3007px;
            left: 59.408px;
        }

        #HEADLINE32>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE35 {
            width: 234px;
            top: 29.0902px;
            left: 37px;
        }

        #HEADLINE35>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE37 {
            width: 368px;
            top: 24.193px;
            left: 17.5769px;
        }

        #HEADLINE37>.ladi-headline {
            font-family: "Dancing Script", cursive;
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            line-height: 1.6;
        }

        #SECTION49 {
            height: 380.702px;
        }

        #SECTION49>.ladi-section-background {
            background-color: rgb(240, 238, 175);
        }

        #HEADLINE50 {
            width: 32px;
            top: 66.0856px;
            left: 43.7716px;
        }

        #HEADLINE50>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE51 {
            width: 22px;
            top: 59.9716px;
            left: 84px;
        }

        #HEADLINE51>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE52 {
            width: 32px;
            top: 59.9716px;
            left: 66px;
        }

        #HEADLINE52>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE53 {
            width: 20px;
            top: 66.7185px;
            left: 65.8796px;
        }

        #HEADLINE53>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 15px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE54 {
            width: 307px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE54>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE55 {
            width: 190px;
            top: 91.0856px;
            left: 0px;
        }

        #HEADLINE55>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE56 {
            width: 164px;
            top: 91.0856px;
            left: 0px;
        }

        #HEADLINE56>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE57 {
            width: 152px;
            top: 97.8326px;
            left: 0px;
        }

        #HEADLINE57>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 15px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE58 {
            width: 119px;
            top: 97.086px;
            left: 0px;
        }

        #HEADLINE58>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SHAPE59 {
            width: 59.9717px;
            height: 59.9716px;
            top: 0px;
            left: 29.5141px;
        }

        #SHAPE59 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE60 {
            width: 59.9719px;
            height: 59.9716px;
            top: 0px;
            left: 65.0141px;
        }

        #SHAPE60 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE61 {
            width: 56.9732px;
            height: 59.9716px;
            top: 0px;
            left: 53.5134px;
        }

        #SHAPE61 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE62 {
            width: 59.9718px;
            height: 59.9717px;
            top: 0px;
            left: 46.0141px;
        }

        #SHAPE62 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SECTION63 {
            height: 440.693px;
        }

        #SECTION63>.ladi-section-background {
            background-color: rgb(58, 44, 38);
        }

        #HEADLINE64 {
            width: 193px;
            top: 0px;
            left: 170.251px;
        }

        #HEADLINE64>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE65 {
            width: 158px;
            top: 114.338px;
            left: 0px;
        }

        #HEADLINE65>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE66 {
            width: 493px;
            top: 146.483px;
            left: 1px;
        }

        #HEADLINE66>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 12px;
            line-height: 1.6;
        }

        #HEADLINE67 {
            width: 200px;
            top: 175.147px;
            left: 0px;
        }

        #HEADLINE67>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 12px;
            line-height: 1.6;
        }

        #HEADLINE68 {
            width: 289px;
            top: 200.149px;
            left: 0px;
        }

        #HEADLINE68>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 12px;
            line-height: 1.6;
        }

        #HEADLINE69 {
            width: 280px;
            top: 227.192px;
            left: 0.003px;
        }

        #HEADLINE69>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE70 {
            width: 406px;
            top: 259.332px;
            left: 0.006px;
        }

        #HEADLINE70>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 11px;
            text-align: left;
            line-height: 1.6;
        }

        #HEADLINE71 {
            width: 371px;
            top: 303.502px;
            left: 0.006px;
        }

        #HEADLINE71>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 12px;
            text-align: left;
            line-height: 1.6;
        }

        #HEADLINE72 {
            width: 377px;
            top: 328.502px;
            left: 0.006px;
        }

        #HEADLINE72>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 12px;
            text-align: left;
            line-height: 1.6;
        }

        #IMAGE2 {
            width: 69.84px;
            height: 69.84px;
            top: 0px;
            left: 175.08px;
        }

        #IMAGE2>.ladi-image>.ladi-image-background {
            width: 69.84px;
            height: 69.84px;
            top: 0px;
            left: 0px;
            background-image: url("/img/logo_tb.png");
        }

        #BOX76 {
            width: 303px;
            height: 41px;
            top: 0px;
            left: 0px;
        }

        #BOX76>.ladi-overlay {
            border-radius: 3px;
        }

        #BOX76>.ladi-box {
            border-radius: 3px;
            border-style: solid;
            border-color: rgb(232, 106, 48);
            border-width: 2px;
        }

        #HEADLINE78 {
            width: 264px;
            top: 162.229px;
            left: 118.961px;
        }

        #HEADLINE78>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE79 {
            width: 212px;
            top: 221.311px;
            left: 134.749px;
        }

        #HEADLINE79>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE80 {
            width: 500px;
            top: 264.621px;
            left: 171.749px;
        }

        #HEADLINE80>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE81 {
            width: 209px;
            top: 126.478px;
            left: 104.75px;
        }

        #HEADLINE81>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE82 {
            width: 300px;
            top: 314.222px;
            left: 236px;
        }

        #HEADLINE82>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            line-height: 1.6;
        }

        #BOX83 {
            width: 89.4221px;
            height: 33.2554px;
            top: 167.601px;
            left: 21.7502px;
        }

        #BOX83>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX83>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX85 {
            width: 103.246px;
            height: 33.2554px;
            top: 215.683px;
            left: 21.7502px;
        }

        #BOX85>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX85>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX86 {
            width: 143.246px;
            height: 33.2554px;
            top: 258.993px;
            left: 21.7502px;
        }

        #BOX86>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX86>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX87 {
            width: 71.3444px;
            height: 33.2554px;
            top: 120.85px;
            left: 23.3936px;
        }

        #BOX87>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX87>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #BOX88 {
            width: 207.405px;
            height: 33.2554px;
            top: 306.594px;
            left: 21.7502px;
        }

        #BOX88>.ladi-overlay {
            border-radius: 61px;
        }

        #BOX88>.ladi-box {
            background: #FFCC2F;
            background: -webkit-linear-gradient(180deg, #FFCC2F, #EF5734);
            background: linear-gradient(180deg, #FFCC2F, #EF5734);
            border-radius: 61px;
        }

        #SHAPE92 {
            width: 42.946px;
            height: 42.9459px;
            top: 0px;
            left: 0px;
        }

        #SHAPE92 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE93 {
            width: 28.1833px;
            height: 28.1832px;
            top: 12.6154px;
            left: 20.473px;
        }

        #SHAPE93 svg:last-child {
            fill: rgba(232, 106, 48, 0.8);
        }

        #SHAPE95 {
            width: 401.636px;
            height: 256.775px;
            top: 46.613px;
            left: 0px;
        }

        #SHAPE95 svg:last-child {
            fill: rgba(232, 106, 48, 1);
        }

        #HEADLINE96 {
            width: 166px;
            top: 0px;
            left: 114.818px;
        }

        #HEADLINE96>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE97 {
            width: 307px;
            top: 70.955px;
            left: 73.7265px;
        }

        #HEADLINE97>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE98 {
            width: 307px;
            top: 138.955px;
            left: 73.7265px;
        }

        #HEADLINE98>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE99 {
            width: 307px;
            top: 228.955px;
            left: 73.7265px;
        }

        #HEADLINE99>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE100 {
            width: 258px;
            top: 0px;
            left: 69.409px;
        }

        #HEADLINE100>.ladi-headline {
            color: rgb(232, 105, 48);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #SHAPE101 {
            width: 401.66px;
            height: 245.775px;
            top: 51.613px;
            left: 0px;
        }

        #SHAPE101 svg:last-child {
            fill: rgba(232, 106, 48, 1);
        }

        #HEADLINE102 {
            width: 310px;
            top: 75.955px;
            left: 69.409px;
        }

        #HEADLINE102>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE103 {
            width: 310px;
            top: 143.955px;
            left: 68.409px;
        }

        #HEADLINE103>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE104 {
            width: 310px;
            top: 221.455px;
            left: 69.409px;
        }

        #HEADLINE104>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #SHAPE105 {
            width: 39.3494px;
            height: 44.8375px;
            top: 72.876px;
            left: 29.727px;
        }

        #SHAPE105>.ladi-shape {
            transform: rotate(-9deg);
            -webkit-transform: rotate(-9deg);
        }

        #SHAPE105 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE106 {
            width: 39.3494px;
            height: 44.8375px;
            top: 147.147px;
            left: 29.727px;
        }

        #SHAPE106 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE107 {
            width: 39.3494px;
            height: 44.8375px;
            top: 221.275px;
            left: 29.727px;
        }

        #SHAPE107 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE108 {
            width: 37.1495px;
            height: 42.3307px;
            top: 77.876px;
            left: 23.318px;
        }

        #SHAPE108 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE109 {
            width: 37.1495px;
            height: 42.3307px;
            top: 142.916px;
            left: 23.318px;
        }

        #SHAPE109 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #SHAPE110 {
            width: 37.1495px;
            height: 42.3307px;
            top: 219.703px;
            left: 23.318px;
        }

        #SHAPE110 svg:last-child {
            fill: rgba(255, 255, 255, 1);
        }

        #HEADLINE116 {
            width: 361px;
            top: 0px;
            left: 32.574px;
        }

        #HEADLINE116>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE118 {
            width: 403px;
            top: -9px;
            left: 29px;
        }

        #HEADLINE118>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE119 {
            width: 300px;
            top: 0px;
            left: 63.852px;
        }

        #HEADLINE119>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE120 {
            width: 236px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE120>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE121 {
            width: 236px;
            top: 75px;
            left: 0px;
        }

        #HEADLINE121>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE122 {
            width: 236px;
            top: 158.5px;
            left: 0px;
        }

        #HEADLINE122>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE123 {
            width: 236px;
            top: 238px;
            left: 0px;
        }

        #HEADLINE123>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE124 {
            width: 236px;
            top: 314px;
            left: 0px;
        }

        #HEADLINE124>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE126 {
            width: 235px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE126>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            line-height: 1.6;
        }

        #HEADLINE127 {
            width: 235px;
            top: 28px;
            left: 0px;
        }

        #HEADLINE127>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE128 {
            width: 233px;
            top: 11.3085px;
            left: 13.852px;
        }

        #HEADLINE128>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #HEADLINE129 {
            width: 81px;
            top: 0px;
            left: 0px;
        }

        #HEADLINE129>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE130 {
            width: 388px;
            top: 22px;
            left: 10.852px;
        }

        #HEADLINE130>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-style: italic;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE131 {
            width: 494px;
            top: 52px;
            left: 10.852px;
        }

        #HEADLINE131>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-style: italic;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP134 {
            width: 235px;
            height: 72px;
            top: 13.117px;
            left: 18px;
        }

        #LINE141 {
            height: 376px;
            top: 8px;
            left: 263.148px;
        }

        #LINE141>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE141>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE142 {
            width: 410px;
            top: 79.504px;
            left: 7.648px;
        }

        #LINE142>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE142>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE143 {
            width: 410px;
            top: 162.504px;
            left: 7.648px;
        }

        #LINE143>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE143>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE144 {
            width: 410px;
            top: 317.504px;
            left: 7.648px;
        }

        #LINE144>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE144>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE145 {
            width: 410px;
            top: 235.504px;
            left: 7.648px;
        }

        #LINE145>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE145>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE146 {
            width: 410px;
            top: 376px;
            left: 7.648px;
        }

        #LINE146>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE146>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE147 {
            height: 378px;
            top: 8px;
            left: 408.148px;
        }

        #LINE147>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE147>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE149 {
            width: 408px;
            top: 85.117px;
            left: 8.574px;
        }

        #LINE149>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE149>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE150 {
            width: 410px;
            top: 36.3085px;
            left: 8.5px;
        }

        #LINE150>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE150>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE153 {
            height: 85px;
            top: 8.7155px;
            left: 260px;
        }

        #LINE153>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE153>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE154 {
            height: 33px;
            top: 11.3085px;
            left: 264px;
        }

        #LINE154>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE154>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE158 {
            width: 410px;
            top: 0px;
            left: 7.648px;
        }

        #LINE158>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE158>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE159 {
            width: 408px;
            top: 0px;
            left: 7.648px;
        }

        #LINE159>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE159>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE160 {
            width: 411px;
            top: 0px;
            left: 8.5px;
        }

        #LINE160>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 104, 48);
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 0px !important;
        }

        #LINE160>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE161 {
            height: 378px;
            top: 7.5px;
            left: 0px;
        }

        #LINE161>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE161>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE162 {
            height: 86px;
            top: 8.7155px;
            left: 0px;
        }

        #LINE162>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE162>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #LINE163 {
            height: 37px;
            top: 9.3085px;
            left: 0px;
        }

        #LINE163>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE163>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #GROUP132 {
            width: 236px;
            height: 358px;
            top: 18px;
            left: 22.148px;
        }

        #HEADLINE166 {
            width: 102px;
            top: 41px;
            left: 300.148px;
        }

        #HEADLINE166>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE167 {
            width: 102px;
            top: 110.504px;
            left: 300.148px;
        }

        #HEADLINE167>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE168 {
            width: 102px;
            top: 193.504px;
            left: 300.148px;
        }

        #HEADLINE168>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE169 {
            width: 129px;
            top: 279.504px;
            left: 300.148px;
        }

        #HEADLINE169>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE170 {
            width: 102px;
            top: 344.504px;
            left: 297.148px;
        }

        #HEADLINE170>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #LINE171 {
            height: 87px;
            top: 8.117px;
            left: 407.148px;
        }

        #LINE171>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE171>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #HEADLINE172 {
            width: 121px;
            top: 47.7155px;
            left: 294.648px;
        }

        #HEADLINE172>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE173 {
            width: 113px;
            top: 11.3085px;
            left: 297px;
        }

        #HEADLINE173>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #LINE174 {
            height: 38px;
            top: 658.004px;
            left: 410px;
        }

        #LINE174>.ladi-line>.ladi-line-container {
            border-top: 0px !important;
            border-right: 2px solid rgb(232, 104, 48);
            border-bottom: 2px solid rgb(232, 104, 48);
            border-left: 2px solid rgb(232, 104, 48);
        }

        #LINE174>.ladi-line {
            height: 100%;
            padding: 0px 8px;
        }

        #SHAPE175 {
            width: 47.4019px;
            height: 45.4912px;
            top: 5.0661px;
            left: 7.4943px;
        }

        #SHAPE175 svg:last-child {
            fill: rgba(232, 107, 48, 1.0);
        }

        #SHAPE176 {
            width: 47.4019px;
            height: 45.4912px;
            top: 0px;
            left: 0px;
        }

        #SHAPE176 svg:last-child {
            fill: rgba(232, 108, 48, 1.0);
        }

        #SHAPE177 {
            width: 15.5769px;
            height: 15.9576px;
            top: 20.193px;
            left: 8px;
        }

        #SHAPE177 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE178 {
            width: 14.6008px;
            height: 14.9576px;
            top: 177.047px;
            left: 242.059px;
        }

        #SHAPE178>.ladi-shape {
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
        }

        #SHAPE178 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #BOX179 {
            width: 402.096px;
            height: 212px;
            top: 0px;
            left: 0px;
        }

        #BOX179>.ladi-overlay {
            border-radius: 4px;
        }

        #BOX179>.ladi-box {
            border-radius: 4px;
            box-shadow: 0px 0px 27px -20px #000;
            -webkit-box-shadow: 0px 0px 27px -20px #000;
            background-color: rgb(255, 255, 255);
        }

        #SHAPE192 {
            width: 42.5853px;
            height: 40.976px;
            top: 0px;
            left: 0px;
        }

        #SHAPE192 svg:last-child {
            fill: rgba(232, 109, 48, 1.0);
        }

        #GROUP198 {
            width: 402.096px;
            height: 212px;
            top: 98.09px;
            left: 8.904px;
        }

        #POPUP203 {
            width: 398.925px;
            height: 394px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP203>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE204 {
            width: 397.912px;
            height: 393px;
            top: 0.5px;
            left: 0.5065px;
        }

        #IMAGE204>.ladi-image>.ladi-image-background {
            width: 522.74px;
            height: 425.82px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s850x750/5d2401a7f61f2351bed8557e/photo_2020-04-13_16-31-58-20200415032354.jpg");
        }

        #POPUP205 {
            width: 391.772px;
            height: 215px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP205>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE206 {
            width: 391.772px;
            height: 212.994px;
            top: 0px;
            left: 0px;
        }

        #IMAGE206>.ladi-image>.ladi-image-background {
            width: 391.772px;
            height: 212.994px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s700x550/5d2401a7f61f2351bed8557e/photo_2020-04-14_15-58-51-20200415032354.jpg");
        }

        #POPUP207 {
            width: 400.445px;
            height: 397px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP207>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE208 {
            width: 399.599px;
            height: 397px;
            top: 0px;
            left: 0px;
        }

        #IMAGE208>.ladi-image>.ladi-image-background {
            width: 399.599px;
            height: 397px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s700x700/5d2401a7f61f2351bed8557e/photo_2020-04-13_16-29-04-20200415032354.jpg");
        }

        #POPUP209 {
            width: 403.031px;
            height: 391px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP209>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE211 {
            width: 402.824px;
            height: 391px;
            top: 0px;
            left: 0px;
        }

        #IMAGE211>.ladi-image>.ladi-image-background {
            width: 402.824px;
            height: 391px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s750x700/5d2401a7f61f2351bed8557e/photo_2020-04-13_15-15-11-20200415032354.jpg");
        }

        #POPUP212 {
            width: 392px;
            height: 530px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP212>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE213 {
            width: 391.402px;
            height: 530px;
            top: 0px;
            left: 0px;
        }

        #IMAGE213>.ladi-image>.ladi-image-background {
            width: 391.402px;
            height: 530px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s700x850/5d2401a7f61f2351bed8557e/photo_2020-04-13_15-14-42-20200415032354.jpg");
        }

        #POPUP214 {
            width: 402.618px;
            height: 297px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP214>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE215 {
            width: 404.188px;
            height: 297px;
            top: 0px;
            left: 0px;
        }

        #IMAGE215>.ladi-image>.ladi-image-background {
            width: 404.188px;
            height: 297px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s750x600/5d2401a7f61f2351bed8557e/photo_2020-04-14_15-57-20-20200415032354.jpg");
        }

        #POPUP216 {
            width: 403.87px;
            height: 184px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            margin: auto;
        }

        #POPUP216>.ladi-popup {
            background-color: rgb(255, 255, 255);
        }

        #IMAGE217 {
            width: 405.391px;
            height: 184px;
            top: 0px;
            left: 0px;
        }

        #IMAGE217>.ladi-image>.ladi-image-background {
            width: 408.888px;
            height: 184px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s750x500/5d2401a7f61f2351bed8557e/photo_2020-04-13_16-33-27-20200415032354.jpg");
        }

        #GROUP219 {
            width: 426.148px;
            height: 394px;
            top: 38px;
            left: 0px;
        }

        #GROUP220 {
            width: 425.148px;
            height: 103.117px;
            top: 26px;
            left: 0px;
        }

        #GROUP221 {
            width: 419.5px;
            height: 54.3085px;
            top: 26.3085px;
            left: 0px;
        }

        #GROUP222 {
            width: 419.5px;
            height: 80.617px;
            top: 624.387px;
            left: 0px;
        }

        #GROUP223 {
            width: 425.148px;
            height: 129.117px;
            top: 628.387px;
            left: 1.278px;
        }

        #GROUP224 {
            width: 426.148px;
            height: 432px;
            top: 0px;
            left: 0.852px;
        }

        #GROUP225 {
            width: 504.852px;
            height: 96px;
            top: 1406px;
            left: 9px;
        }

        #GROUP226 {
            width: 335.408px;
            height: 56.3007px;
            top: 0px;
            left: 0px;
        }

        #GROUP227 {
            width: 513.852px;
            height: 812px;
            top: 143.069px;
            left: -3.852px;
        }

        #GROUP228 {
            width: 425.148px;
            height: 129.117px;
            top: 1109.387px;
            left: 1.278px;
        }

        #GROUP230 {
            width: 401.636px;
            height: 303.388px;
            top: 57.919px;
            left: 0px;
        }

        #GROUP231 {
            width: 401.66px;
            height: 297.388px;
            top: 411.288px;
            left: 3.19744px;
        }

        #GROUP232 {
            width: 217.073px;
            height: 40.976px;
            top: 0px;
            left: 3.19744px;
        }

        #GROUP237 {
            width: 48.6563px;
            height: 42.9459px;
            top: 0px;
            left: 0px;
        }

        #GROUP238 {
            width: 351px;
            height: 50px;
            top: 4.61853px;
            left: 46.0002px;
        }

        #GROUP240 {
            width: 306.054px;
            height: 41px;
            top: 108.65px;
            left: 0px;
        }

        #GROUP244 {
            width: 306.054px;
            height: 149.65px;
            top: 399.35px;
            left: 56.9732px;
        }

        #GROUP246 {
            width: 401.66px;
            height: 708.676px;
            top: 6.362px;
            left: 12.182px;
        }

        #SHAPE249 {
            width: 27.582px;
            height: 35.2549px;
            top: 16px;
            left: 16.9917px;
        }

        #SHAPE249 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #HEADLINE251 {
            width: 210px;
            top: 33px;
            left: 147.75px;
        }

        #HEADLINE251>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 12px;
            font-style: italic;
            line-height: 1.6;
        }

        #LINE252 {
            width: 159px;
            top: 128.483px;
            left: 2px;
        }

        #LINE252>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(255, 255, 255);
            border-right: 2px solid rgb(255, 255, 255);
            border-bottom: 2px solid rgb(255, 255, 255);
            border-left: 0px !important;
        }

        #LINE252>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE253 {
            width: 316px;
            top: 242.343px;
            left: 0.003px;
        }

        #LINE253>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(255, 255, 255);
            border-right: 2px solid rgb(255, 255, 255);
            border-bottom: 2px solid rgb(255, 255, 255);
            border-left: 0px !important;
        }

        #LINE253>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #GROUP254 {
            width: 494px;
            height: 366.502px;
            top: 39.822px;
            left: 18.431px;
        }

        #IMAGE255 {
            width: 115px;
            height: 115px;
            top: 0px;
            left: 23.431px;
        }

        #IMAGE255>.ladi-image>.ladi-image-background {
            width: 115px;
            height: 115px;
            top: 0px;
            left: 0px;
            background-image: url("/img/logo_tb.png");
        }

        #LINE263 {
            width: 65px;
            top: 47.8089px;
            left: 61.408px;
        }

        #LINE263>.ladi-line>.ladi-line-container {
            border-top: 3px solid rgb(232, 107, 48);
            border-right: 3px solid rgb(232, 107, 48);
            border-bottom: 3px solid rgb(232, 107, 48);
            border-left: 0px !important;
        }

        #LINE263>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE264 {
            width: 24px;
            top: 47.8089px;
            left: 135.408px;
        }

        #LINE264>.ladi-line>.ladi-line-container {
            border-top: 3px solid rgb(255, 255, 255);
            border-right: 3px solid rgb(255, 255, 255);
            border-bottom: 3px solid rgb(255, 255, 255);
            border-left: 0px !important;
        }

        #LINE264>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #LINE265 {
            width: 51px;
            top: 47.8089px;
            left: 165.408px;
        }

        #LINE265>.ladi-line>.ladi-line-container {
            border-top: 3px solid rgb(232, 107, 48);
            border-right: 3px solid rgb(232, 107, 48);
            border-bottom: 3px solid rgb(232, 107, 48);
            border-left: 0px !important;
        }

        #LINE265>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #SHAPE266 {
            width: 255px;
            height: 32.8353px;
            top: 23.2549px;
            left: 44.5px;
        }

        #SHAPE266 svg:last-child {
            fill: rgba(232, 108, 48, 1.0);
        }

        #LINE267 {
            width: 69px;
            top: 0px;
            left: 0px;
        }

        #LINE267>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 105, 48);
            border-right: 2px solid rgb(232, 105, 48);
            border-bottom: 2px solid rgb(232, 105, 48);
            border-left: 0px !important;
        }

        #LINE267>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #SHAPE268 {
            width: 59.1938px;
            height: 19.7881px;
            top: 0.89px;
            left: 79.4031px;
        }

        #SHAPE268 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #LINE269 {
            width: 69px;
            top: 0.89px;
            left: 147px;
        }

        #LINE269>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 105, 48);
            border-right: 2px solid rgb(232, 105, 48);
            border-bottom: 2px solid rgb(232, 105, 48);
            border-left: 0px !important;
        }

        #LINE269>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #GROUP270 {
            width: 216px;
            height: 20.6781px;
            top: 32.004px;
            left: 45.5px;
        }

        #IMAGE271 {
            width: 49.0028px;
            height: 49.0028px;
            top: 13px;
            left: auto;
            bottom: auto;
            right: 21px;
            position: fixed;
            z-index: 90000050;
            margin-right: calc((100% - 420px) / 2);
        }

        #IMAGE271>.ladi-image>.ladi-image-background {
            width: 49.0028px;
            height: 49.0028px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/5d2401a7f61f2351bed8557e/phone-icon-20200415093319.gif");
        }

        #BUTTON_TEXT272 {
            width: 115px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT272>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #BUTTON_TEXT272>.ladi-headline:hover {
            color: rgb(232, 105, 48);
        }

        #BUTTON272 {
            width: 96px;
            height: 24px;
            top: 5.0712px;
            left: 329.105px;
        }

        #BUTTON272>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 107, 48);
        }

        #BUTTON272>.ladi-button {
            border-radius: 5px;
            border-color: rgb(37, 87, 254);
            border-width: 2px;
        }

        #BUTTON272>.ladi-button:hover {
            background-color: rgb(255, 255, 255);
        }

        #BUTTON272>.ladi-button:hover .ladi-button-background {
            background-color: rgb(255, 255, 255);
        }

        #GROUP274 {
            width: 528.105px;
            height: 29.0712px;
            top: 78.4915px;
            left: -114.052px;
        }

        #SECTION275 {
            height: 700.524px;
        }

        #FORM276 {
            width: 335.416px;
            height: 277.916px;
            top: 160.615px;
            left: 28.792px;
        }

        #FORM276>.ladi-form {
            color: rgb(0, 0, 0);
            font-size: 14px;
            line-height: 1.6;
        }

        #FORM276 .ladi-form-item .ladi-form-control::placeholder,
        #FORM276 .ladi-form .ladi-form-item .ladi-form-control-select[data-selected=""],
        #FORM276 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
            color: rgba(0, 0, 0, 1.0);
        }

        #FORM276 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="32" height="24" viewBox="0 0 32 24"><polygon points="0,0 32,0 16,24" style="fill: rgba(0%2C%200%2C%200%2C%201.0)"></polygon></svg>');
        }

        #FORM276 .ladi-form-item-container {
            border-radius: 3px;
            border-style: solid;
            border-color: rgb(232, 105, 48);
            border-width: 2px;
        }

        #FORM276 .ladi-form-item-background {
            background-color: rgb(255, 255, 255);
            border-radius: 1px
        }

        #BUTTON277 {
            width: 124.583px;
            height: 33.5416px;
            top: 244.375px;
            left: 105.417px;
        }

        #BUTTON277>.ladi-button>.ladi-button-background {
            background-color: rgb(232, 105, 48);
        }

        #BUTTON277>.ladi-button {
            border-radius: 4px;
        }

        #BUTTON277.ladi-animation>.ladi-button {
            animation-name: pulse;
            -webkit-animation-name: pulse;
            animation-delay: 1s;
            -webkit-animation-delay: 1s;
            animation-duration: 2s;
            -webkit-animation-duration: 2s;
            animation-iteration-count: 1;
            -webkit-animation-iteration-count: 1;
        }

        #BUTTON_TEXT277 {
            width: 164px;
            top: 9px;
            left: 0px;
        }

        #BUTTON_TEXT277>.ladi-headline {
            color: rgb(255, 255, 255);
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            line-height: 1.6;
        }

        #FORM_ITEM278 {
            width: 335.416px;
            height: 33.5416px;
            top: 0px;
            left: 0px;
        }

        #FORM_ITEM279 {
            width: 335.416px;
            height: 33.5416px;
            top: 43.1249px;
            left: 0px;
        }

        #FORM_ITEM280 {
            width: 335.416px;
            height: 33.5416px;
            top: 86.2496px;
            left: 0px;
        }

        #FORM_ITEM281 {
            width: 335.416px;
            height: 95.8332px;
            top: 129.375px;
            left: 0px;
        }

        #HEADLINE282 {
            width: 149px;
            top: 0px;
            left: 55.6363px;
        }

        #HEADLINE282>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            line-height: 1.6;
        }

        #IMAGE283 {
            width: 35px;
            height: 35px;
            top: 1947.89px;
            left: 192.5px;
        }

        #IMAGE283>.ladi-image>.ladi-image-background {
            width: 35px;
            height: 35px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/5d2401a7f61f2351bed8557e/giphy-1551928524-20200406153115.gif");
        }

        #HEADLINE284 {
            width: 326px;
            top: 2009.89px;
            left: 47px;
        }

        #HEADLINE284>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            font-weight: bold;
            line-height: 1.6;
        }

        #HEADLINE285 {
            width: 393px;
            top: 72.0908px;
            left: 0px;
        }

        #HEADLINE285>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }

        #SHAPE288 {
            width: 44.2796px;
            height: 21.6368px;
            top: 2.2724px;
            left: 0px;
        }

        #SHAPE288 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE289 {
            width: 44.2796px;
            height: 21.6368px;
            top: 2.2724px;
            left: 211.993px;
        }

        #SHAPE289>.ladi-shape {
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
        }

        #SHAPE289 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #GROUP290 {
            width: 256.273px;
            height: 25px;
            top: 0px;
            left: 0px;
        }

        #LINE291 {
            width: 107px;
            top: 25px;
            left: 74.6363px;
        }

        #LINE291>.ladi-line>.ladi-line-container {
            border-top: 2px solid rgb(232, 105, 48);
            border-right: 2px solid rgb(232, 105, 48);
            border-bottom: 2px solid rgb(232, 105, 48);
            border-left: 0px !important;
        }

        #LINE291>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #GROUP292 {
            width: 397px;
            height: 339.849px;
            top: 17px;
            left: 11.4999px;
        }

        #GROUP293 {
            width: 256.273px;
            height: 43px;
            top: 0px;
            left: 68.3637px;
        }

        #GROUP294 {
            width: 393px;
            height: 438.531px;
            top: 10.9092px;
            left: 13.431px;
        }

        #SHAPE295 {
            width: 20.0571px;
            height: 26.4952px;
            top: 12.0096px;
            left: 0px;
        }

        #SHAPE295>.ladi-shape {
            transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
        }

        #SHAPE295 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #SHAPE296 {
            width: 20.0571px;
            height: 26.4952px;
            top: 0px;
            left: 0px;
        }

        #SHAPE296>.ladi-shape {
            transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
        }

        #SHAPE296 svg:last-child {
            fill: rgba(232, 106, 48, 0.8);
        }

        #GROUP297 {
            width: 20.0571px;
            height: 38.5048px;
            top: auto;
            left: auto;
            bottom: 39px;
            right: 100px;
            position: fixed;
            z-index: 90000050;
            margin-right: calc((100% - 420px) / 2);
        }

        #GROUP299 {
            width: 335.408px;
            height: 66.8089px;
            top: 26.2566px;
            left: 58.296px;
        }

        #GROUP300 {
            width: 307px;
            height: 52.6821px;
            top: 10px;
            left: 56.5px;
        }

        #GROUP301 {
            width: 119px;
            height: 122.086px;
            top: 79.682px;
            left: 247.5px;
        }

        #GROUP302 {
            width: 190px;
            height: 116.086px;
            top: 223.622px;
            left: 212px;
        }

        #GROUP303 {
            width: 164px;
            height: 116.086px;
            top: 223.622px;
            left: 21.8702px;
        }

        #GROUP304 {
            width: 152px;
            height: 121.833px;
            top: 79.682px;
            left: 31.5291px;
        }

        #IMAGE305 {
            width: 420px;
            height: 315px;
            top: 0px;
            left: 0px;
        }

        #IMAGE305>.ladi-image>.ladi-image-background {
            width: 420px;
            height: 315px;
            top: 0px;
            left: 0px;
            background-image: url("https://w.ladicdn.com/s750x650/5d2401a7f61f2351bed8557e/5c0fe2430300f95ea011-20200415162607.jpg");
        }

        #NOTIFY306 {
            width: 300px;
            height: 62px;
            top: auto;
            left: 10px;
            bottom: 10px;
            right: auto;
            position: fixed;
            z-index: 90000060;
        }

        #IMAGE309 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE309>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_xuan.jpg");
        }

        #IMAGE309>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #SHAPE313 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE313 svg:last-child {
            fill: rgba(240, 238, 175, 1.0);
        }

        #SHAPE314 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE314 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #HEADLINE315 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE315>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE316 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE316>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP317 {
            width: 270.299px;
            height: 394.201px;
            top: 320.09px;
            left: 74.8505px;
        }

        #SHAPE319 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE319 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #SHAPE320 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE320 svg:last-child {
            fill: rgba(240, 238, 175, 1.0);
        }

        #IMAGE321 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE321>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_linh.jpg");
        }

        #IMAGE321>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #HEADLINE322 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE322>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE323 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE323>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP318 {
            width: 270.299px;
            height: 394.201px;
            top: 1532.69px;
            left: 74.8505px;
        }

        #SHAPE325 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE325 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #SHAPE326 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE326 svg:last-child {
            fill: rgba(240, 238, 175, 1.0);
        }

        #IMAGE327 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE327>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_san.jpg");
        }

        #IMAGE327>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #HEADLINE328 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE328>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE329 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE329>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP324 {
            width: 270.299px;
            height: 394.201px;
            top: 724.291px;
            left: 74.8505px;
        }

        #SHAPE331 {
            width: 258.299px;
            height: 380.893px;
            top: 0px;
            left: 0px;
        }

        #SHAPE331 svg:last-child {
            fill: rgba(210, 210, 210, 1.0);
        }

        #SHAPE332 {
            width: 258.299px;
            height: 380.893px;
            top: 13.308px;
            left: 12px;
        }

        #SHAPE332 svg:last-child {
            fill: rgba(240, 238, 175, 1.0);
        }

        #IMAGE333 {
            width: 159.5px;
            height: 160px;
            top: 28.255px;
            left: 61.4px;
        }

        #IMAGE333>.ladi-image>.ladi-image-background {
            width: 159.5px;
            height: 160px;
            top: 0px;
            left: 0px;
            background-image: url("/img/avt_thuy.jpg");
        }

        #IMAGE333>.ladi-image {
            border-radius: 88px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            border-width: 1px;
        }

        #HEADLINE334 {
            width: 229px;
            top: 193.99px;
            left: 29.179px;
        }

        #HEADLINE334>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: bold;
            text-align: justify;
            line-height: 1.6;
        }

        #HEADLINE335 {
            width: 229px;
            top: 234.99px;
            left: 27.179px;
        }

        #HEADLINE335>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 12px;
            text-align: justify;
            line-height: 1.6;
        }

        #GROUP330 {
            width: 270.299px;
            height: 394.201px;
            top: 1128.49px;
            left: 74.8505px;
        }

        #VIDEO336 {
            width: 373.333px;
            height: 210px;
            top: 11px;
            left: 12.3335px;
        }

        #VIDEO336>.ladi-video>.ladi-video-background {
            background-size: cover;
            background-attachment: scroll;
            background-origin: content-box;
            background-image: url("https://w.ladicdn.com/s373x210/5d2401a7f61f2351bed8557e/5c0fe2430300f95ea011-20200415162607.jpg");
            background-position: center center;
            background-repeat: no-repeat;
        }

        #SHAPE336 {
            width: 60px;
            height: 60px;
            top: 75px;
            left: 156.667px;
        }

        #SHAPE336 svg:last-child {
            fill: rgba(0, 0, 0, 0.5);
        }

        #SHAPE337 {
            width: 80px;
            height: 80px;
            top: 0px;
            left: 0px;
        }

        #SHAPE337 svg:last-child {
            fill: rgba(232, 105, 48, 1.0);
        }

        #HEADLINE338 {
            width: 330px;
            top: 231.12px;
            left: 34px;
        }

        #HEADLINE338>.ladi-headline {
            color: rgb(0, 0, 0);
            font-size: 19px;
            font-weight: bold;
            line-height: 1.6;
        }

        #GROUP339 {
            width: 385.667px;
            height: 261.12px;
            top: 979.44px;
            left: 11px;
        }
    }

</style>
<style id="style_lazyload" type="text/css">
    .ladi-section-background,
    .ladi-image-background,
    .ladi-button-background,
    .ladi-headline,
    .ladi-video-background,
    .ladi-countdown-background,
    .ladi-box,
    .ladi-frame,
    .ladi-form-item-background,
    .ladi-gallery-view-item,
    .ladi-gallery-control-item,
    .ladi-spin-lucky-screen,
    .ladi-spin-lucky-start,
    .ladi-list-paragraph ul li:before {
        background-image: none !important;
    }

</style>
