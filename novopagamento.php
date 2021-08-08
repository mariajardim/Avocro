<div class="novopagamento">
    <div class="voltarpagamentos">
            <h2>NOVO METODO DE PAGAMENTO</h2>
    </div>
    <div class="novopagamento-body">
        <form action='' method="POST">
            <div class="metodo">
                <div class="metodovisa">
                    <div class="metodofundo" name="metodo">
                        <label for="visa">
                            <i class="fab fa-cc-visa"></i>
                        </label>
                        <input type="radio" id="visa" name="metodo" value="visa" required>
                    </div>
                </div>
                <div class="metodomastercard">
                    <div class="metodofundo" name="metodo">
                        <label for="mastercard">
                            <i class="fab fa-cc-mastercard"></i>
                        </label>
                        <input type="radio" id="mastercard" name="metodo" value="mastercard" required>
                    </div>
                </div>
                
            </div>
            <div class="input-field">
                <label>Titular *</label>
                <input type="text" name="nometitular" id="nometitular" placeholder="Inserir nome do titular *" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>Nº Cartão *</label>
                <input type="text" name="ncartao" maxlength="16" pattern="([0-9]{16})" id="ncartao" style="width:100%; " placeholder="Inserir número do cartão *" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>Mês *</label>
                <select name="mes" id="mes" required>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                </select>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>Ano *</label>
                <select name="mes" id="mes" required>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                </select>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>CVV2 *</label>
                <input type="text" name="cvv" id="cvv" maxlength="3" pattern="([0-9]{3})" placeholder="Inserir CVV2 do cartão *" style="width:100%;" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label></label>
                <input type="number" name="none" id="none">
            </div>
            <div class="cancelarouconfirmar">
                <div class="cancelar">
                        <a href="minhaconta.php?area=dadospagamento">
                            <p>Cancelar</p>
                        </a>
                </div>
                <div class="confirmar">
                    <button type="submit" class="btn btn-primary">
                        Confirmar
                    </button>
                </div>
            </div>
        </form>        
    </div>
</div>
    