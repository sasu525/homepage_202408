<!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Posts</title>
        </head>
        <body>
            <div>
                <h1 >投稿を作成</h1>
                <form action="/menulunch" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="message">商品名</label>
                        <input type="text" name="munulunch[name]"  placeholder="タイトル" />
                        
                    </div>
                    <div>
                        <label for="message" >商品説明</label>
                        <textarea name="menulunch[body]" placeholder="商品説明を記述してください。"></textarea>
                        
                    </div>
                    <div>
                        <input type="file" name="image[]" multiple>
                    </div>
                            <button type="submit" >投稿</button>
                        </div>
                    </div>
                </form>
                <button type="submit">戻る</button>
            </div>
            
        </body>
    </html>
