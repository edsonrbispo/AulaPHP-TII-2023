<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula de Revisão de HTML5 e CSS3</title>

  <style>

      .mes{
        border-collapse: collapse;
      }

      .mes th, .mes td{
          border: 1px solid #000;
          text-align: center;
      }

      .mes thead{
        background-color: yellow;
      }

  </style>
</head>
<body>
    
  <h1>Título Principal</h1>
  <h2>Subtítulo</h2>

  <p>Lorem ipsum dolor sit <strong>amet consectetur</strong> adipisicing elit. Perferendis <em>recusandae</em> rerum perspiciatis quae dolorum, magni enim iusto beatae minus laboriosam iure dignissimos cum inventore voluptatibus illo molestiae alias consequatur id?</p>

  <hr>
  <h2>Lista</h2>

  <ul id="lista">
    <?php for ($cont = 1; $cont <= 10; $cont++): ?>
      <li>Item <?=$cont ?></li>
    <?php endfor; ?>
  </ul>

  <ol>
    <li>Item</li>
    <li>Item</li>
    <li>Item</li>
  </ol>

  <hr>
  <h2>Tabela</h2>
    
  <table class="mes">
     <caption>Março - 2024</caption>
     <thead>
        <tr>
            <th>D</th>
            <th>S</th>
            <th>T</th>
            <th>Q</th>
            <th>Q</th>
            <th>S</th>
            <th>S</th>
        </tr>
     </thead>
     <tbody>
        <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td>1</td>
           <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
        </tr>
        <tr>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
        </tr>
         <tr>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
        </tr>
         <tr>
            <td>31</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
     </tbody>
  </table>


</body>
</html>