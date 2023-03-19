<p>稱呼：{{ $data['name'] }} {{ $data['sex'] == 1 ? '先生' : '小姐' }}</p>
<p>信箱： {{ $data['mail'] }}</p>
<p>手機<span
        style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">{{ $data['phone'] }}</span>
</p>
<p><span
        style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">建議內容：&nbsp;</span>
</p>
<p>{{ $data['text'] }}</p>
<p><br></p>
