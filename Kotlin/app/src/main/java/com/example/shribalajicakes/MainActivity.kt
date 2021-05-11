package com.example.shribalajicakes

import android.os.Bundle
import android.webkit.WebChromeClient
import android.webkit.WebView
import android.webkit.WebViewClient
import androidx.appcompat.app.AppCompatActivity


class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val myWebView: WebView = findViewById(R.id.WebView)
        myWebView.settings.javaScriptEnabled = true
        myWebView.webChromeClient = WebChromeClient()
        myWebView.webViewClient = WebViewClient()
        myWebView.loadUrl("http://deals.my-style.in/")
    }
}