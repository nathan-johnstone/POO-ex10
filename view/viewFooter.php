<?php
namespace View;

class ViewFooter{
    //ATTRIBUTS
    private ?string $buffer;

    //METHODS
    public function launchBuffer():self{
        ob_start();
?>
            <footer>
               <p> <?php echo "Salut le Monde !" ?> </p>
            </footer>
        </body>
        </html>
<?php 
        $this->buffer = ob_get_clean();

        return $this;
    }

    public function display():void{
        echo $this->buffer;
    }
}
