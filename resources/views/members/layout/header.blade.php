<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>ListJoe Members Area</title>
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/main.css" type="text/css" />
  <script type="text/javascript" src="/js/jquery.min.7.1.js"></script>
  <script type="text/javascript" src="/js/global.js"></script>
  @include ('members.layout.google-analytics')
  <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/hdpfz7m2vgiig2zohze2n23vfx0meivy7flc54tvj7biqkm3/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
import { Editor } from '@tiptap/core'
import StarterKit from '@tiptap/starter-kit'

new Editor({
  element: document.querySelector('.element'),
  extensions: [StarterKit],
  content: '<p>Hello World!</p>',
})
</script>

</head>


<body>
  @include('members.layout.facebook')
  <div class="header">
    <div class="background"></div>
    <div class="city"></div>
    <a href="/members">
      <img src="/img/logo.png" class="logo"/>
    </a>
    <div class="linebottom"></div>
    @include('members.layout.profile-block')
  </div>